<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Laravel\Scout\Searchable;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Product extends Model
{
    use HasFactory;
    use HasSlug;
    use Searchable;

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'is_available' => 'boolean',
    ];

    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveSlugsTo('slug');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    /**
     * @return array<string>
     */
    public function toSearchableArray(): array
    {
        return [
            'name' => $this->name,
        ];
    }

    protected function image(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => str_starts_with($value, 'http') || ! $value ? $value : asset("storage/products/$value"),
        );
    }

    public function productReviews(): HasMany
    {
        return $this->hasMany(ProductReview::class);
    }

    public function addons(): HasMany
    {
        return $this->hasMany(Addon::class);
    }

    public function additionalImages(): HasMany
    {
        return $this->hasMany(AdditionalImage::class);
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function coupons(): HasMany
    {
        return $this->hasMany(Coupon::class, 'free_item_id');
    }

    public static function deleteImage(string $productImage): void
    {
        if (! empty($productImage) && file_exists(storage_path('app/public/products/'.pathinfo($productImage, PATHINFO_BASENAME)))) {
            unlink(storage_path('app/public/products/'.pathinfo($productImage, PATHINFO_BASENAME)));
        }
    }

    public function scopeWithPublishedReviewCount(Builder $query)
    {
        return $query->withCount(['productReviews' => function ($query) {
            $query->where('status', 'published');
        }]);
    }

    public function scopeWithPublishedReviewAvg(Builder $query)
    {
        return $query->withAvg(['productReviews' => function ($query) {
            $query->where('status', 'published');
        }], 'rating');
    }

    public function scopeFilterBy(Builder $query, ?array $filterBy): Builder
    {
        return $query
            ->when(isset($filterBy['status']) && in_array($filterBy['status'], ['draft', 'published', 'hidden']), function ($query) use ($filterBy) {
                $query->where('status', $filterBy['status']);
            })

            ->when(isset($filterBy['category']) && $filterBy['category'] !== '', function ($query) use ($filterBy) {
                $query->whereHas('category', function ($query) use ($filterBy) {
                    $query->where('slug', $filterBy['category']);
                });
            })

            ->when(isset($filterBy['rating']) && $filterBy['rating'] !== '', function ($query) use ($filterBy) {
                $query->whereHas('productReviews', function ($query) use ($filterBy) {
                    $query->where("status", "published")->havingRaw('AVG(product_reviews.rating) = ?', [$filterBy["rating"]]);
                });
            });
    }

    public function scopeSortBy(Builder $query, ?string $sortType)
    {
        switch ($sortType) {
            case 'latest':
                return $query->latest();
            case 'earliest':
                return $query->orderBy('id', 'asc');
            case 'high_to_low_stock':
                return $query->orderBy('qty', 'desc');
            case 'low_to_high_stock':
                return $query->orderBy('qty', 'asc');
            case 'price_low_to_high':
                return $query->orderByRaw('COALESCE(discount_price, base_price) asc');
            case 'price_high_to_low':
                return $query->orderByRaw('COALESCE(discount_price, base_price) desc');
            case 'id':
                return $query->orderBy('id', 'desc');
            default:
                return $query->orderBy('id', 'desc');
        }
    }
}

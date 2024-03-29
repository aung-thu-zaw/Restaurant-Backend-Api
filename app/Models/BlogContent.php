<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class BlogContent extends Model
{
    use HasFactory;
    use HasSlug;

    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    protected function thumbnail(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => str_starts_with($value, 'http') || ! $value ? $value : asset("storage/blog-contents/$value"),
        );
    }

    protected function publishedAt(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => $value ? date('F j, Y', strtotime($value)) : null,
        );
    }

    public function blogCategory(): BelongsTo
    {
        return $this->belongsTo(BlogCategory::class);
    }

    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class, 'author_id');
    }

    public function blogTags(): BelongsToMany
    {
        return $this->belongsToMany(BlogTag::class, 'blog_content_blog_tag');
    }

    public function scopeSearch($query, $searchTerm)
    {
        return $query->whereHas('author', function ($subquery) use ($searchTerm) {
            $subquery->where('name', 'like', "%{$searchTerm}%");
        })
            ->orWhere('title', 'like', "%{$searchTerm}%");
    }

    public function scopeFilterBy(Builder $query, ?array $filterBy): Builder
    {
        return $query
            ->when(isset($filterBy['status']) && in_array($filterBy['status'], ['draft', 'published', 'hidden']), function ($query) use ($filterBy) {
                $query->where('status', $filterBy['status']);
            })
            ->when(isset($filterBy['category']) && $filterBy['category'] !== '', function ($query) use ($filterBy) {
                $query->whereHas('blogCategory', function ($query) use ($filterBy) {
                    $query->where('slug', $filterBy['category']);
                });
            })
            ->when(isset($filterBy['tag']) && $filterBy['tag'] !== '', function ($query) use ($filterBy) {
                $query->whereHas('blogTags', function ($query) use ($filterBy) {
                    $query->where('blog_tags.name', $filterBy['tag']);
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
            default:
                return $query->orderBy('id', 'desc');
        }
    }
}

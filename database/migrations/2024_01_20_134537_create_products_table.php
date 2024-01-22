<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class() extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->constrained();
            $table->string('image');
            $table->string('name')->unique();
            $table->string('slug')->unique();
            $table->string('ingredients')->nullable();
            $table->text('description');
            $table->integer('qty')->default(0);
            $table->boolean('is_available')->default(false);
            $table->decimal('base_price', 8, 2)->default(0);
            $table->decimal('discount_price', 8, 2)->default(0)->nullable();
            $table->timestamp('discount_end_time')->nullable();
            $table->enum('status', ['draft', 'published']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};

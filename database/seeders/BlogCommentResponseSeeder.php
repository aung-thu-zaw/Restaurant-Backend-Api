<?php

namespace Database\Seeders;

use App\Models\BlogCommentResponse;
use Illuminate\Database\Seeder;

class BlogCommentResponseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        BlogCommentResponse::factory(30)->create();
    }
}

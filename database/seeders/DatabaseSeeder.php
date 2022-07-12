<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\PostTag;
use App\Models\Tag;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
//        Category::factory(30)->create();
//        Tag::factory(20)->create();
//        Post::factory(50)->create();
        PostTag::factory(50)->create();

    }
}

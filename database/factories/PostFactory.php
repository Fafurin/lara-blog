<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    protected $model = Post::class;

    public function definition(): array
    {
        return [
            'title' => $this->faker->text(30),
            'content' => $this->faker->paragraph(70),
            'category_id' => $this->faker->numberBetween(98, 127),
            'created_at' => $this->faker->dateTime(),
            'updated_at' => $this->faker->dateTime(),
            'preview_image' => 'https://picsum.photos/200/150',
            'main_image' => 'https://picsum.photos/600/400',
        ];
    }
}

<?php

namespace Database\Factories;

use App\Models\PostUserLike;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostUserLikeFactory extends Factory
{
    protected $model = PostUserLike::class;

    public function definition(): array
    {
        return [
            'post_id' => $this->faker->numberBetween(94, 143),
            'user_id' => $this->faker->numberBetween(22, 23),
            'created_at' => $this->faker->dateTime(),
            'updated_at' => $this->faker->dateTime(),
        ];
    }
}

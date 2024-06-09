<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{


    // get model count
    // generate random number between 1 and model count


    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'body' => [],
            'user_id' => fake()->numberBetween(1, User::count()),
            'post_id' => fake()->numberBetween(1, Post::count()),
        ];
    }
}

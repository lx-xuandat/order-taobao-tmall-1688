<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\Comment;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<\App\Models\Comment>
 */
final class CommentFactory extends Factory
{
    /**
    * The name of the factory's corresponding model.
    *
    * @var string
    */
    protected $model = Comment::class;

    /**
    * Define the model's default state.
    *
    * @return array
    */
    public function definition(): array
    {
        return [
            'user_id' => \App\Models\Supplier::factory(),
            'comment_id' => \App\Models\Comment::factory(),
            'commentable_type' => fake()->word,
            'commentable_id' => fake()->randomNumber(),
            'content' => fake()->text,
        ];
    }
}

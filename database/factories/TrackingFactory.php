<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\Tracking;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<\App\Models\Tracking>
 */
final class TrackingFactory extends Factory
{
    use \App\Traits\FactoryTrait;

    /**
    * The name of the factory's corresponding model.
    *
    * @var string
    */
    protected $model = Tracking::class;

    /**
    * Define the model's default state.
    *
    * @return array
    */
    public function definition(): array
    {
        return [
            'trackingable_type' => fake()->word,
            'trackingable_id' => fake()->randomNumber(),
            'timeline' => fake()->optional()->word,
        ];
    }
}

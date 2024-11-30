<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\Delivery;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<\App\Models\Delivery>
 */
final class DeliveryFactory extends Factory
{
    /**
    * The name of the factory's corresponding model.
    *
    * @var string
    */
    protected $model = Delivery::class;

    /**
    * Define the model's default state.
    *
    * @return array
    */
    public function definition(): array
    {
        return [
            'deliver_id' => \App\Models\Delivery::factory(),
            'package_id' => \App\Models\Package::factory(),
            'from' => fake()->word,
            'to' => fake()->word,
            'logistic_id' => \App\Models\Supplier::factory(),
            'creator_id' => \App\Models\Supplier::factory(),
            'assign_id' => \App\Models\Supplier::factory(),
        ];
    }
}

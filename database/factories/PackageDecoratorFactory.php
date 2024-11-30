<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\PackageDecorator;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<\App\Models\PackageDecorator>
 */
final class PackageDecoratorFactory extends Factory
{
    /**
    * The name of the factory's corresponding model.
    *
    * @var string
    */
    protected $model = PackageDecorator::class;

    /**
    * Define the model's default state.
    *
    * @return array
    */
    public function definition(): array
    {
        return [
            'user_id' => \App\Models\Supplier::factory(),
            'package_id' => \App\Models\Package::factory(),
            'label' => fake()->word,
            'key' => fake()->word,
            'value_text' => fake()->word,
            'value_numeric' => fake()->randomFloat(2, 0, 999999),
        ];
    }
}

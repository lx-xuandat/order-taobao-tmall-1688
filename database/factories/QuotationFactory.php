<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\Quotation;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<\App\Models\Quotation>
 */
final class QuotationFactory extends Factory
{
    use \App\Traits\FactoryTrait;

    /**
    * The name of the factory's corresponding model.
    *
    * @var string
    */
    protected $model = Quotation::class;

    /**
    * Define the model's default state.
    *
    * @return array
    */
    public function definition(): array
    {
        return [
            'name' => fake()->name,
            'key' => fake()->word,
            'from_money' => fake()->optional()->randomFloat(2, 0, 999999),
            'price' => fake()->optional()->randomFloat(2, 0, 999999),
            'unit' => fake()->optional()->word,
            'description' => fake()->text,
            'from_date' => fake()->date(),
            'end_date' => fake()->date(),
            'admin_id' => \App\Models\Supplier::factory(),
        ];
    }
}

<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\Invoice;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<\App\Models\Invoice>
 */
final class InvoiceFactory extends Factory
{
    use \App\Traits\FactoryTrait;

    /**
    * The name of the factory's corresponding model.
    *
    * @var string
    */
    protected $model = Invoice::class;

    /**
    * Define the model's default state.
    *
    * @return array
    */
    public function definition(): array
    {
        return [
            'invoiceable_type' => fake()->word,
            'invoiceable_id' => fake()->randomNumber(),
        ];
    }
}

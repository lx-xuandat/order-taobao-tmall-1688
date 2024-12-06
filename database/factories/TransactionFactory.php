<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\Transaction;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<\App\Models\Transaction>
 */
final class TransactionFactory extends Factory
{
    use \App\Traits\FactoryTrait;

    /**
    * The name of the factory's corresponding model.
    *
    * @var string
    */
    protected $model = Transaction::class;

    /**
    * Define the model's default state.
    *
    * @return array
    */
    public function definition(): array
    {
        return [
            'transaction_id' => \App\Models\Transaction::factory(),
            'transactionable_type' => fake()->word,
            'transactionable_id' => fake()->randomNumber(),
            'transaction_time' => fake()->dateTime(),
            'owner_id' => \App\Models\Supplier::factory(),
            'employee_id' => \App\Models\Supplier::factory(),
            'in' => fake()->randomFloat(2, 0, 99999999),
            'out' => fake()->randomFloat(2, 0, 99999999),
            'status' => fake()->randomNumber(1),
            'debits' => fake()->randomFloat(2, 0, 99999999),
        ];
    }
}

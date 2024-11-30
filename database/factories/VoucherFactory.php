<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\Voucher;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<\App\Models\Voucher>
 */
final class VoucherFactory extends Factory
{
    /**
    * The name of the factory's corresponding model.
    *
    * @var string
    */
    protected $model = Voucher::class;

    /**
    * Define the model's default state.
    *
    * @return array
    */
    public function definition(): array
    {
        return [
            'name' => fake()->name,
            'total' => fake()->randomNumber(),
            'description' => fake()->text,
            'invoice_min' => fake()->randomFloat(2, 0, 999999),
            'discount_max' => fake()->randomFloat(2, 0, 999999),
            'active' => fake()->randomNumber(),
            'expire_date' => fake()->dateTime(),
        ];
    }
}

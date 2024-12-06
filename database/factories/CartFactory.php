<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\Cart;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<\App\Models\Cart>
 */
final class CartFactory extends Factory
{
    use \App\Traits\FactoryTrait;

    /**
    * The name of the factory's corresponding model.
    *
    * @var string
    */
    protected $model = Cart::class;

    /**
    * Define the model's default state.
    *
    * @return array
    */
    public function definition(): array
    {
        return [
            'customer_id' => \App\Models\Supplier::factory(),
            'shop_id' => \App\Models\Supplier::factory(),
            'sub_total' => fake()->randomFloat(2, 0, 99999999),
            'delivery' => fake()->randomNumber(),
            'pickup_point' => fake()->randomNumber(),
            'discount' => fake()->randomFloat(2, 0, 99999999),
            'shipping_charges' => fake()->randomFloat(2, 0, 99999999),
            'tax' => fake()->randomFloat(2, 0, 99999999),
            'voucher_id' => \App\Models\Voucher::factory(),
            'money_decorator' => fake()->randomFloat(2, 0, 99999999),
            'total' => fake()->randomFloat(2, 0, 99999999),
            'status' => fake()->randomNumber(1),
        ];
    }
}

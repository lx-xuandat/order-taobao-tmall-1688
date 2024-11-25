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
            'product_id' => \App\Models\Product::factory(),
            'shop_id' => \App\Models\Human::factory(),
            'customer_id' => \App\Models\Human::factory(),
            'item_id' => fake()->word,
            'sku_id' => fake()->word,
            'po_status' => fake()->randomNumber(1),
            'sku_name' => fake()->word,
            'item_quantity' => fake()->randomNumber(),
            'item_price' => fake()->randomFloat(2, 0, 999999),
            'item_link' => fake()->word,
            'item_title' => fake()->word,
            'item_picture' => fake()->word,
        ];
    }
}

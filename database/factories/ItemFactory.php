<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\Item;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<\App\Models\Item>
 */
final class ItemFactory extends Factory
{
    /**
    * The name of the factory's corresponding model.
    *
    * @var string
    */
    protected $model = Item::class;

    /**
    * Define the model's default state.
    *
    * @return array
    */
    public function definition(): array
    {
        return [
            'cart_id' => \App\Models\Cart::factory(),
            'product_id' => \App\Models\Product::factory(),
            'shop_id' => \App\Models\Supplier::factory(),
            'customer_id' => \App\Models\Supplier::factory(),
            'status' => fake()->randomNumber(1),
            'quantity' => fake()->randomNumber(),
            'price' => fake()->randomFloat(2, 0, 999999),
            'sku_link' => fake()->word,
            'sku' => fake()->word,
            'thumbnail' => fake()->word,
        ];
    }
}

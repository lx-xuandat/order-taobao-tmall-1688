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
    use \App\Traits\FactoryTrait;

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
            'customer_id' => \App\Models\Supplier::factory(),
            'shop_id' => \App\Models\Supplier::factory(),
            'ec_link_id' => \App\Models\ECommerceLink::factory(),
            'cart_link_id' => \App\Models\CartLink::factory(),
            'status' => fake()->randomNumber(1),
            'quantity' => fake()->randomNumber(),
            'price' => fake()->randomFloat(2, 0, 999999),
            'sku_link' => fake()->word,
            'sku' => fake()->word,
            'thumbnail' => fake()->word,
        ];
    }
}

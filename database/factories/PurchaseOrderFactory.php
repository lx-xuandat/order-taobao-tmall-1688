<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\PurchaseOrder;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<\App\Models\PurchaseOrder>
 */
final class PurchaseOrderFactory extends Factory
{
    /**
    * The name of the factory's corresponding model.
    *
    * @var string
    */
    protected $model = PurchaseOrder::class;

    /**
    * Define the model's default state.
    *
    * @return array
    */
    public function definition(): array
    {
        return [
            'customer_id' => \App\Models\Supplier::factory(),
            'item_id' => \App\Models\Item::factory(),
            'cart_id' => \App\Models\Cart::factory(),
            'product_id' => \App\Models\Product::factory(),
            'shop_id' => \App\Models\Supplier::factory(),
            'status' => fake()->randomNumber(1),
            'sku' => fake()->word,
            'quantity' => fake()->randomNumber(),
            'price' => fake()->randomFloat(2, 0, 999999),
            'link' => fake()->url,
            'thumbnail' => fake()->word,
        ];
    }
}

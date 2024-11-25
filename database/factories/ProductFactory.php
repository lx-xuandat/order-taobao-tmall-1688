<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<\App\Models\Product>
 */
final class ProductFactory extends Factory
{
    /**
    * The name of the factory's corresponding model.
    *
    * @var string
    */
    protected $model = Product::class;

    /**
    * Define the model's default state.
    *
    * @return array
    */
    public function definition(): array
    {
        return [
            'china_shop_id' => \App\Models\Human::factory(),
            'item_id' => fake()->word,
            'sku_id' => fake()->word,
            'title' => fake()->title,
            'link' => fake()->url,
            'picture' => fake()->word,
            'price' => fake()->randomFloat(2, 0, 99999999),
        ];
    }
}

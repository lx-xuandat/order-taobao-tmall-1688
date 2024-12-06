<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\ECommerceLink;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<\App\Models\ECommerceLink>
 */
final class ECommerceLinkFactory extends Factory
{
    use \App\Traits\FactoryTrait;

    /**
    * The name of the factory's corresponding model.
    *
    * @var string
    */
    protected $model = ECommerceLink::class;

    /**
    * Define the model's default state.
    *
    * @return array
    */
    public function definition(): array
    {
        return [
            'shop_id' => \App\Models\Supplier::factory(),
            'title' => fake()->title,
            'item_link' => fake()->word,
            'thumbnail' => fake()->word,
            'price' => fake()->randomFloat(2, 0, 99999999),
        ];
    }
}

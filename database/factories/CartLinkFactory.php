<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\CartLink;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<\App\Models\CartLink>
 */
final class CartLinkFactory extends Factory
{
    use \App\Traits\FactoryTrait;

    /**
    * The name of the factory's corresponding model.
    *
    * @var string
    */
    protected $model = CartLink::class;

    /**
    * Define the model's default state.
    *
    * @return array
    */
    public function definition(): array
    {
        return [
            'cart_id' => \App\Models\Cart::factory(),
            'ec_link_id' => \App\Models\ECommerceLink::factory(),
            'customer_id' => \App\Models\Supplier::factory(),
            'services_json' => fake()->optional()->word,
        ];
    }
}

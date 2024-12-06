<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\CartItem;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<\App\Models\CartItem>
 */
final class CartItemFactory extends Factory
{
    use \App\Traits\FactoryTrait;

    /**
    * The name of the factory's corresponding model.
    *
    * @var string
    */
    protected $model = CartItem::class;

    /**
    * Define the model's default state.
    *
    * @return array
    */
    public function definition(): array
    {
        return [
        ];
    }
}

<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\Supplier;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<\App\Models\Supplier>
 */
final class SupplierFactory extends Factory
{
    use \App\Traits\FactoryTrait;

    /**
    * The name of the factory's corresponding model.
    *
    * @var string
    */
    protected $model = Supplier::class;

    /**
    * Define the model's default state.
    *
    * @return array
    */
    public function definition(): array
    {
        return [
            'name' => fake()->name,
            'email' => fake()->safeEmail,
            'type' => fake()->randomNumber(1),
            'website' => fake()->optional()->word,
            'address' => fake()->optional()->address,
            'phone' => fake()->optional()->phoneNumber,
            'email_verified_at' => fake()->optional()->datetime(),
            'password' => bcrypt(fake()->optional()->password),
            'current_password' => fake()->optional()->word,
            'password_confirmation' => fake()->optional()->word,
            'active' => fake()->randomNumber(1),
            'remember_token' => Str::random(10),
        ];
    }
}

<?php

namespace App\Traits;

use App\Enums\UserType;

trait FactoryTrait
{
    public function customer()
    {
        return $this->state(fn (array $attributes) => [
            'name' => fake()->name,
            'email' => fake()->safeEmail,
            'type' => UserType::Customer->value,
            'address' => fake()->optional()->address,
            'phone' => fake()->optional()->phoneNumber,
            'email_verified_at' => fake()->optional()->datetime(),
            'password' => bcrypt(fake()->optional()->password),
            'current_password' => fake()->optional()->word,
            'password_confirmation' => fake()->optional()->word,
            'active' => true,
        ]);
    }
}

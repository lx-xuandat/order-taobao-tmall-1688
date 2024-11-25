<?php

namespace Tests\Feature;

use App\Models\Cart;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AddToCartTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_add_to_cart_happy(): void
    {
        $response = $this->postJson('/api/carts',
            (Cart::factory()->make())->toArray()
        );

        // $response->dd();

        $response->assertStatus(status: 200);
    }
}

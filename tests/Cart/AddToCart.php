<?php

test('Error 403: chua login.', function () {
    $link = route('customers.carts.store');

    $response = $this->postJson($link, [
        'shop' => fake()->word(),
    ]);

    $response->assertStatus(403);
});

test('Success 201: ', function ($user, $data) {

    $response = $this
        ->actingAs($user, 'web')
        ->postJson(route('customers.carts.store'), $data);

    $response
        ->assertStatus(200)
        ->assertJson([
            'success' => true,
            'message' => 'Cart created.',
        ]);

})
->with('users')
->with('products');

test('Error 422: ', function ($user, $data) {
    $response = $this
        ->actingAs($user, 'web')
        ->postJson(route('customers.carts.store'), $data);

    $response
        ->assertStatus(422)
        ->assertJson([
            'error' => true,
        ]);
})
->with('users')
->with('products');

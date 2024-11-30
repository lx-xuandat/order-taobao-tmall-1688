<?php

use App\Enums\UserType;
use App\Models\User;

test('customer add to cart ok', function () {
    $customer = User::where([
        'type' => UserType::CustomerUndefined->value,
    ])->first();

    $response = $this
        ->actingAs($customer)
        ->withHeaders([
            'Origin' => 'https://item.taobao.com',
        ])
        ->postJson('extensions/add-to-cart', [
            'product' => [
                'title' => 'xin choa',
                'price' => '1000',
                'sku' => '绿色茶语经典【100包】',
                'link' => 'https://item.taobao.com/item.htm?id=773344311968&skuId=5291482652312&datlx=123587',
                'thumbnail' => 'https://gw.alicdn.com/bao/uploaded/i3/2213261159658/O1CN01EIjE3y2LDQ8YWAhcu_!!2213261159658.jpg_.webp',
                'quantity' => '55',
            ],
            'shop' => [
                'name' => 'shop xin nhat',
                'website' => 'https://shop1273.taobao.com/'
            ]
        ]);

    // $response->dd();
    // $response->dumpHeaders();

    $response->assertOk();
});

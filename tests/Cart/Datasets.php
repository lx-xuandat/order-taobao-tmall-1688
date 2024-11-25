<?php

dataset('products', [
    // '0001' => [
    //     'shop' => [
    //         'name' => 'Shop datlx'
    //     ]
    // ],
    '0002' => [
        array(
            'shop' =>
            array(
                'name' => 'Joelle Rau',
                'website' => 'https://shop14587455589.taobao.com',
            ),
            'product' =>
            array(
                'product_link' => 'https://item.taobao.com/?id=1254785458',
                'product_name' => 'xin chao ban',
            ),
            'item' =>
            array(
                'item_name' => 'Wilhelmine Leuschke',
                'item_link' => 'http://emard.com/',
                'item_variant' => 'color: Black, size: XL',
                'quantity' => 4,
                'gia_mua' => '160',
                'gia_ban' => 150.5,
            ),
            'market' => 'taobao',
        )
    ]
]);

dataset(
    'users',
    [
        '01' => App\Models\User::factory()->make(['id' => 1])
    ]
);

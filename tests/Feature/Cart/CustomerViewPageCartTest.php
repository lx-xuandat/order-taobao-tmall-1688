<?php

use App\Enums\UserType;
use App\Models\Cart;
use App\Models\Item;
use App\Models\User;

test('i can see my cart', function () {
    $user = User::factory()->customer()->make([
        'id' => UserType::CustomerUndefined->value
    ]);

    $this->actingAs($user);

    $cart = Cart::factory()->create([
        'customer_id' => $user->id,
    ]);

    // Thêm các item vào giỏ hàng
    $cartItems = Item::factory()->count(3)->create([
        'cart_id' => $cart->id,
    ]);

    // Gửi yêu cầu GET để lấy danh sách item trong giỏ hàng
    $response = $this->get('/carts');

    // Kiểm tra trạng thái phản hồi
    $response->assertStatus(200);

    // Kiểm tra dữ liệu trả về có đúng số lượng item
    $response->assertJsonCount(3, 'data'); // Đảm bảo API trả về 3 item

    // Kiểm tra nội dung trả về chứa đúng các thông tin của cart item
    foreach ($cartItems as $item) {
        $response->assertJsonFragment([
            'id' => $item->id,
            'cart_id' => $item->cart_id,
            'ec_link_id' => $item->ec_link_id,
            'shop_id' => $item->shop_id,
            'quantity' => $item->quantity,
            'price' => $item->price,
            'sku_link' => $item->sku_link,
            'thumbnail' => $item->thumbnail,
            'sku' => $item->sku,
        ]);
    }

    $response->assertStatus(200);
});

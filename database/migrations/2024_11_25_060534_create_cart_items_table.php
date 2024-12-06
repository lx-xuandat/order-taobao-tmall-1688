<?php

use App\Enums\OrderStatus;
use App\Enums\ProductType;
use App\Enums\UserType;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->id();

            $table->foreignId('cart_id')->nullable()->constrained('carts');
            $table->foreignId('customer_id')->default(UserType::CustomerUndefined->value)->constrained('users');
            $table->foreignId('shop_id')->default(UserType::GuiHangTQVN->value)->constrained('users');
            $table->foreignId('ec_link_id')->default(ProductType::GuiHangTQVN->value)->constrained('e_commerce_links');

            $table->foreignId('cart_link_id')->nullable()->constrained('cart_links');

            $table->tinyInteger('status')->default(OrderStatus::ItemInCart);
            $table->integer('quantity')->default(1);
            $table->decimal('price')->default(0);
            $table->string('sku_link', 200)->index()->default(ProductType::GuiHangTQVN);
            $table->string('sku')->default(ProductType::GuiHangTQVN);
            $table->string('thumbnail')->default(ProductType::GuiHangTQVN);
            $table->timestamps();

            $table->unique(['customer_id', 'ec_link_id', 'created_at']);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items');
    }
};

<?php

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
		Schema::create('purchase_orders', function(Blueprint $table) {
            $table->id();

            $table->foreignId('customer_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('item_id')->constrained('cart_items')->onDelete('cascade');
            $table->foreignId('cart_id')->constrained('carts')->onDelete('cascade');
            $table->foreignId('ec_link_id')->constrained('e_commerce_links')->onDelete('cascade');
            $table->foreignId('shop_id')->constrained('users')->onDelete('cascade');

            $table->tinyInteger('status');
            $table->string('sku');
            $table->integer('quantity');
            $table->decimal('price');
            $table->string('link', 200)->index();
            $table->string('thumbnail');
            $table->timestamps();

            $table->unique(['customer_id', 'cart_id', 'link']);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('purchase_orders');
	}
};

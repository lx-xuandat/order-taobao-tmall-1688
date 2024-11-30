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
        Schema::create('items', function (Blueprint $table) {
            $table->id();

            $table->foreignId('cart_id')->nullable()->constrained('carts')->onDelete('cascade');
            $table->foreignId('product_id')->default(1)->constrained('products')->onDelete('cascade');
            $table->foreignId('shop_id')->default(1)->constrained('users')->onDelete('cascade');

            $table->foreignId('customer_id')->constrained('users')->onDelete('cascade');
            $table->tinyInteger('status');

            $table->integer('quantity');
            $table->decimal('price');
            $table->string('sku_link', 200)->index();
            $table->string('sku');
            $table->string('thumbnail');
            $table->timestamps();

            $table->unique(['customer_id', 'sku_link', 'created_at']);

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

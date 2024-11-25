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
        Schema::create('carts', function (Blueprint $table) {
            $table->id();

            $table->foreignId('product_id')->constrained('products')->onDelete('cascade');
            $table->foreignId('shop_id')->constrained('users')->onDelete('cascade');

            $table->foreignId('customer_id')->constrained('users')->onDelete('cascade');
            $table->string('item_id');
            $table->string('sku_id');
            $table->tinyInteger('po_status');

            $table->string('sku_name');
            $table->integer('item_quantity');
            $table->decimal('item_price');
            $table->string('item_link', 200);
            $table->string('item_title');
            $table->string('item_picture');
            $table->timestamps();

            $table->unique(['customer_id', 'item_id', 'sku_id', 'po_status']);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('carts');
    }
};

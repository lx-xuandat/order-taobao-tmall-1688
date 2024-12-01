<?php

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
        Schema::create('cart_items', function (Blueprint $table) {
            $table->id();

            $table->foreignId('cart_id')->nullable()->constrained('carts')->onDelete('cascade');
            $table->foreignId('customer_id')->constrained('users')->onDelete('no action');
            $table->foreignId('ec_link_id')->default(ProductType::GuiHangTQVN->value)->constrained('e_commerce_links')->onDelete('cascade');

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
        Schema::dropIfExists('cart_items');
    }
};

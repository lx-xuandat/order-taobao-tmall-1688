<?php

use App\Enums\ProductType;
use App\Enums\UserType;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('cart_links', function (Blueprint $table) {
            $table->id();

            $table->foreignId('cart_id')->default(ProductType::GuiHangTQVN->value)->constrained('carts');
            $table->foreignId('ec_link_id')->default(ProductType::GuiHangTQVN->value)->constrained('e_commerce_links');
            $table->foreignId('customer_id')->default(UserType::CustomerUndefined->value)->constrained('users');

            $table->longText('services_json')->nullable()->comment('Cac dich vu khac neu co sd: dong go, kiem dem,...');

            $table->timestamps();

            $table->unique(['cart_id', 'ec_link_id', 'customer_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cart_links');
    }
};

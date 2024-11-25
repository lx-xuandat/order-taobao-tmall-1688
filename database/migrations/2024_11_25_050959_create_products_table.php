<?php

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
        Schema::create('products', function (Blueprint $table) {
            $table->id();

            $table->foreignId('china_shop_id')
                ->constrained('users')
                ->onDelete(action: 'cascade');

            $table->string('item_id', length: 50);
            $table->string('sku_id', length: 50)->default('parent');

            $table->string('title', 255)->comment('item_title or sku_name');
            $table->string('link', 255)->comment('Item or sku');
            $table->string('picture', 255)->comment('link image');
            $table->decimal('price', 10, 2)->default(0)->comment('Product parent is 0');

            $table->unique(['china_shop_id', 'item_id', 'sku_id']);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};

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

            $table->foreignId('shop_id')
                ->constrained('users')
                ->onDelete(action: 'cascade');

            $table->string('title', 255)->comment('Ten sp');
            $table->string('item_link', 255)->index()->comment('Item or sku');
            $table->string('thumbnail', 255)->comment('link image');
            $table->decimal('price', 10, 2)->default(0)->comment('Product parent is 0');

            $table->unique(['shop_id', 'item_link']);

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

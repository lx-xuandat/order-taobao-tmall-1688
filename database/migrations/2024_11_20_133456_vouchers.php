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
        Schema::create('vouchers', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->integer('total');
            $table->string('description');
            $table->decimal('invoice_min'); // hoa don toi thieu tien tu xxx d
            $table->decimal('discount_max'); // giam toi da so tien xxx dong
            $table->integer('active'); // sl voucher con lai
            $table->datetime('expire_date'); // thoi han sd

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vouchers');
    }
};

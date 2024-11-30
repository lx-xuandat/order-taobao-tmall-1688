<?php

use App\Enums\UserType;
use App\Enums\VoucherType;
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
        Schema::create('carts', function (Blueprint $table) {
            $table->id();

            $table->foreignId('customer_id')->constrained('users')->cascadeOnDelete();

            $table->foreignId('shop_id')->default(3)->constrained('users')->cascadeOnDelete();

            $table->decimal('sub_total', 10, 2)->default(0);

            $table->integer('delivery')->default(0); // so sp ban giao

            $table->integer('pickup_point')->default(0); // diem tich luy

            $table->decimal('discount', 10, 2)->default(0); // so tien duoc giam

            $table->decimal('shipping_charges', 10, 2)->default(0);

            $table->decimal('tax', 10, 2)->default(0); // tien thue

            $table->foreignId('voucher_id')->nullable()->default(VoucherType::None->value)->constrained('vouchers')->onDelete('set null');

            $table->decimal('money_decorator', 10, 2)->default(0); // cac tien dich vu khac danh cho cac loai don hang khac nhau: ki gui, mua ho, thanh toan ho

            $table->decimal('total', 10, 2)->default(0);

            $table->tinyInteger('status');

            $table->unique(['status', 'customer_id', 'shop_id', 'created_at']);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carts');
    }
};

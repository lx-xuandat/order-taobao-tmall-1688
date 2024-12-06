<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
	/**
	 * Run the migrations.
     *
     * Goi hang nay co the la: bao hang chua nhieu kien hang, kien hang tmdt, kien hang ki gui, kien hang chua cac kien khac ship tra khach
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::dropIfExists('package_decorators');
		Schema::dropIfExists('packages');

        Schema::create('packages', function(Blueprint $table) {
            $table->id();

            $table->foreignId('package_id')->nullable()->constrained('packages')->onDelete('cascade')->commnent('Bao to se la 1');
            $table->foreignId('customer_id')->default(1)->constrained('users')->onDelete('cascade')->commnent('1: ko xd');
            $table->foreignId('cart_id')->default(1)->constrained('carts')->onDelete('cascade')->commnent('hang ki gui thi se la 1');

            $table->string('waybill')->index()->comment('Ma van don de tracking qua trinh van chuyen.');

            $table->timestamps();

            $table->unique(['package_id', 'customer_id', 'cart_id', 'waybill']);
		});

        // cac dich vu gia tang cua khach hang su dung cho don hang cua minh

		Schema::create('package_decorators', function(Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->constrained('users')->onDelete('cascade');
            $table->foreignId('package_id')->nullable()->constrained('packages')->onDelete('cascade');
            $table->string('label')->comment('uuid dich vu');
            $table->tinyText('key')->comment('Label hien thi ra ngoai front end');
            $table->string('value_text')->comment('Gia tri duoc set: yes->checked');
            $table->decimal('value_numeric')->comment('Gia tri duoc set: yes->checked');

            $table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::dropIfExists('package_decorators');
		Schema::dropIfExists('packages');
	}
};

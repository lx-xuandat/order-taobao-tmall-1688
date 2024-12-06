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
		Schema::dropIfExists('deliveries');

		Schema::create('deliveries', function(Blueprint $table) {
            $table->id();

            $table->foreignId('deliver_id')->nullable()->constrained('deliveries')->onDelete('cascade');
            $table->foreignId('package_id')->constrained('packages')->onDelete('cascade');

            $table->string('from')->comment('TT nguoi gui.');
            $table->string('to')->comment('TT nguoi nhan.');

            $table->foreignId('logistic_id')->constrained('users')->onDelete('cascade')->comment('Don vi nhan van chuyen');
            $table->foreignId('creator_id')->constrained('users')->onDelete('cascade')->comment('Nguoi tao yeu cau');
            $table->foreignId('assign_id')->constrained('users')->onDelete('cascade')->comment('Nguoi nhan nhiem vu');

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
		Schema::dropIfExists('deliveries');
	}
};

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
		Schema::dropIfExists('transactions');


        /**
         * QL cac hoat dong giao dich chuyen tien, thu chi
         */
		Schema::create('transactions', function(Blueprint $table) {
            $table->id();

            $table->foreignId('transaction_id')->nullable()->constrained('transactions')->onDelete('restrict');

            $table->morphs('transactionable');

            // bang luu thong tin giao dich tien vao ra cua cong ty
            // khi 1 yeu cau mua bi huy thi se tao ban ghi moi hoan tien chu ko update lai thong tin so tien giao dich thanh 0
            // ko duoc sua status vi no phan anh hoa don tai thoi diem lap da thanh toan hay chua
            // se co hoa don khac tham chieu toi no de xac dinh hoa don cha da thanh toan day

            $table->dateTime('transaction_time');

            $table->foreignId('owner_id')->nullable(false)->constrained('users')->onDelete('restrict');
            $table->foreignId('employee_id')->nullable(false)->constrained('users')->onDelete('restrict');


            $table->decimal('in', 10, 2)->comment('Tien thu ve, tien co');
            $table->decimal('out', 10, 2)->comment('Tien chi tra, tien no');
            $table->boolean('status', 10, 2)->comment('Thanh toan hay chua');


            $table->decimal('debits', 10, 2)->comment('Tong tien co cuoi cung');

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
		Schema::dropIfExists('transactions');
	}
};

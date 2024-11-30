<?php

use App\Enums\UserType;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email', 50)->unique();
            $table->tinyInteger('type')->default(UserType::Employees)->comment('Kieu doi tuong: shop, khach hang, nhan vien, quan li.');
            $table->string('website', 100)->nullable();
            $table->string('address', 255)->nullable();
            $table->string('phone', 50)->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->string('current_password')->nullable();
            $table->string('password_confirmation')->nullable();
            $table->boolean('active')->default(true)->comment('Allow login');
            $table->rememberToken();
            $table->timestamps();

            $table->unique([
                'type',
                'phone',
                'email',
                'website',
                'address',
            ]);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}

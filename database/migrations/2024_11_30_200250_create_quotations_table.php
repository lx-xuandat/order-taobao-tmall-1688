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
        Schema::create('quotations', function (Blueprint $table) {
            $table->id();
            $table->string('name')->default(0);
            $table->string('key')->default(0);
            $table->decimal('from_money')->default(0)->nullable();
            $table->decimal('price')->default(0)->nullable();
            $table->string('unit')->nullable();
            $table->string('description')->default(0);
            $table->date('from_date');
            $table->date('end_date');
            $table->foreignId('admin_id')->constrained('users')->onDelete('no action');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quotations');
    }
};

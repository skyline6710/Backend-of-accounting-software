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
        Schema::create('employees', function (Blueprint $table) {
            $table->uuid('UUID')->primary();
            $table->foreign('branch_UUID')->references('UUID')->on('branchs')->onDelete('cascade');
            $table->foreign('user_UUID')->references('UUID')->on('users')->onDelete('cascade');
            $table->string('full_name');
            $table->string('avatar')->nullable();
            $table->string('email')->unique()->nullable();
            $table->string('phone_number')->unique()->nullable();
            $table->enum('gender', ['male', 'female']);
            $table->text('address');
            $table->integer('base_salary');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};

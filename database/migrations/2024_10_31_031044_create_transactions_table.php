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
        Schema::create('transactions', function (Blueprint $table) {
            $table->uuid('UUID')->primary();
            $table->foreign('users_UUID')->references('UUID')->on('users')->onDelete('cascade');
            $table->foreign('transactions_types_UUID')->references('UUID')->on('transactions_types')->onDelete('cascade');
            $table->foreign('cost_UUID')->references('UUID')->on('costs')->onDelete('cascade');
            $table->text('transaction');
            $table->float('amount_price');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};

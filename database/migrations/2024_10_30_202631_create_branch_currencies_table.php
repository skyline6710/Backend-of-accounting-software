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
        Schema::create('branch_currencies', function (Blueprint $table) {
            $table->uuid('UUID')->primary();
            $table->foreign('branch_UUID')->references('UUID')->on('branchs')->onDelete('cascade');
            $table->text('currency');
            $table->float('xchange_rate');
            $table->text('corresponding_currency');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('branch_currencies');
    }
};

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
            $table->uuid('id')->primary();
            $table->foreign('branch_id')->references('id')->on('branchs')->onDelete('cascade');
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

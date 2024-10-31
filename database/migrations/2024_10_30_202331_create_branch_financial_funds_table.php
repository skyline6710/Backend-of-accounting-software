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
        Schema::create('branch_financial_funds', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreign('company_id')->references('id')->on('companies')->onDelete('cascade');
            $table->dateTime('total_amount');
            $table->dateTime('last_edit_date');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('branch_financial_funds');
    }
};

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
        Schema::create('warehouses', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreign('branch_id')->references('id')->on('branchs')->onDelete('cascade');
            $table->float('warehouse_number');
            $table->float('capacity');
            $table->text('address');
            $table->integer('number_of_products_is');
            $table->dateTime('last_entry_date');
            $table->dateTime('last_dispatch_date');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('warehouses');
    }
};

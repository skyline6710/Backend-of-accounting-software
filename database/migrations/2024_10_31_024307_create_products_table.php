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
        Schema::create('products', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreign('warehouses_id')->references('id')->on('warehouses')->onDelete('cascade');
            $table->string('title');
            $table->text('description')->nullable();
            $table->integer('quantity_in_warehouse');
            $table->float('selling_price');
            $table->float('buying_price');
            $table->text('avatar');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};

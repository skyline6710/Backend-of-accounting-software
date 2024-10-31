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
        Schema::create('invoice_products', function (Blueprint $table) {
            $table->uuid('UUID')->primary();
            $table->foreign('invoices_UUID')->references('UUID')->on('invoices')->onDelete('cascade');
            $table->foreign('products_UUID')->references('UUID')->on('products')->onDelete('cascade');
            $table->float('total_price');
            $table->float('quantity');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoice_products');
    }
};

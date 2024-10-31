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
        Schema::create('branchs', function (Blueprint $table) {
            $table->uuid('UUID')->primary();
            $table->uuid('company_UUID');
            $table->boolean('is_main_branch');
            $table->string('branch_location');
            $table->string('branch_number');
            $table->integer('number_of_employees')->nullable();
            $table->foreign('company_UUID')->references('UUID')->on('companies')->onDelete('cascade');
            $table->softDeletes();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('branchs');
    }
};

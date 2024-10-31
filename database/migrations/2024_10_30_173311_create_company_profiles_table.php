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
        Schema::create('company_profiles', function (Blueprint $table) {
            $table->uuid('UUID')->primary();
            $table->uuid('company_UUID');
            $table->string('profile_name');
            $table->string('description')->nullable();
            $table->string('logo')->nullable();
            $table->softDeletes()->nullable();
            $table->foreign('company_UUID')->references('UUID')->on('companies')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('company_profiles');
    }
};

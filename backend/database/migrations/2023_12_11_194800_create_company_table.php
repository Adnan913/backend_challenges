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
        Schema::create('company', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("branch");
            $table->unsignedBigInteger('location_id');
            $table->unsignedBigInteger('manager_id');
            $table->unsignedBigInteger('asset_id');
            $table->unsignedBigInteger('employee_id');
            $table->timestamps();
            
            $table->foreign('location_id')->references('id')->on('locations');
            $table->foreign('manager_id')->references('id')->on('managers');
            $table->foreign('asset_id')->references('id')->on('assets');
            $table->foreign('employee_id')->references('id')->on('employees');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('company');
    }
};

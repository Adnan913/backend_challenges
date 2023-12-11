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
        Schema::create('company_groups', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("description");
            $table->string("type");
            $table->string("status");
            $table->unsignedBigInteger('employee_id')->nullable();
            $table->unsignedBigInteger('sub_group_id')->nullable();
            $table->timestamps();
            
            $table->foreign('employee_id')->references('id')->on('employees');
            $table->foreign('sub_group_id')->references('id')->on('company_groups');


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('company_groups');
    }
};

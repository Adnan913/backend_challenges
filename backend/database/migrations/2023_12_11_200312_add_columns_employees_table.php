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
        Schema::table('employees', function (Blueprint $table) {
            $table->unsignedBigInteger('company_group_id')->nullable();
            $table->boolean("is_company_group_head")->default(0);
            
            $table->foreign('company_group_id')->references('id')->on('company_groups'); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('employees', function (Blueprint $table) {
            $table->dropForeign('company_group_id_foreign');
            $table->dropColumn('is_company_group_head');
        });
    }
};

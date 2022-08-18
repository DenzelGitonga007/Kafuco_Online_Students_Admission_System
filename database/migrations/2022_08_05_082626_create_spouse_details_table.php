<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spouse_details', function (Blueprint $table) {
            $table->id();
            
            // Additional fields
            // Spouse
            $table->string('marital_status');
            $table->string('spouse_surname')->nullable()->default("N/A");
            $table->string('spouse_first_name')->nullable()->default("N/A");
            $table->string('spouse_last_name')->nullable()->default("N/A");
            $table->string('spouse_national_id')->nullable()->default("N/A");
            $table->string('spouse_email')->nullable()->default("N/A");
            $table->string('spouse_phone')->nullable()->default("N/A");
            $table->string('spouse_city')->nullable()->default("N/A");
            $table->string('spouse_pob')->nullable()->default("N/A");
            $table->string('spouse_occupation')->nullable()->default("N/A");


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('spouse_details');
    }
};
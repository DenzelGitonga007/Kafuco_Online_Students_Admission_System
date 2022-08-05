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
        Schema::create('personal_details', function (Blueprint $table) {
            $table->id();
            // Additional fields
            // Personal Details
            $table->string("surname");
            $table->string("first_name");
            $table->string("last_name");
            $table->string('date');
            $table->string('gender');
            $table->string('national_id');
            $table->string('nationality');
            $table->string('religion');
            $table->string('email');
            $table->string('phone');
            $table->string('city');
            $table->string('pob');

            
            // // Father
            // $table->string('father');
            // $table->string('father_surname');
            // $table->string('father_first_name');
            // $table->string('father_last_name');
            // $table->string('father_date');
            // $table->string('father_occupation');

            // // Mother
            // $table->string('mother');
            // $table->string('mother_surname');
            // $table->string('mother_first_name');
            // $table->string('mother_last_name');
            // $table->string('mother_date');
            // $table->string('mother_occupation');
            
            

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
        Schema::dropIfExists('personal_details');
    }
};

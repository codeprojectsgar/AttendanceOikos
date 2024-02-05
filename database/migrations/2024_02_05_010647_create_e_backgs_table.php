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
        Schema::create('e_backgs', function (Blueprint $table) {
            $table->id('employee_id');

            //Mother
            $table->string('m_fname');
            $table->string('m_lname');
            $table->string('m_minitial');
            $table->string('m_extension');
            $table->string('m_bday');
            $table->string('m_phone_number');
            $table->string('m_address');
            $table->string('m_city');
            $table->string('m_region');
            $table->integer('m_postal_code');
            $table->string('m_country');
            $table->string('m_nationality');

            //Father
            $table->string('f_fname');
            $table->string('f_lname');
            $table->string('f_minitial');
            $table->string('f_extension');
            $table->string('f_bday');
            $table->string('f_phone_number');
            $table->string('f_address');
            $table->string('f_city');
            $table->string('f_region');
            $table->integer('f_postal_code');
            $table->string('f_country');
            $table->string('f_nationality');

            //Spouse
            $table->string('spouse_lname');
            $table->string('spouse_fname');
            $table->string('spouse_minitial');
            $table->string('spouse_extension');
            $table->string('spouse_occupation');
            $table->string('spouse_employer');
            $table->string('spouse_business_address');
            $table->string('spouse_telephone_number');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('e_backgs');
    }
};

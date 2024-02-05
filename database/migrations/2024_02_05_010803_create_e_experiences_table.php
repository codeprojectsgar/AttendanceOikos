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
        Schema::create('e_experiences', function (Blueprint $table) {
            $table->id('employee_id');
             //1st
             $table->string('company');
             $table->string('company_address');
             $table->string('company_jobtitle_position');
             $table->string('company_contact');
             $table->string('company_job_description');
             $table->string('company_duration');
             $table->string('company_phone_number');
             //2nd
             $table->string('company2');
             $table->string('company2_address');
             $table->string('company2_jobtitle_position');
             $table->string('company2_contact');
             $table->string('company2_job_description');
             $table->string('company2_duration');
             $table->string('company2_phone_number');
             //3rd
             $table->string('company3');
             $table->string('company3_address');
             $table->string('company3_jobtitle_position');
             $table->string('company3_contact');
             $table->string('company3_job_description');
             $table->string('company3_duration');
             $table->string('company3_phone_number');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('e_experiences');
    }
};

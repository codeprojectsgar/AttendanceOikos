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
        Schema::create('employees', function (Blueprint $table) {
            $table->id('employee_id');
            $table->string('email');
            $table->string('password');
            $table->string('fname');
            $table->string('lname');
            $table->string('minitial');
            $table->string('extension');
            $table->string('bday');
            $table->string('phone_number');
            $table->string('telephone_number');
            $table->string('address');
            $table->string('city');
            $table->string('region');
            $table->integer('postal_code');
            $table->string('country');
            $table->string('nationality');
            $table->string('sex');
             

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};

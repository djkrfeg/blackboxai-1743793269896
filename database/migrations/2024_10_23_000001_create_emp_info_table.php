<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('emp_info', function (Blueprint $table) {
            $table->increments('ID');
            $table->integer('emp_no')->unique();
            $table->string('emp_name', 50);
            $table->string('emp_city', 50);
            $table->enum('gender', ['Male', 'Female', 'Other']);
            $table->date('DOB')->nullable();
            $table->integer('mobile_no')->unique();
            $table->integer('aadhar_no')->unique();
            $table->string('emp_id', 50)->unique();
            $table->string('password', 50);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('emp_info');
    }
};
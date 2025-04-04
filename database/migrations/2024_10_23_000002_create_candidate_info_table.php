<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('candidate_info', function (Blueprint $table) {
            $table->increments('ID');
            $table->integer('candidate_no')->unique();
            $table->string('candidate_name', 50);
            $table->string('candidate_email', 50)->unique();
            $table->string('candidate_sign', 50);
            $table->integer('mobile_no')->unique();
            $table->integer('aadhar_no')->unique();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('candidate_info');
    }
};
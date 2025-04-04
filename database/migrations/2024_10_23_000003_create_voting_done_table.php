<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('voting_done', function (Blueprint $table) {
            $table->integer('voter_id')->unique();
            $table->integer('voter_aadhar')->unique();
            $table->string('voter_name', 50);
            $table->string('address', 200);
            $table->integer('voter_mobile_no')->unique();
            $table->date('DOB')->nullable();
            $table->enum('gender', ['Male', 'Female', 'Other']);
            $table->enum('state', ['Gujarat', 'Maharashtra', 'Uttar Pradesh', 'Rajasthan']);
            $table->unsignedInteger('gave_vote_to');
            $table->timestamps();

            $table->foreign('gave_vote_to')->references('ID')->on('candidate_info');
        });
    }

    public function down()
    {
        Schema::dropIfExists('voting_done');
    }
};
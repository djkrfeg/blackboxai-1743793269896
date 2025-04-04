<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('admin_info', function (Blueprint $table) {
            $table->increments('ID');
            $table->integer('admin_no')->unique();
            $table->string('admin_name', 50);
            $table->string('admin_id', 50)->unique();
            $table->string('password', 50);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('admin_info');
    }
};
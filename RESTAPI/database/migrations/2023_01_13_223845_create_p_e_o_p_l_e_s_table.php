<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('PEOPLE', function (Blueprint $table) {
            $table->id();
            $table->string('Name');
            $table->string('LastName');
            $table->string('street');
            $table->string('Country');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('PEOPLE');
    }
};

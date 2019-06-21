<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDevelopersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('developers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('firstName');
            $table->string('email');
            $table->string('phoneNumber')->nullable();
            $table->string('adresse')->nullable();
            $table->string('postcode')->nullable();
            $table->string('city')->nullable();
            $table->longText('resume');
            $table->string('cv')->nullable();
            $table ->string('picture')->nullable();
            $table->string('jobInterest')->nullable();
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
        Schema::dropIfExists('developers');
    }
}

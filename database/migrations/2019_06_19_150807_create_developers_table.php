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
            $table->string('full-name');
            $table->string('email');
            $table->string('telephone')->nullable();
            $table->string('adresse')->nullable();
            $table->string('postal-code')->nullable();
            $table->string('city')->nullable();
            $table->longText('resume');
            $table->string('cv')->nullable();
            $table ->string('pricture')->nullable();
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

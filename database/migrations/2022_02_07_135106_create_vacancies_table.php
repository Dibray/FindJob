<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVacanciesTable extends Migration
{
    public function up()
    {
        Schema::create('vacancies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Description');
            $table->string('Location');
            $table->boolean('Remote');
            $table->string('Requirements');
            $table->string('Schedule');
        });
    }

    public function down()
    {
        Schema::dropIfExists('vacancies');
    }
}

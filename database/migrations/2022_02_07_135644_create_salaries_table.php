<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalariesTable extends Migration
{
    public function up()
    {
        Schema::create('salaries', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('min');
            $table->integer('max');
        });
    }

    public function down()
    {
        Schema::dropIfExists('salaries');
    }
}

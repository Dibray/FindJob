<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompaniesTable extends Migration
{
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->unique();
            $table->string('logo');
            $table->string('location');
            $table->string('contacts');
        });
    }

    public function down()
    {
        Schema::dropIfExists('companies');
    }
}

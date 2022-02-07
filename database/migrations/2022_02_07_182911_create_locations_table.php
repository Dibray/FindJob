<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocationsTable extends Migration
{
    public function up()
    {
        Schema::create('locations', function (Blueprint $table) {
            $table->integer('city_id');
            $table->integer('company_id');
        });
    }

    public function down()
    {
        Schema::dropIfExists('locations');
    }
}

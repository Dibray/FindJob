<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateLocationsTable extends Migration
{
    public function up()
    {
        Schema::table('locations', function (Blueprint $table) {
            $table->bigIncrements('id');
        });
    }

    public function down()
    {
        Schema::table('locations', function (Blueprint $table) {
            $table->dropColumn('id');
        });
    }
}

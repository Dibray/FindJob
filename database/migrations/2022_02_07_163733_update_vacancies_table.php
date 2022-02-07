<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateVacanciesTable extends Migration
{
    public function up()
    {
        Schema::table('vacancies', function (Blueprint $table) {
            $table->integer('position_id');
        });
    }

    public function down()
    {
        Schema::table('vacancies', function (Blueprint $table) {
            $table->dropColumn('position_id');
        });
    }
}

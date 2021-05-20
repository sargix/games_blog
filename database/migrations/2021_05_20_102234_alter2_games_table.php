<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Alter2GamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('games', function (Blueprint $table) {
            $table->integer('genre')->change();
            $table->integer('publisher')->change();
            $table->renameColumn('publisher', 'publisher_id')->change();
            $table->renameColumn('genre', 'genre_id')->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('games', function (Blueprint $table) {
            $table->renameColumn('publisher_id', 'publisher')->change();
            $table->renameColumn('genre_id', 'genre')->change();
            $table->string('genre', 20)->nullable()->change();
            $table->string('publisher', 20)->nullable()->change();
        });
    }
}

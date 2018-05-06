<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttributionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attribution', function (Blueprint $table) {
            $table->integer('id')->unsigned();
            $table->integer('numPlace')->unsigned();
            $table->dateTime('dateDebut');
            $table->dateTime('dateFin');
            $table->primary(array('id', 'numPlace', 'dateDebut', 'dateFin'));
            $table->timestamps();
        });
	Schema::table('attribution', function(Blueprint $table) {
            $table->foreign(array('id', 'numPlace'))
                  ->references(array('id', 'numPlace'))
                  ->on('users');
	});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attribution');
    }
}

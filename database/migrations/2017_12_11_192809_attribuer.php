<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Attribuer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
	Schema::create('attribution', function(Blueprint $table) {
		$table->integer('numUtilisateur')->unsigned();
		$table->integer('numPlace')->unsigned();
		$table->dateTime('dateDebut');
		$table->dateTime('dateFin');
		$table->primary(array('numPlace', 'numUtilisateur', 'dateDebut', 'dateFin'));
		$table->foreign('numUtilisateur')
		      ->references('numUtilisateur')
		      ->on('utilisateurs');
		$table->foreign('numPlace')
		      ->references('numPlace')
		      ->on('places');
		$table->foreign(array('dateDebut', 'dateFin'))
		      ->references(array('dateDebut', 'dateFin'))
		      ->on('horaires');
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

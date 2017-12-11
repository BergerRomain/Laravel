<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Utilisateur extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('utilisateurs', function(Blueprint $table) {
		$table->increments('numUtilisateur');
		$table->string('nomUtilisateur');
		$table->string('prenomUtilisateur')->nullable();
		$table->string('mdpUtilisateur');
		$table->string('emailUtilisateur');
		$table->boolean('validation')->default(false);
		$table->integer('placeFile');
		$table->boolean('admin')->default(false);
	});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('utilisateurs');
    }
}

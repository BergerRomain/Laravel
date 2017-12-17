<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHoraireTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('horaire', function (Blueprint $table) {
            $table->dateTime('dateDebut');
            $table->dateTime('dateFin');
            $table->timestamps();
            $table->primary(array('dateDebut', 'dateFin'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('horaire');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStagaireTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stagaires',function(Blueprint $stagaire){
            $stagaire->bigincrements('id');
            $stagaire->string('cin');
            $stagaire->string('nom');
            $stagaire->string('prenom');
            $stagaire->string('idPremis');
            $stagaire->integer('tel')->unsigned();
            $stagaire->string('email');
            $stagaire->integer('idSession')->unsigned();
            $stagaire->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('stagaires');
    }
}

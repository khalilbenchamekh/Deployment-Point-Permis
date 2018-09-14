<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegistreStagaireTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        schema::create('RegistreStagaires',function(Blueprint $RegistreStagaire){
            $RegistreStagaire->bigIncrements('id');
            $RegistreStagaire->integer('idStagaire')->unsigned();
            $RegistreStagaire->integer('idInscription')->unsigned();
            $RegistreStagaire->string('motif');
            $RegistreStagaire->double('note');
            $RegistreStagaire->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        schema::drop('RegistreStagaires');
    }
}

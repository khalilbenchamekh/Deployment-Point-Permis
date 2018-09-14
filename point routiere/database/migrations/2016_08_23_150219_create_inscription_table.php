<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInscriptionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        schema::create('inscriptions',function(Blueprint $Inscription){
            $Inscription->bigIncrements('id')->unique();
            $Inscription->integer('IdStagaire')->unsigned();
            $Inscription->integer('idSession')->unsigned();
            $Inscription->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        schema::drop('inscriptions');
    }
}

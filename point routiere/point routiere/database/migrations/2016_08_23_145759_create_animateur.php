<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnimateur extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        schema::create('animateurs',function(Blueprint $animateur){
            $animateur->bigIncrements('id')->unique();
            $animateur->string('nom');
            $animateur->string('prenom');
            $animateur->double('NumeroInscription');
            $animateur->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        schema::drop('animateurs');
    }
}

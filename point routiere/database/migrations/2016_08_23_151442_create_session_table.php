<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSessionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sessions',function(Blueprint $session){
            $session->bigIncrements('id')->unique();
            $session->date('dateDebut');
            $session->date('dateFin');
            $session->integer('idStatu')->unsigned();
            $session->integer('idTheme')->unsigned();
            $session->integer('idAnimateur')->unsigned();
            $session->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('sessions');
    }
}

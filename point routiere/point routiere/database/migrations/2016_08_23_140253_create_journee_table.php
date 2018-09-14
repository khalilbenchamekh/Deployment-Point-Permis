<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJourneeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        schema::create('journees',function(Blueprint $journee){
            $journee->bigIncrements('id');
            $journee->integer('idSession')->unsigned();
            $journee->time('heureDebut');
            $journee->time('heureFin');
            $journee->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        schema::drop('journees');
    }
}

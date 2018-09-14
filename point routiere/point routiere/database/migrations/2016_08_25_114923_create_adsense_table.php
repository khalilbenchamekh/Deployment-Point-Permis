<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdsenseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('absences',function(Blueprint $absence){
            $absence->bigIncrements('id');
            $absence->string('nom');
            $absence->integer('idStagaire');
            $absence->integer('idJournee');
            $absence->integer('idModule');
            $absence->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('absences');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEvaluationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        schema::create('evaluations',function(Blueprint $evaluation){
            $evaluation->bigIncrements('id')->unique();
            $evaluation->string('IdStagaire');
            $evaluation->date('date');
            $evaluation->double('note');
            $evaluation->integer('idSession')->unsigned();
            $evaluation->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        schema::drop('evaluations');
    }
}

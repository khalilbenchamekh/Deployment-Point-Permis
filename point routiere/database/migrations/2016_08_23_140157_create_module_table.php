<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModuleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        schema::create('modules',function(Blueprint $module){
            $module->bigIncrements('id');
            $module->double('duree');
            $module->integer('idJournee')->unsigned();
            $module->double('heureDebut');
            $module->double('heureFin');
            $module->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        schema::drop('modules');
    }
}

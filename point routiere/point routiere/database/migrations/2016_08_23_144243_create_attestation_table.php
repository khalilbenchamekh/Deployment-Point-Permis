<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttestationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attestations',function(Blueprint $attestation){
            $attestation->bigIncrements('id')->unique();
            $attestation->integer('idStagaire')->unsigned();
            $attestation->timestamp('date');
            $attestation->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        schema::drop('attestations');
    }
}

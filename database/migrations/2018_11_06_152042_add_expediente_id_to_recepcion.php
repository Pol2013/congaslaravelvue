<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddExpedienteIdToRecepcion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
         Schema::table('recepcion', function(Blueprint $table ){
            $table->unsignedinteger('id_expediente');
            $table->foreign('id_expediente')->references('id')->on('expediente')
            ->onDelete('cascade')
            ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
          Schema::table('recepcion', function(Blueprint $table){
            $table->dropforeign(['id_expediente']);
            $table->dropcolumn('id_expediente');
        });
    }
}

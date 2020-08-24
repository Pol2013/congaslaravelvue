<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddEstadoIdToRecepcion extends Migration
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
            $table->unsignedinteger('id_estado');
            $table->foreign('id_estado')->references('id')->on('estado')
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
            $table->dropforeign(['id_estado']);
            $table->dropcolumn('id_estado');
        });
    }
}

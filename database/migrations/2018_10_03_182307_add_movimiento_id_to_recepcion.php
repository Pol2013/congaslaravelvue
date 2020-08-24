<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddMovimientoIdToRecepcion extends Migration
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
            $table->unsignedinteger('id_movimiento');
            $table->foreign('id_movimiento')->references('id')->on('movimiento')
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
            $table->dropforeign(['id_movimiento']);
            $table->dropcolumn('id_movimiento');
        });
    }
}

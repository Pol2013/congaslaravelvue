<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddActorIdToAutorizacionPersonal extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('autorizacion', function(Blueprint $table ){
            $table->unsignedinteger('id_actor');
            $table->foreign('id_actor')->references('id')->on('actor')
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
        Schema::table('autorizacion', function(Blueprint $table){
            $table->dropforeign(['id_actor']);
            $table->dropcolumn('id_actor');
        });
    }
}
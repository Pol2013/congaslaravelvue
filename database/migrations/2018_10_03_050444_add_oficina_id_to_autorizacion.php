<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddOficinaIdToAutorizacion extends Migration
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
            $table->unsignedinteger('id_oficina');
            $table->foreign('id_oficina')->references('id')->on('oficina')
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
            $table->dropforeign(['id_oficina']);
            $table->dropcolumn('id_oficina');
        });
    }
}

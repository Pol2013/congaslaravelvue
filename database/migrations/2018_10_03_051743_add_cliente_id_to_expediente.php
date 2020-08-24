<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddClienteIdToExpediente extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
         Schema::table('expediente', function(Blueprint $table ){
            $table->unsignedinteger('id_cliente');
            $table->foreign('id_cliente')->references('id')->on('cliente')
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
        Schema::table('expediente', function(Blueprint $table){
            $table->dropforeign(['id_cliente']);
            $table->dropcolumn('id_cliente');
        });
    }
}

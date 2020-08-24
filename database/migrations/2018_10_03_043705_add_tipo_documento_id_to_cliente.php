<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTipoDocumentoIdToCliente extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('cliente', function(Blueprint $table ){
            $table->unsignedinteger('id_tipo_documento');
            $table->foreign('id_tipo_documento')->references('id')->on('tipo_documento')
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
        Schema::table('cliente', function(Blueprint $table){
            $table->dropforeign(['id_tipo_documento']);
            $table->dropcolumn('id_tipo_documento');
        });
    }
}

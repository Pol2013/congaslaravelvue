<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDocumentoIdToExpediente extends Migration
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
            $table->unsignedinteger('id_documento');
            $table->foreign('id_documento')->references('id')->on('documento')
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
            $table->dropforeign(['id_documento']);
            $table->dropcolumn('id_documento');
        });
    }
}

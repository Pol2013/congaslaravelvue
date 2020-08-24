<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTupaIdToExpediente extends Migration
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
            $table->unsignedinteger('id_tupa');
            $table->foreign('id_tupa')->references('id')->on('tupa')
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
            $table->dropforeign(['id_tupa']);
            $table->dropcolumn('id_tupa');
        });
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDepartamentoIdToOficina extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('oficina', function(Blueprint $table ){
            $table->unsignedinteger('id_departamento');
            $table->foreign('id_departamento')->references('id')->on('departamento')
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
         Schema::table('oficina', function(Blueprint $table){
            $table->dropforeign(['id_departamento']);
            $table->dropcolumn('id_departamento');
        });
    }
}

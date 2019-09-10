<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableComentarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_comentarios', function (Blueprint $table) {
            $table->bigIncrements('idComentario');
            $table->string('comentario')->nullable;
            $table->integer('iduser')->unsigned()->nullable();
            $table->integer('idpost')->unsigned()->nullable();
            $table->integer('iduser')->references('id')->on('users');
            $table->integer('idpost')->references('id')->on('post');
            

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_comentarios');
    }
}

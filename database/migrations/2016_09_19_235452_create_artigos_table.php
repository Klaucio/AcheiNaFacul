<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArtigosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artigos', function (Blueprint $table) {
            $table->increments('artigo_id');
            $table->string('designacao');
            $table->string('descricao');
            $table->string('foto');
            $table->string('tipo');
            $table->string('local');
            $table->string('descricao_local');
            $table->integer('user_id')->references('user_id')->on('users')
            ->onUpdate('cascade')
            ->onDelete('set null');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('artigos');
    }
}

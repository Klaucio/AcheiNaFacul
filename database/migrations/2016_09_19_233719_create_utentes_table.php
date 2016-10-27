<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUtentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('utentes', function (Blueprint $table) {
            $table->bigInteger('id');
            $table->primary('id');
            $table->string('tipo');
            $table->string('nome');
            $table->string('regime')->nullable();
            $table->string('sala')->nullable();
            $table->string('telefone')->unique();
            $table->integer('curso_id')->unsigned()->nullable();
            $table->integer('local_trabalho_id')->unsigned()->nullable();
            $table->foreign('curso_id')->references('id')->on('cursos')
                ->onUpdate('cascade')
                ->onCascade('set null');
            $table->foreign('local_trabalho_id')->references('id')->on('local_trabalhos')
                ->onUpdate('cascade')
                ->onCascade('set null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('utentes');
    }
}

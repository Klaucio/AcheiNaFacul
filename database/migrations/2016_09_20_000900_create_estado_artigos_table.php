<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstadoArtigosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estado_artigos', function (Blueprint $table) {
            $table->integer('artigo_id')->unsigned();
            $table->foreign('artigo_id')->references('id')->on('artigos')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->integer('estado_id')->unsigned();
            $table->foreign('estado_id')->references('id')->on('estados')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->primary(['artigo_id','estado_id']);
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
        Schema::dropIfExists('estado_artigos');
    }
}

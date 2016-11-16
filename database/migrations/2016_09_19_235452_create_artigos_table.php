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
            $table->increments('id');
            $table->string('designacao');
            $table->string('descricao');
            $table->date('data');
            $table->string('foto');
            $table->string('tipo');
            $table->string('local');
            $table->string('local_actual');
            $table->string('descricao_local')->nullable();
            $table->string('descricao_local_actual')->nullable();
            $table->integer('categoria_id')->unsigned();
            $table->bigInteger('user_id');
            $table->bigInteger('receptor_id')->nullable();
            $table->foreign('receptor_id')->references('id')->on('receptors')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreign('categoria_id')->references('id')->on('categorias')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')
                ->onUpdate('cascade')
                ->onDelete('cascade');
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
        Schema::dropIfExists('artigos');
    }
}

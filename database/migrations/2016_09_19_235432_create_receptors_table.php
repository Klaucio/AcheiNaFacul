<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReceptorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('receptors', function (Blueprint $table) {
            $table->bigInteger('nr_utente');
            $table->primary('nr_utente');
            $table->date('data_levantamento');
            $table->foreign('nr_utente')->references('nr_utente')->on('utentes')
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
        Schema::dropIfExists('receptors');
    }
}

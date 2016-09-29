<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
//            $table->increments('id');
            $table->bigInteger('nr_utente')->unsigned();
            $table->primary('nr_utente');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->foreign('role_id')->references('role_id')->on('roles')
            ->onUpdate('cascade')
            ->onDelete('set null');
            $table->foreign('receptor_id')->references('receptor_id')->on('receptors')
                ->onUpdate('cascade')
                ->onDelete('set null');;
            $table->rememberToken();
//            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}

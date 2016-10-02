<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('role_users', function (Blueprint $table) {
            $table->bigInteger('user_id')->unsigned();
            $table->integer('role_id')->unsigned();
            $table->primary(['user_id','role_id']);

            $table->foreign('role_id')->references('role_id')->on('roles')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreign('user_id')->references('user_id')->on('users')
                ->onUpdate('cascade')
                ->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_roles');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClinicaUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clinica_user', function (Blueprint $table) {
            $table->integer('clinica_id')->unsigned();
            $table->integer('user_id')->unsigned();

            $table->primary(['clinica_id', 'user_id']);

            $table->foreign('clinica_id')->references('id')->on('clinicas')->onDelete("cascade");
            $table->foreign('user_id')->references('id')->on('users')->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clinica_user');
    }
}

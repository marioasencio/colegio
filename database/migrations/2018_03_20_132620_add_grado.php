<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddGrado extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grado', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre', 60);
            $table->integer('profesor_id')->unsigned();

            $table->foreign('profesor_id')->references('id')->on('profesor')->onDelete('cascade');

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
        Schema::dropIfExists('grado');
    }
}

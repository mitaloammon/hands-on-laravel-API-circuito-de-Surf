<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notas', function (Blueprint $table) {
            $table->id('id');
            $table->integer('onda')->unsigned();
            $table->integer('notaParcial1');
            $table->integer('notaParcial2');
            $table->integer('notaParcial3');
            $table->timestamps();

            $table->foreign('onda')->references('id')->on('onda');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nota');
    }
}

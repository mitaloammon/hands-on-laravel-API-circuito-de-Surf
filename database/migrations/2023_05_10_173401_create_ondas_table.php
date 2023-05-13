<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOndasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ondas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('bateria')->unsigned();
            $table->integer('surfista')->unsigned();
            $table->timestamps();

            $table->foreign('bateria')->references('id')->on('bateria');
            $table->foreign('surfista')->references('numero')->on('surfista');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('onda');
    }
}

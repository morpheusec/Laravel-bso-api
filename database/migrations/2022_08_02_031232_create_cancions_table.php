<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cancions', function (Blueprint $table) {
            $table->bigIncrements(column:'idcancion')->index();
            $table->string('nombre_cancion');
            $table->string('url_youtube');
            $table->Integer('Ranking');
            $table->string('url_imagen');
            $table->BigInteger('idAutor')->unsigned();
            $table->foreign('idAutor')->references('idAutor')->on('autors')->OnUpdate('cascade')->OnDelete('cascade');
            $table->BigInteger('idPelicula')->unsigned();
            $table->foreign('idPelicula')->references('idPelicula')->on('peliculas')->OnUpdate('cascade')->OnDelete('cascade');

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
        Schema::dropIfExists('cancions');
    }
};

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pelicula;
class PeliculaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        //John Willians
        $pelicula1=new Pelicula;
        $pelicula1->nombre_peli="Tiburon";
        $pelicula1->fecha_estreno="1975-01-01";
        $pelicula1->save();

        $pelicula2=new Pelicula;
        $pelicula2->nombre_peli="Superman 1";
        $pelicula2->fecha_estreno="1978-01-01";
        $pelicula2->save();

        $pelicula3=new Pelicula;
        $pelicula3->nombre_peli="Tiburon 2 ";
        $pelicula3->fecha_estreno="1978-01-01";
        $pelicula3->save();

        $pelicula4=new Pelicula;
        $pelicula4->nombre_peli="Indiana Jones - Cazadores del arca perdi";
        $pelicula4->fecha_estreno="1981-01-01";
        $pelicula4->save();

        $pelicula4=new Pelicula;
        $pelicula4->nombre_peli="Indiana Jones - Cazadores del Arca Perdida";
        $pelicula4->fecha_estreno="1981-01-01";
        $pelicula4->save();

        $pelicula4=new Pelicula;
        $pelicula4->nombre_peli="Salvando al Soldado Ryan";
        $pelicula4->fecha_estreno="1998-07-24";
        $pelicula4->save();


    }
}

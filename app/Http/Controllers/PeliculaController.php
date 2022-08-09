<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePeliculaRequest;
use App\Http\Requests\UpdatePeliculaRequest;
use App\Models\Pelicula;

class PeliculaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $pelicula= Pelicula::all();
        return $pelicula;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePeliculaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePeliculaRequest $request)
    {
        //
        $pelicula= new Pelicula();
        $pelicula->nombre_peli=$request->nombre_peli;
        $pelicula->fecha_estreno=$request->fecha_estreno;
        $pelicula->save();
        return $pelicula;

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pelicula  $pelicula
     * @return \Illuminate\Http\Response
     */
    public function show(Pelicula $idPelicula)
    {
        //
        $pelicula = Pelicula::find($idPelicula);
        return $pelicula;
    }

    public function search($search)
    {
        //
        return Pelicula::where('nombre_peli','like','%'.$search.'%')->get();

        //return Pelicula::where('nombre_peli',$search)->get();

    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pelicula  $pelicula
     * @return \Illuminate\Http\Response
     */
    public function edit(Pelicula $pelicula)
    {
        //

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePeliculaRequest  $request
     * @param  \App\Models\Pelicula  $pelicula
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePeliculaRequest $request, Pelicula $pelicula)
    {
        //
        $pelicula=Pelicula::findOrFail($request->idPelicula);
        $pelicula->nombre_peli=$request->nombre_peli;
        $pelicula->fecha_estreno=$request->fecha_estreno;
        $pelicula->save();
        return  $pelicula;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pelicula  $pelicula
     * @return \Illuminate\Http\Response
     */
    public function destroy($idPelicula)
    {
        //
        Pelicula::Destroy($idPelicula);
        return "Pelicula eliminada";
    }
}

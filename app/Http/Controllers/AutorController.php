<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAutorRequest;
use App\Http\Requests\UpdateAutorRequest;
use App\Models\Autor;

class AutorController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
       $autor=Autor::all();
       return $autor;
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
     * @param  \App\Http\Requests\StoreAutorRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAutorRequest $request)
    {
        //
        $autor= new Autor();
        $autor->nombre_autor = $request->nombre_autor;
        $autor->Url_site = $request->Url_site;
        $autor->nacionalidad = $request->nacionalidad;
        $autor->save();
        return $autor;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Autor  $autor
     * @return \Illuminate\Http\Response
     */
    public function show(Autor $idAutor)
    {
        //
        $autor=Autor::find($idAutor);
        return $autor;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Autor  $autor
     * @return \Illuminate\Http\Response
     */
    public function edit(Autor $autor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAutorRequest  $request
     * @param  \App\Models\Autor  $autor
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAutorRequest $request, Autor $autor)
    {
        //
        $autor=Autor::findOrFail($request->idAutor);
        $autor->nombre_autor=$request->nombre_autor;
        $autor->Url_site=$request->Url_site;
        $autor->nacionalidad=$request->nacionalidad;
        $autor->save();
        return $autor;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Autor  $autor
     * @return \Illuminate\Http\Response
     */
    public function destroy($idAutor)
    {
        //
        Autor::Destroy($idAutor);
        return "Autor eliminado";
    }
}

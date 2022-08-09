<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCancionRequest;
use App\Http\Requests\UpdateCancionRequest;
use App\Http\Requests\ListCancionRequest;
use Illuminate\Support\Facades\DB;
use App\Models\Cancion;

class CancionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $cancion=Cancion::all();
        return $cancion;
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
     * @param  \App\Http\Requests\StoreCancionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCancionRequest $request)
    {
        //
        $bso= new Cancion();
        $bso->nombre_cancion=$request->nombre_cancion;
        $bso->url_youtube=$request->url_youtube;
        $bso->Ranking=$request->Ranking;
        $bso->url_imagen=$request->url_imagen;
        $bso->idAutor=$request->idAutor;
        $bso->idPelicula=$request->idPelicula;
        $bso->load('autor:nombre_autor,Url_site,nacionalidad','pelicula:nombre_peli,fecha_estreno');
        $bso->save();
        return $bso;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cancion  $cancion
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
   return DB::select(DB::raw("select *  from cancions c,autors a,peliculas p where c.idAutor=a.idAutor and c.idPelicula=p.idPelicula"));

    }
    public function list(ListCancionRequest $request)
    {
        // search
        $cancion= DB::select(DB::raw("select *  from cancions c,autors a,peliculas p where c.idAutor=a.idAutor and c.idPelicula=p.idPelicula"));



      //Por nombre cancion

        if($request->criterio){

             $cancion= DB::select(DB::raw("select *  from cancions c,autors a,peliculas p
         where c.idAutor=a.idAutor and c.idPelicula=p.idPelicula and nombre_cancion LIKE '%".$request->criterio."%'"));
        }
        // Por nombre autor
        if($request->autor){


             $cancion= DB::select(DB::raw("select *  from cancions c,autors a,peliculas p
         where c.idAutor=a.idAutor and c.idPelicula=p.idPelicula and nombre_autor LIKE '%".$request->autor."%'"));
        }
        //Por nacionalidad autor
        if($request->nacio){


              $cancion= DB::select(DB::raw("select *  from cancions c,autors a,peliculas p
          where c.idAutor=a.idAutor and c.idPelicula=p.idPelicula and nacionalidad LIKE '%".$request->nacio."%'"));
         }
        //Por nombre pelicula
        if($request->peli){


              $cancion= DB::select(DB::raw("select *  from cancions c,autors a,peliculas p
          where c.idAutor=a.idAutor and c.idPelicula=p.idPelicula and p.nombre_peli LIKE '%".$request->peli."%'"));
         }
        //Por fecha de estreno pelicula
        if($request->fechae){


              $cancion= DB::select(DB::raw("select *  from cancions c,autors a,peliculas p
          where c.idAutor=a.idAutor and c.idPelicula=p.idPelicula and p.fecha_estreno LIKE '%".$request->fechae."%'"));
         }
        //Por ranking de cancion
        if($request->rank){


              $cancion= DB::select(DB::raw("select *  from cancions c,autors a,peliculas p
          where c.idAutor=a.idAutor and c.idPelicula=p.idPelicula and ranking LIKE '%".$request->rank."%'"));
         }

         return  response()->json([
            'message'=> 'busqueda realizada',
            'data'=>$cancion
        ],200);

    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cancion  $cancion
     * @return \Illuminate\Http\Response
     */
    public function edit(Cancion $cancion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCancionRequest  $request
     * @param  \App\Models\Cancion  $cancion
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCancionRequest $request, Cancion $cancion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cancion  $cancion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cancion $cancion)
    {
        //
    }
}

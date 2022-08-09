<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AutorController;
use App\Http\Controllers\PeliculaController;
use App\Http\Controllers\CancionController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|

*/
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::controller(AutorController::class)->group(function () {
    Route::get('/autors','index');
    Route::post('/autor','store');
    Route::get('/autor/{idAutor}','show');
    Route::put('/autor/{idAutor}','update');
    Route::delete('/autor/{idAutor}','destroy');
});

Route::controller(PeliculaController::class)->group(function () {
    Route::get('/movies','index');
    Route::post('/movie','store');
    Route::get('/movie/{idPelicula}','show');
    Route::get('/movie/search/{search}','search');
    Route::put('/movie/{idPelicula}','update');
    Route::delete('/movie/{idPelicula}','destroy');
});
Route::controller(CancionController::class)->group(function () {
    Route::get('/bso','index');
    Route::post('/bso','store');
    Route::get('/bso/full','show');
    Route::get('/bso/search','list');
   /* Route::get('/movie/search/{search}','search');
    Route::put('/movie/{idPelicula}','update');
    Route::delete('/movie/{idPelicula}','destroy');*/
});

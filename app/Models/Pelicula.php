<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelicula extends Model
{
    use HasFactory;
    protected $filliable =['nombre_peli','fecha_estreno'];
    protected $primaryKey='idPelicula';
}

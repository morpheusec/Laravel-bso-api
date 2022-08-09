<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cancion extends Model
{
    use HasFactory;
    protected $primaryKey='idCancion';

    public function autor(){
        return $this->belongsTo(Autor::class);
    }
    public function pelicula(){
                return $this->belongsTo(Pelicula::class);
    }

}

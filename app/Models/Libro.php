<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Categoria;

class Libro extends Model
{
    protected $table = "libros";

    public function categoria()
    {
        return $this->belongsTo(Categoria::class,'categoria_id');
    }
}

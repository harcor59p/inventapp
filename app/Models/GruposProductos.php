<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GruposProductos extends Model
{
    use HasFactory;

    protected $table = "gruposproductos";

    protected $fillable = [
        'codigo',
        'descripcion'
    ];
}

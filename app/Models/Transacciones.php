<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transacciones extends Model
{
    use HasFactory;

    protected $fillable = [
        'bodega',
        'fecha',
        'anio',
        'mes',
        'cantidad',
        'codigo',
        'consecutivo',
        'costo',
        'precio',
        'producto',
        'usuario'
    ];
}

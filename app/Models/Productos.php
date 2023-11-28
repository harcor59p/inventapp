<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    use HasFactory;

    protected $table = "productos";

    protected $fillable = [
        'codigo',
        'codigo_barras',
        'descripcion',
        'grupo',
        'referencia',
        'ult_compra',
        'ult_venta',
        'vr_precio',
        'vr_ult_costo'
    ];
}

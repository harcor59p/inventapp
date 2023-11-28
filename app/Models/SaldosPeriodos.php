<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SaldosPeriodos extends Model
{
    use HasFactory;

    protected $table = "saldosperiodos";

    protected $fillable = [
        'bodega',
        'cantidad',
        'costo_total',
        'mes',
        'producto',
        'year'
    ];
}

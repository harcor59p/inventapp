<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Terceros extends Model
{
    use HasFactory;
    protected $table = "terceros";

    protected $fillable = [
        'ciudad',
        'clase',
        'direccion',
        'email',
        'nombre',
        'num_identificacion',
        'tipo_identificacion',
        'telefono'
    ];
}

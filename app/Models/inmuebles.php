<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class inmuebles extends Model
{
    use HasFactory;

    protected $fillable = [
        'departamento',
        'municipio',
        'barrio',
        'zona',
        'direccion',
        'tipoinmueble',
        'gestion',
        'alcobas',
        'banos',
        'area',
        'valor',
        'descripcion',
        // 'imagen',
    ];
}

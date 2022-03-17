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
        'estrato',
        'tipoinmueble',
        'gestion',
        'alcobas',
        'banos',
        'area',
        'valor',
        'descripcion',
        'folder',
        'nombrepro',
        'apellidopro',
        'cedulapro',
        'direccionpro',
        'departamentopro',
        'municipiopro',
        'celularpro',
        'correopro',
        
    ];

    public static function search($search)
    {
        return empty($search) ? static::query()
            : static::query()->where('id', 'like', '%'.$search.'%')
                ->orWhere('nombrepro', 'like', '%'.$search.'%')
                ->orWhere('cedulapro', 'like', '%'.$search.'%')
                ->orWhere('departamento', 'like', '%'.$search.'%')
                ->orWhere('celularpro', 'like', '%'.$search.'%');
                // orWhere('barrio', 'like', '%'.$search.'%');
                // orWhere('zona', 'like', '%'.$search.'%');
    }
}

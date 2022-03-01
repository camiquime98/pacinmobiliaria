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

    public static function search($search)
    {
        return empty($search) ? static::query()
            : static::query()->where('id', 'like', '%'.$search.'%')
                ->orWhere('name', 'like', '%'.$search.'%')
                ->orWhere('email', 'like', '%'.$search.'%');
                // orWhere('barrio', 'like', '%'.$search.'%');
                // orWhere('zona', 'like', '%'.$search.'%');
    }
}

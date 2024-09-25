<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    // Asignamos la tabla que se va utilizar dentro de este modelo
    protected $table = 'categorias';

    // Por medio de la proppiedad fillable podemos asignar los campos que se pueden guardar por medio de asignacion masiva
    protected $fillable = [
        'nombre'
    ];

    // Por medio de la propiedad guarded podemos indicar cuales son los campos que no se pueden asignar por medio de asignacion masiva
    protected $guarded = [

    ];

    // Por medio de la propiedad hidden se pueden ocultar las propiedades al momento de crear los registros
    protected $hidden = [

    ];
}

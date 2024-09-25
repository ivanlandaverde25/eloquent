<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perfil extends Model
{
    use HasFactory;

    protected $table = "perfiles";

    protected $guarded = [
        'id',
        'created_at',
        'updated_at'
    ];

    // Metodo para buscar por relacion inversa el usuario desde un perfil
    public function usuario(){
        return $this->belongsTo(User::class, 'id_usuario', 'id');
    }
}

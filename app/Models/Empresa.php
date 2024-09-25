<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    use HasFactory;

    protected $table = 'empresas';

    public function pais(){
        return $this->hasOne(Pais::class, 'id');
    }
}

// INSERT INTO empresas (nombre, direccion, estado, id_pais, created_at, updated_at) VALUES (
// 	'Juan S.A. de C.V.',
//     'En su mera casita poderosa alv',
//     true,
//     1,
//     now(),
//     now()
// );
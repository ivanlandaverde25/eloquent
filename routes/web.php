<?php

use App\Models\Categoria;
use App\Models\Empresa;
use App\Models\Perfil;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/prueba', function() {
    
    // $data = [
    //     'nombre' => 'Comida Rapida',
    // ];

    // $categoria = Categoria::create($data);

    $data = [
        'nombre' => 'Comida sana :)',
    ];
    return $data;
    // Actualizacion por medio de asignacion masiva
    // $categoria = Categoria::find(2);
    // $categoria->update($data);
    // return $categoria;

    // Eliminar por medio de asignacion masiva
    // $dataEliminar = [
    //     1,
    //     2,
    //     3
    // ];

    // $categoriasEliminar = Categoria::whereIn('id', $dataEliminar)->delete();
    // return 'Registros eliminados exitosamente';
});

Route::get('/perfiles', function(){
    $usuario = new User();
    $usuario = User::find(1);

    $perfil = Perfil::find(1);

    return $perfil->usuario;
});

Route::get('/empresas', function() {
    $empresa = Empresa::find(1);

    return $empresa->pais;
});
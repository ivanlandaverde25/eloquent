<?php

namespace Database\Seeders;

use App\Models\Pais;
use App\Models\Perfil;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(50)->create()->each(function ($user){
            Perfil::factory()->create([
                'id_usuario' => $user->id,
            ]);
        });
        
        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Pais::insert([
            [
                'nombre' => 'El Salvador',
                'nombre_corto' => 'SV'
            ],
            [
                'nombre' => 'Guatemala',
                'nombre_corto' => 'GT'
            ],
            [
                'nombre' => 'Honduras',
                'nombre_corto' => 'HN'
            ],
            [
                'nombre' => 'Costa Rica',
                'nombre_corto' => 'CR'
            ],
            [
                'nombre' => 'Nicaragua',
                'nombre_corto' => 'NG'
            ],
        ]);

    }
}

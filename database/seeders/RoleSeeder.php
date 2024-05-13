<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            'Administrador' => 'Tiene acceso completo al sistema',
            'Editor' => 'Puede editar entradas existentes',
            'Suscriptor' => 'Puede leer publicaciones y escribir comentarios',
            'Reclutador' => 'Puede publicar ofertas de trabajo y revisar candidatos',
            'Candidato' => 'Buscando oportunidades de trabajo',
            'Solicitante' => 'Ha solicitado un trabajo',
        ];

        foreach ($roles as $role => $description) {
            Role::create([
                'name' => $role,
                'slug' => Str::slug($role),
                'description' => $description,
            ]);
        }
    }
}

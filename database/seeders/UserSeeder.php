<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Reclutador',
            'email' => 'reclutador@seeder.com',
            'password' => Hash::make('password'),
            'subscription_type' => 'Premium',
            'role_id' => 4,
        ]);
        User::create([
            'name' => 'Reclutador 2',
            'email' => 'reclutador2@seeder.com',
            'password' => Hash::make('password'),
            'subscription_type' => 'Premium',
            'role_id' => 4,
        ]);
        User::create([
            'name' => 'Reclutador 3',
            'email' => 'reclutador3@seeder.com',
            'password' => Hash::make('password'),
            'subscription_type' => 'Premium',
            'role_id' => 4,
        ]);

        User::create([
            'name' => 'Candidato',
            'email' => 'candidato@seeder.com',
            'password' => Hash::make('password'),
            'role_id' => 5,
        ]);

        User::create([
            'name' => 'Administrador',
            'email' => 'admin@seeder.com',
            'password' => Hash::make('password'),
            'role_id' => 1,
        ]);
    }
}

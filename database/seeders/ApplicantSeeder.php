<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ApplicantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    DB::table('applicants')->insert([
        [
            'name' => 'John Doe',
            'email' => 'walter@ggg.com',
            'phone' => '1234567890',
            'address' => 'Av. Corrientes 1234',
            'city' => 'CABA',
            'state' => 'CABA',
            'zip' => '1419',
            'country' => 'Argentina',
            'resume' => 'cv.pdf',
            'cover_letter' => 'cover_letter.pdf',
            'status' => 'new',
            'job_id' => 1,
            'notes' => 'none',
            'source' => 'website',
            'ip_address' => '',
            'user_agent' => '',
            'referrer' => '',
            'user_id' => 1,
            'applied_at' => now(),
            'image' => 'perfil.jpg',
        ],
        [
            'name' => 'Walter White',
            'email' => 'walter@ggg.com',
            'phone' => '1555555555',
            'address' => '222 ave st',
            'city' => 'CABA',
            'state' => 'CABA',
            'zip' => '1419',
            'country' => 'Argentina',
            'resume' => 'cv.pdf',
            'cover_letter' => 'cover_letter.pdf',
            'status' => 'new',
            'notes' => 'none',
            'job_id' => 0,
            'source' => 'website',
            'ip_address' => '',
            'user_agent' => '',
            'referrer' => '',
            'user_id' => 2,
            'applied_at' => now(),
            'image' => 'perfil.jpg',
        ],
        [
            'name' => 'Administrador',
            'email' => 'walter@ggg.com',
            'phone' => '1555555555',
            'address' => '222 ave st',
            'city' => 'CABA',
            'state' => 'CABA',
            'zip' => '1419',
            'country' => 'Argentina',
            'resume' => 'cv.pdf',
            'cover_letter' => 'cover_letter.pdf',
            'status' => 'new',
            'notes' => 'none',
            'job_id' => 0,
            'source' => 'website',
            'ip_address' => '',
            'user_agent' => '',
            'referrer' => '',
            'user_id' => '6',
            'applied_at' => now(),
            'image' => 'perfil.jpg',
        ]
    ]);
    }
}

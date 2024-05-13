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
            'address' => '123 Main St',
            'city' => 'Anytown',
            'state' => 'NY',
            'zip' => '12345',
            'country' => 'USA',
            'resume' => 'resume.pdf',
            'cover_letter' => 'cover_letter.pdf',
            'job_id' => '1',
            'status' => 'new',
            'notes' => 'none',
            'source' => 'website',
            'ip_address' => '',
            'user_agent' => '',
            'referrer' => '',
            'user_id' => '1',
            'applied_at' => '2024-04-28 20:50:13',
        ],
        [
            'name' => 'Walter White',
            'email' => 'walter@ggg.com',
            'phone' => '1555555555',
            'address' => '222 ave st',
            'city' => 'Anytown',
            'state' => 'NY',
            'zip' => '12345',
            'country' => 'USA',
            'resume' => 'resume.pdf',
            'cover_letter' => 'cover_letter.pdf',
            'job_id' => '1',
            'status' => 'new',
            'notes' => 'none',
            'source' => 'website',
            'ip_address' => '',
            'user_agent' => '',
            'referrer' => '',
            'user_id' => '2',
            'applied_at' => '2024-04-29 20:50:13',
        ],
        [
            'name' => 'Administrador',
            'email' => 'walter@ggg.com',
            'phone' => '1555555555',
            'address' => '222 ave st',
            'city' => 'Anytown',
            'state' => 'NY',
            'zip' => '12345',
            'country' => 'USA',
            'resume' => 'resume.pdf',
            'cover_letter' => 'cover_letter.pdf',
            'job_id' => '1',
            'status' => 'new',
            'notes' => 'none',
            'source' => 'website',
            'ip_address' => '',
            'user_agent' => '',
            'referrer' => '',
            'user_id' => '3',
            'applied_at' => '2024-04-29 20:50:13',
        ]
    ]);
    }
}

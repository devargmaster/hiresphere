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
    DB::table('applicant')->insert([
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
            'applied_at' => '2024-04-28 20:50:13',
        ]
    ]);
    }
}

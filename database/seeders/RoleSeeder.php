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
            'Administrator' => 'Has full access to the system',
            'Editor' => 'Can edit existing entries',
            'Subscriber' => 'Can read posts and write comments',
            'Recluiter' => 'Can post job offers and review applicants',
            'Job Seeker' => 'Looking for job opportunities',
            'Applicant' => 'Has applied for a job',
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

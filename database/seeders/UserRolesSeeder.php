<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\UserRole;

class UserRolesSeeder extends Seeder
{
    public function run()
    {
        $roles = [
            ['role_name' => 'Admin', 'role_description' => 'Administrator'],
            ['role_name' => 'Teacher', 'role_description' => 'Teacher'],
            ['role_name' => 'Student', 'role_description' => 'Student'],
            ['role_name' => 'Counselor', 'role_description' => 'Counselor'],
            ['role_name' => 'Dean', 'role_description' => 'Dean'],
            // Add more sample data here
        ];

        UserRole::insert($roles);
    }
}
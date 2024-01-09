<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            [
                'role_name' => 'admin',
                'description' => 'Administrator',
            ],
            [
                'role_name' => 'super-admin',
                'description' => 'Super Administrator',
            ],
        ];

        foreach ($roles as $role) {
            Role::create($role);
        }
    }
}

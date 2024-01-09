<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $adminRole = Role::where('role_name', 'admin')->first();
        $superAdminRole = Role::where('role_name', 'super-admin')->first();

        User::create([
            'name' => 'Admin',
            'email' => 'admin@mail.com',
            'password' => 'password',
        ])->roles()->attach($adminRole);

        User::create([
            'name' => 'Super Admin',
            'email' => 'superadmin@mail.com',
            'password' => 'password',
        ])->roles()->attach($superAdminRole);
    }
}

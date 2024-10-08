<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $developer = Role::create([
            'slug' => 'developer',
            'name' => 'Developer',
            'type' => 'Developer',
        ]);

        $admin = Role::create([
            'slug' => 'admin',
            'name' => 'Admin',
            'type' => 'Staff',
        ]);

        $astrologer = Role::create([
            'slug' => 'astrologer',
            'name' => 'Astrologer',
            'type' => 'Staff',
        ]);

        $role = Role::create([
            'slug' => 'operator',
            'name' => 'Operator',
            'type' => 'Staff',
        ]);

        $role = Role::create([
            'slug' => 'user',
            'name' => 'User',
            'type' => 'Staff'
        ]);

        DB::table('users')->insert([
            'name' => 'kiran',
            'phone' => '0944912812',
            'email' => 'dev.hlaingwinphyoe@gmail.com',
            'role_id' => $developer->id,
            'password' => Hash::make('password-123'),
        ]);

        DB::table('users')->insert([
            'name' => 'Shin',
            'phone' => '0987654321',
            'email' => 'shin@gmail.com',
            'role_id' => $astrologer->id,
            'password' => Hash::make('password-123'),
        ]);

        DB::table('users')->insert([
            'name' => 'Lwin',
            'phone' => '09483738732',
            'email' => 'lwin@gmail.com',
            'role_id' => $astrologer->id,
            'password' => Hash::make('password-123'),
        ]);
    }
}

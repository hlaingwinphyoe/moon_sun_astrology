<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            SystemInfoSeeder::class,
            StatusSeeder::class,
            UserSeeder::class,
            PackageSeeder::class,
            ZodiacSeeder::class,
            PostSeeder::class,
            BankSeeder::class,
        ]);
    }
}

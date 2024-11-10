<?php

namespace Database\Seeders;

use Database\Factories\UserFactory;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        UserFactory::new()->create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'is_super_admin' => true,
        ]);

        $this->call([
            OrganizationSeeder::class,
        ]);
    }
}

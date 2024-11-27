<?php

namespace Database\Seeders;

use App\Models\User;
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
        User::create([
            'name' => 'Admin',
            'email' => 'tharindarodrigo@gmail.com',
            'password' => bcrypt(value: 'p@$$w0rd'),
            'is_super_admin' => true]
        );

        User::create([
            'name' => 'Yushadha',
            'email' => 'yushadha@gmail.com',
            'password' => bcrypt(value: 'p@$$w0rd'),
            'is_super_admin' => true,
        ]);

        User::create([
            'name' => 'Madri',
            'email' => 'madrijayakody@gmail.com',
            'password' => bcrypt(value: 'p@$$w0rd'),
            'is_super_admin' => true,
        ]);

        $this->call([
            OrganizationSeeder::class,
        ]);
    }
}

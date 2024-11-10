<?php

namespace Database\Seeders;

use Database\Factories\OrganizationFactory;
use Illuminate\Database\Seeder;

class OrganizationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        OrganizationFactory::new()->count(10)->create();
    }
}

<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        S00_SoftVersionSeeder::run();
        S01_TenantSeeder::run();
        S02_RoleSeeder::run();
        S03_UserSeeder::run();
    }
}

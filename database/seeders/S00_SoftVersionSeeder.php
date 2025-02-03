<?php

namespace Database\Seeders;

use App\Models\SoftVersion;
use Illuminate\Database\Seeder;

class S00_SoftVersionSeeder extends Seeder
{
    public static function run(): void
    {
        SoftVersion::create([
            'soft_version' => '1.0.0',
            'db_version' => '1.0.0',
            'title' => '-',
            'body' => '-',
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Version;

class VersionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Version::insert([
            'id'=>1,
            'version' => 1,
            'theme'=>'classic'
        ]);
        Version::insert([
            'id'=>2,
            'version' => 2,
            'theme'=>'cuba'
        ]);
    }
}

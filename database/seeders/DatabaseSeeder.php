<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            CollegeSeeder::class,
            ProgramSeeder::class,
            LevelSeeder::class,
            AdviserSeeder::class,
            StudentSeeder::class,
            StudentRecordSeeder::class,
        ]);
    }
}
<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\College;

class CollegeSeeder extends Seeder
{
    public function run()
    {
        College::create(['college_name' => 'Engineering']);
        College::create(['college_name' => 'Business']);
    }
}
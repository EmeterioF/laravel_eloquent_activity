<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Adviser;

class AdviserSeeder extends Seeder
{
    public function run()
    {
        Adviser::create(['first_name'=>'John','last_name'=>'Smith']);
        Adviser::create(['first_name'=>'Anna','last_name'=>'Lee']);
    }
}
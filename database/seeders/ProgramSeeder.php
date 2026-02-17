<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Program;
use App\Models\College;

class ProgramSeeder extends Seeder
{
    public function run()
    {
        $engineering = College::where('college_name','Engineering')->first();
        $business = College::where('college_name','Business')->first();

        Program::create([
            'program_name'=>'Computer Science',
            'college_id'=>$engineering->id
        ]);

        Program::create([
            'program_name'=>'Civil Engineering',
            'college_id'=>$engineering->id
        ]);

        Program::create([
            'program_name'=>'Marketing',
            'college_id'=>$business->id
        ]);
    }
}
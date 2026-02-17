<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Student;
use App\Models\Program;
use App\Models\College;
use App\Models\Level;
use App\Models\Adviser;
use App\Models\StudentRecord;

class StudentRecordSeeder extends Seeder
{
    public function run()
    {
        $student1 = Student::where('student_number','2026001')->first();
        $student2 = Student::where('student_number','2026002')->first();
        $student3 = Student::where('student_number','2026003')->first();

        $cs = Program::where('program_name','Computer Science')->first();
        $ce = Program::where('program_name','Civil Engineering')->first();
        $mk = Program::where('program_name','Marketing')->first();

        $eng = College::where('college_name','Engineering')->first();
        $bus = College::where('college_name','Business')->first();

        $l1 = Level::where('level_name','1st Year')->first();
        $l2 = Level::where('level_name','2nd Year')->first();

        $a1 = Adviser::where('first_name','John')->first();
        $a2 = Adviser::where('first_name','Anna')->first();

        StudentRecord::create([
            'student_id'=>$student1->id,
            'program_id'=>$cs->id,
            'college_id'=>$eng->id,
            'level_id'=>$l1->id,
            'adviser_id'=>$a1->id
        ]);

        StudentRecord::create([
            'student_id'=>$student2->id,
            'program_id'=>$ce->id,
            'college_id'=>$eng->id,
            'level_id'=>$l1->id,
            'adviser_id'=>$a1->id
        ]);

        StudentRecord::create([
            'student_id'=>$student3->id,
            'program_id'=>$mk->id,
            'college_id'=>$bus->id,
            'level_id'=>$l2->id,
            'adviser_id'=>$a2->id
        ]);
    }
}
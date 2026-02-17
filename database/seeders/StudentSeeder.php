<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Student;

class StudentSeeder extends Seeder
{
    public function run()
    {
        Student::create([
            'student_number'=>'2026001',
            'first_name'=>'Jane',
            'last_name'=>'Doe'
        ]);

        Student::create([
            'student_number'=>'2026002',
            'first_name'=>'Mark',
            'last_name'=>'Tan'
        ]);

        Student::create([
            'student_number'=>'2026003',
            'first_name'=>'Lily',
            'last_name'=>'Cruz'
        ]);
    }
}
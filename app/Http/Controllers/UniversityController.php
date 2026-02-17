<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\College;
use App\Models\Program;
use App\Models\Level;
use App\Models\Adviser;

class UniversityController extends Controller
{
    public function colleges()
    {
        $colleges = College::all();
        return view('colleges', compact('colleges'));
    }

    public function programs()
    {
        $programs = Program::with('college')->get();
        return view('programs', compact('programs'));
    }

    public function levels()
    {
        $levels = Level::all();
        return view('levels', compact('levels'));
    }

    public function advisers()
    {
        $advisers = Adviser::all();
        return view('advisers', compact('advisers'));
    }

    public function students()
    {
        $students = Student::all();
        return view('students', compact('students'));
    }

    public function records()
    {
        $students = Student::with('record')->get();
        return view('records', compact('students'));
    }
}
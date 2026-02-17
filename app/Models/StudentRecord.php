<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudentRecord extends Model
{
    protected $fillable = [
        'student_id',
        'program_id',
        'college_id',
        'level_id',
        'adviser_id'
    ];

    public function program() { return $this->belongsTo(Program::class); }
    public function college() { return $this->belongsTo(College::class); }
    public function level() { return $this->belongsTo(Level::class); }
    public function adviser() { return $this->belongsTo(Adviser::class); }
}
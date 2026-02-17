<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['student_number','first_name','last_name'];

    public function record()
    {
        return $this->hasOne(StudentRecord::class);
    }

    public function programs()
    {
        return $this->belongsToMany(Program::class, 'student_records');
    }
}
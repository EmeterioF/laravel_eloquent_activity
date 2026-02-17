<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    protected $fillable = ['program_name','college_id'];

    public function students()
    {
        return $this->belongsToMany(Student::class, 'student_records');
    }

    public function college()
    {
        return $this->belongsTo(College::class);
    }

}
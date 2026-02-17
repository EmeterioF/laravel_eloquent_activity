<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Adviser extends Model
{
    protected $fillable = ['first_name','last_name'];

    public function studentRecords()
    {
        return $this->hasMany(StudentRecord::class);
    }
}
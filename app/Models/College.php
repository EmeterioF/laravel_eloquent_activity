<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class College extends Model
{
    protected $fillable = ['college_name'];

    public function programs()
    {
        return $this->hasMany(Program::class);
    }
}
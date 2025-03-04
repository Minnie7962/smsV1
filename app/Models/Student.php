<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $table = 'users';
    
    public function studentRecord()
    {
        return $this->hasOne(StudentRecord::class);
    }

    public function parents()
    {
        return $this->belongsToMany(ParentRecord::class, 'student_parent', 'student_id', 'parent_id');
    }
}

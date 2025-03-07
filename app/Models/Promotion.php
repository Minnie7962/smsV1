<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
    use HasFactory;

    protected $fillable = [
        'old_class_id',
        'new_class_id',
        'academic_year_id',
        'new_section_id',
        'academic_year_id',
        'students',
        'school_id',
    ];

    protected $casts = [
        'students' => 'array',
    ];

    public function getLabelAttribute()
    {
        return "{$this->oldClass->name} to {$this->newClass->name} year: {$this->academicYear->start_year} - {$this->academicYear->stop_year}";
    }

    public function oldClass()
    {
        return $this->belongsTo(MyClass::class, 'old_class_id');
    }

    public function newClass()
    {
        return $this->belongsTo(MyClass::class, 'new_class_id');
    }

    public function academicYear()
    {
        return $this->belongsTo(AcademicYear::class, 'academic_year_id');
    }
}

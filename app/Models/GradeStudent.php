<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GradeStudent extends Model
{
    use HasFactory;

    protected $table ='grade_student';

    protected $fillable = [ 
        'grade_id',
        'student_id', 
    ];

    // a grade belongs to a student for each course class!
        public function student() {
            return $this->belongsTo(
                Student::class,
                'grade_students',
                'student_id',
                'grade_id',
            );
        }

    // the grade_students pivot table needs to talk to the grade table
        public function grade() {
            return $this->hasMany(Grade::class);
        }
}
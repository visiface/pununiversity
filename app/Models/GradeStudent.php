<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GradeStudent extends Model
{
    use HasFactory;

    protected $table ='grade_student';

    protected $fillable = [ 
        'course_class_id', 
        'student_id', 
        'grade_id'
    ];

    // a grade belongs to a student for each course class!
        public function student() {
            return $this->belongsTo(Student::class);
        }
}

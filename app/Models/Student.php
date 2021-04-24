<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $table ='students';

    protected $fillable = [ 
        'course_id',
        'fname', 
        'lname', 
        'email'
    ];

        // a student belongs to a course class!
        public function course() {
            return $this->belongsToMany(CourseClass::class);
        }

        // a student belongs to a course class!
        public function grades() {
            return $this->belongsToMany(Grade::class);
        }
}

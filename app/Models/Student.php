<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $table ='students';

    protected $fillable = [ 
        'fname', 
        'lname', 
        'email'
    ];

    // a student belongs to a course class!
        public function course() {
            return $this->belongsToMany(CourseClass::class);
        }

    // a student has many grades in each course class!
        public function grade() {
            return $this->hasMany(Grade::class);
        }
}

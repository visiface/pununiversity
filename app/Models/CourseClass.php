<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseClass extends Model
{
    use HasFactory;

    protected $table ='course_classes';
    protected $primaryKey = "id";

    protected $fillable = [
        'course_id', 
        'name', 
        'subject', 
        'description'
    ];

    

    // a course class belongs to a course!
        public function course() {
            return $this->belongsTo(Course::class);
        }
}

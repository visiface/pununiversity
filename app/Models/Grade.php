<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use HasFactory;

    protected $table ='grades';

    protected $fillable = [ 
        'grade',
    ];

    // a grade belongs to many students in a course class!
        public function student() {
            return $this->belongsToMany(Student::class);
        }
}

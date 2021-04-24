<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Grade;
use App\Models\GradeStudent;

class GradeStudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // START Joe King
            if ( GradeStudent::where( 'student_id', '1' )->doesntExist() ) {

                GradeStudent::create([
                    'id' => '1',
                    'course_class_id' => '1',
                    'student_id' => '1',
                    'grade_id' => '1',
                ]);
            }
        // END Joe King

        // START Dinah Mite
            if ( GradeStudent::where( 'student_id', '4' )->doesntExist() ) {

                GradeStudent::create([
                    'id' => '3',
                    'course_class_id' => '1',
                    'student_id' => '4',
                    'grade_id' => '3',
                ]);
            }
        // END Dinah Mite
    }
}

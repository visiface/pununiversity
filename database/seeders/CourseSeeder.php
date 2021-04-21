<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Course;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // START Master of Pun
            if ( Course::where( 'name', 'Master of Pun' )->doesntExist() ) {

                Course::create([
                
                    'id' => '1',
                    'name' => 'Master of Pun',
                    'degree_type' => "Master's Degree",
                    'description' => "4-Year Master in Fine Arts and Social Sciences to prepare students for academic and professional intervention in the field of Entertainment. Accelerated and intensive courses using early fundamentals to give first-hand experience in The Art of Pun. Students enrolled in the Curriculum and Master's Program qualify for state licensure as a Pun Specialist, which can lead to leadership positions at school, district, and state levels.",
                ]);
            }
        // END Master of Pun

        // START Bachelors of Quip
            if ( Course::where( 'name', 'Bachelors of Quip' )->doesntExist() ) {

                Course::create([
                
                    'id' => '2',
                    'name' => 'Bachelors of Quip',
                    'degree_type' => "Bachelor's Degree",
                    'description' => "3-Year Bachelors Degree in Fine Arts and Social Sciences to prepare students for academic and professional intervention in the field of Entertainment. Intermediate Level and Paced courses using fundamentals to give first-hand experience in The Art of Quip. Curriculum crafted with the goal of combining fundamentals with On-Field experience that can lead to the Opportunity to obtain Internships, Part-Time, or Full-Time careers.",
                ]);
            }
        // END Bachelors of Quip


        // START Wisecrack's Degree
            if ( Course::where( 'name', 'Wisecrack\'s Degree' )->doesntExist() ) {

                Course::create([
                
                    'id' => '3',
                    'name' => 'Wisecrack\'s Degree',
                    'degree_type' => "Associate's Degree",
                    'description' => "2-Year Associates in Fine Arts and Social Sciences to prepare students for academic and professional intervention in the field of Entertainment. Intermediate Level and Paced courses using fundamentals to give first-hand experience in The Art of Pun. Entry Level and Fundamental Level Courses available on site and online for pace as required/desired. Can lead to opportunities to entry level positions at various related positions.",
                ]);
            }
        // END Wisecrack's Degree
    }
}

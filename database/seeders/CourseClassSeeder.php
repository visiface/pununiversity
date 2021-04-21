<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CourseClass;

class CourseClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // START The Art of Pun
            if ( CourseClass::where( 'name', 'The Art of Pun' )->doesntExist() ) {

                CourseClass::create([
                
                    'id' => '1',
                    'course_id' => '3',
                    'name' => 'The Art of Pun',
                    'subject' => "Literature",
                    'description' => "edit later",
                ]);
            }
        // END The Art of Pun


        // START Advanced Quip Theory
            if ( CourseClass::where( 'name', 'Advanced Quip Theory' )->doesntExist() ) {

                CourseClass::create([
                
                    'id' => '2',
                    'course_id' => '1',
                    'name' => 'Advanced Quip Theory',
                    'subject' => "Literature - Grammar",
                    'description' => "Intensive Level Vocabulary and Grammar Studies with Investigation and Discussions about Social Interactions.",
                ]);
            }
        // END Advanced Quip Theory


        // START For the Senses IV
            if ( CourseClass::where( 'name', 'For the Senses IV' )->doesntExist() ) {

                CourseClass::create([
                
                    'id' => '3',
                    'course_id' => '1',
                    'name' => 'For the Senses IV',
                    'subject' => "Science - Social",
                    'description' => "Studies of Different effects of Jokes/Puns/Humor based on the medium. Course touches on Visual and Audible Puns, both separate and in conjunction.",
                ]);
            }
        // END For the Senses IV


        // START Advanced Calembour Crafting Studies
            if ( CourseClass::where( 'name', 'Advanced Calembour Crafting Studies' )->doesntExist() ) {

                CourseClass::create([
                
                    'id' => '4',
                    'course_id' => '1',
                    'name' => 'Advanced Calembour Crafting Studies',
                    'subject' => "Fine Arts - Visual",
                    'description' => "Abstract Course on the different Visual Forms of Social Science, to include: Sculptures, Images on different Mediums, Theatre, and Digital Means. Critical Thinking and Thesis intensive course.",
                ]);
            }
        // END For the Senses IV
    }
}

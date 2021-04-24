<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\Student;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // START Joe King
            if ( Student::where( 'email', 'imjokinglol@live.com' )->doesntExist() ) {

                Student::create([
                    'id' => '1',
                    'course_id' => "1",
                    'fname' => 'Joe',
                    'lname' => 'King',
                    'email' => 'imjokinglol@live.com',
                ]);
            }
        // END Joe King


        // START Arty Fischel
            if ( Student::where( 'email', 'artificialflavors@live.com' )->doesntExist() ) {

                Student::create([
                    'id' => '2',
                    'course_id' => "2",
                    'fname' => 'Arty',
                    'lname' => 'Fischel',
                    'email' => 'artificialflavors@live.com',
                ]);
            }
        // END Arty Fischel


        // START Robyn Banks
            if ( Student::where( 'email', 'notrobbinbanks@live.com' )->doesntExist() ) {

                Student::create([
                    'id' => '3',
                    'course_id' => "1",
                    'fname' => 'Robyn',
                    'lname' => 'Banks',
                    'email' => 'notrobbinbanks@live.com',
                ]);
            }
        // END Robyn Banks


        // START Dinah Mite
            if ( Student::where( 'email', 'boomboomdinah@live.com' )->doesntExist() ) {

                Student::create([
                    'id' => '4',
                    'course_id' => "3",
                    'fname' => 'Dinah',
                    'lname' => 'Mite',
                    'email' => 'boomboomdinah@live.com',
                ]);
            }
        // END Dinah Mite
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\Grade;

class GradeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // START IG
            if ( Grade::where( 'grade', 'IG' )->doesntExist() ) {

                Grade::create([
                    'id' => '1',
                    'grade' => 'IG',
                ]);
            }
        // END IG


        // START G
            if ( Grade::where( 'grade', 'G' )->doesntExist() ) {

                Grade::create([
                    'id' => '2',
                    'grade' => 'G',
                ]);
            }
        // END G


        // START VG
            if ( Grade::where( 'grade', 'VG' )->doesntExist() ) {

                Grade::create([
                    'id' => '3',
                    'grade' => 'VG',
                ]);
            }
        // END VG
    }
}


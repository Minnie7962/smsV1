<?php

namespace Database\Seeders;

use App\Models\Subject;
use Illuminate\Database\Seeder;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Subject::firstOrCreate([
            'id' => 1,
        ], [
            'name'        => 'Khmer',
            'short_name'  => 'Khmer',
            'my_class_id' => 1,
            'school_id'   => 1,
        ]);
    
        Subject::firstOrCreate([
            'id' => 2,
        ], [
            'name'        => 'Mathematics',
            'short_name'  => 'Math',
            'my_class_id' => 1,
            'school_id'   => 1,
        ]);
    
        Subject::firstOrCreate([
            'id' => 3,
        ], [
            'name'        => 'Social',
            'short_name'  => 'Social',
            'my_class_id' => 1,
            'school_id'   => 1,
        ]);
    
        Subject::firstOrCreate([
            'id' => 4,
        ], [
            'name'        => 'Science',
            'short_name'  => 'Science',
            'my_class_id' => 1,
            'school_id'   => 1,
        ]);

        Subject::firstOrCreate([
            'id' => 5,
        ], [
            'name'        => 'English',
            'short_name'  => 'English',
            'my_class_id' => 1,
            'school_id'   => 1,
        ]);

        Subject::firstOrCreate([
            'id' => 6,
        ], [
            'name'        => 'History',
            'short_name'  => 'Hostory',
            'my_class_id' => 1,
            'school_id'   => 1,
        ]);
    }
}

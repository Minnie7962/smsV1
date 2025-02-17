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
            'name'        => 'ភាសាខ្មែរ',
            'short_name'  => 'khmer',
            'my_class_id' => 1,
            'school_id'   => 1,
        ]);
    
        Subject::firstOrCreate([
            'id' => 2,
        ], [
            'name'        => 'គណិតវិទ្យា',
            'short_name'  => 'math',
            'my_class_id' => 1,
            'school_id'   => 1,
        ]);
    
        Subject::firstOrCreate([
            'id' => 3,
        ], [
            'name'        => 'សិក្សាសង្គម',
            'short_name'  => 'social',
            'my_class_id' => 1,
            'school_id'   => 1,
        ]);
    
        Subject::firstOrCreate([
            'id' => 4,
        ], [
            'name'        => 'វិទ្យាសាស្ត្រ',
            'short_name'  => 'science',
            'my_class_id' => 1,
            'school_id'   => 1,
        ]);
    }
}

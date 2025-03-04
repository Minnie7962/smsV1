<?php

namespace Database\Seeders;

use App\Models\Exam;
use Illuminate\Database\Seeder;

class ExamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Exam::firstOrCreate([
            'id'          => 1,
            'name'        => 'Khmer',
            'description' => 'Grade 1 Khmer exam',
            'semester_id' => '1',
            'start_date'  => '2025-01-01',
            'stop_date'   => '2025-01-31',
        ]);

        Exam::firstOrCreate([
            'id'          => 2,
            'name'        => ' Math',
            'description' => 'Grade 2 Math exam',
            'semester_id' => '1',
            'start_date'  => '2025-01-01',
            'stop_date'   => '2025-01-31',
        ]);

        Exam::firstOrCreate([
            'id'          => 3,
            'name'        => 'English',
            'description' => 'Grade 3 English exam',
            'semester_id' => '1',
            'start_date'  => '2025-01-01',
            'stop_date'   => '2025-01-31',
        ]);

        Exam::firstOrCreate([
            'id'          => 4,
            'name'        => 'Science',
            'description' => 'Grade 4 Science exam',
            'semester_id' => '1',
            'start_date'  => '2025-01-01',
            'stop_date'   => '2025-01-31',
        ]);

        Exam::firstOrCreate([
            'id'          => 5,
            'name'        => 'Social',
            'description' => 'Grade 5 Social exam',
            'semester_id' => '1',
            'start_date'  => '2025-01-01',
            'stop_date'   => '2025-01-31',
        ]);

        Exam::firstOrCreate([
            'id'          => 6,
            'name'        => 'English',
            'description' => 'Grade 6 English exam',
            'semester_id' => '1',
            'start_date'  => '2025-01-01',
            'stop_date'   => '2025-01-31',
        ]);

        Exam::firstOrCreate([
            'id'          => 7,
            'name'        => 'Math',
            'description' => 'Grade 6 Math exam',
            'semester_id' => '1',
            'start_date'  => '2025-01-01',
            'stop_date'   => '2025-01-31',
        ]);

        // Exam::factory()->count(10)->create();
    }
}

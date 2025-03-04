<?php

namespace Database\Seeders;

use App\Models\ExamSlot;
use Illuminate\Database\Seeder;

class ExamSlotSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ExamSlot::firstOrCreate([
            'name'        => 'Khmer',
            'description' => 'Grade 1 Khmer exam',
            'total_marks' => 10,
            'exam_id'     => 1,
        ]);

        ExamSlot::firstOrCreate([
            'name'        => 'Math',
            'description' => 'Grade 1 Math exam',
            'total_marks' => 10,
            'exam_id'     => 1,
        ]);

        ExamSlot::firstOrCreate([
            'name'        => 'English',
            'description' => 'Grade 1 English exam',
            'total_marks' => 10,
            'exam_id'     => 1,
        ]);

        ExamSlot::firstOrCreate([
            'name'        => 'History',
            'description' => 'Grade 1 History exam',
            'total_marks' => 10,
            'exam_id'     => 1,
        ]);

        ExamSlot::firstOrCreate([
            'name'        => 'Science',
            'description' => 'Grade 1 Science exam',
            'total_marks' => 10,
            'exam_id'     => 1,
        ]);

        ExamSlot::firstOrCreate([
            'name'        => 'Khmer',
            'description' => 'Grade 2 Khmer exam',
            'total_marks' => 10,
            'exam_id'     => 2,
        ]);

        ExamSlot::firstOrCreate([
            'name'        => 'Math',
            'description' => 'Grade 2 Math exam',
            'total_marks' => 10,
            'exam_id'     => 2,
        ]);

        ExamSlot::firstOrCreate([
            'name'        => 'English',
            'description' => 'Grade 2 English exam',
            'total_marks' => 10,
            'exam_id'     => 2,
        ]);

        ExamSlot::firstOrCreate([
            'name'        => 'History',
            'description' => 'Grade 2 History exam',
            'total_marks' => 10,
            'exam_id'     => 2,
        ]);

        ExamSlot::firstOrCreate([
            'name'        => 'Science',
            'description' => 'Grade 2 Science exam',
            'total_marks' => 10,
            'exam_id'     => 2,
        ]);

        ExamSlot::firstOrCreate([
            'name'        => 'Khmer',
            'description' => 'Grade 3 Khmer exam',
            'total_marks' => 10,
            'exam_id'     => 3,
        ]);

        ExamSlot::firstOrCreate([
            'name'        => 'Math',
            'description' => 'Grade 3 Math exam',
            'total_marks' => 10,
            'exam_id'     => 3,
        ]);

        ExamSlot::firstOrCreate([
            'name'        => 'English',
            'description' => 'Grade 3 English exam',
            'total_marks' => 10,
            'exam_id'     => 3,
        ]);

        ExamSlot::firstOrCreate([
            'name'        => 'History',
            'description' => 'Grade 3 History exam',
            'total_marks' => 10,
            'exam_id'     => 3,
        ]);

        ExamSlot::firstOrCreate([
            'name'        => 'Science',
            'description' => 'Grade 3 Science exam',
            'total_marks' => 10,
            'exam_id'     => 3,
        ]);

        ExamSlot::firstOrCreate([
            'name'        => 'Khmer',
            'description' => 'Grade 4 Khmer exam',
            'total_marks' => 10,
            'exam_id'     => 4,
        ]);

        ExamSlot::firstOrCreate([
            'name'        => 'Math',
            'description' => 'Grade 4 Math exam',
            'total_marks' => 10,
            'exam_id'     => 4,
        ]);

        ExamSlot::firstOrCreate([
            'name'        => 'English',
            'description' => 'Grade 4 English exam',
            'total_marks' => 10,
            'exam_id'     => 4,
        ]);

        ExamSlot::firstOrCreate([
            'name'        => 'History',
            'description' => 'Grade 4 History exam',
            'total_marks' => 10,
            'exam_id'     => 4,
        ]);

        ExamSlot::firstOrCreate([
            'name'        => 'Science',
            'description' => 'Grade 4 Science exam',
            'total_marks' => 10,
            'exam_id'     => 4,
        ]);

        ExamSlot::firstOrCreate([
            'name'        => 'Khmer',
            'description' => 'Grade 5 Khmer exam',
            'total_marks' => 10,
            'exam_id'     => 5,
        ]);

        ExamSlot::firstOrCreate([
            'name'        => 'Math',
            'description' => 'Grade 5 Math exam',
            'total_marks' => 10,
            'exam_id'     => 5,
        ]);

        ExamSlot::firstOrCreate([
            'name'        => 'English',
            'description' => 'Grade 5 English exam',
            'total_marks' => 10,
            'exam_id'     => 5,
        ]);

        ExamSlot::firstOrCreate([
            'name'        => 'History',
            'description' => 'Grade 5 History exam',
            'total_marks' => 10,
            'exam_id'     => 5,
        ]);

        ExamSlot::firstOrCreate([
            'name'        => 'Science',
            'description' => 'Grade 5 Science exam',
            'total_marks' => 10,
            'exam_id'     => 5,
        ]);

        ExamSlot::firstOrCreate([
            'name'        => 'Khmer',
            'description' => 'Grade 6 Khmer exam',
            'total_marks' => 10,
            'exam_id'     => 6,
        ]);

        ExamSlot::firstOrCreate([
            'name'        => 'Math',
            'description' => 'Grade 6 Math exam',
            'total_marks' => 10,
            'exam_id'     => 6,
        ]);

        ExamSlot::firstOrCreate([
            'name'        => 'English',
            'description' => 'Grade 6 English exam',
            'total_marks' => 10,
            'exam_id'     => 6,
        ]);

        ExamSlot::firstOrCreate([
            'name'        => 'History',
            'description' => 'Grade 6 History exam',
            'total_marks' => 10,
            'exam_id'     => 6,
        ]);

        ExamSlot::firstOrCreate([
            'name'        => 'Science',
            'description' => 'Grade 6 Science exam',
            'total_marks' => 10,
            'exam_id'     => 6,
        ]);
    }
}

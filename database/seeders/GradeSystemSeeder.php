<?php

namespace Database\Seeders;

use App\Models\GradeSystem;
use Illuminate\Database\Seeder;

class GradeSystemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        GradeSystem::firstOrCreate([
            'id'             => 1,
            'name'           => 'Pass',
            'remark'         => 'Excellent',
            'grade_from'     => '9',
            'grade_till'     => '10',
            'class_group_id' => 1,
        ]);

        GradeSystem::firstOrCreate([
            'id'             => 2,
            'name'           => 'Pass',
            'remark'         => 'Very Good',
            'grade_from'     => '7',
            'grade_till'     => '8',
            'class_group_id' => 1,
        ]);

        GradeSystem::firstOrCreate([
            'id'             => 3,
            'name'           => 'Pass',
            'remark'         => 'Good',
            'grade_from'     => '5',
            'grade_till'     => '6',
            'class_group_id' => 1,
        ]);

        GradeSystem::firstOrCreate([
            'id'             => 4,
            'name'           => 'Fail',
            'remark'         => 'Satisfactory',
            'grade_from'     => '3',
            'grade_till'     => '4',
            'class_group_id' => 1,
        ]);

        GradeSystem::firstOrCreate([
            'id'             => 5,
            'name'           => 'Fail',
            'remark'         => 'Average',
            'grade_from'     => '1',
            'grade_till'     => '2',
            'class_group_id' => 1,
        ]);

        GradeSystem::firstOrCreate([
            'id'             => 6,
            'name'           => 'Fail',
            'remark'         => 'Poor',
            'grade_from'     => '0',
            'grade_till'     => '0',
            'class_group_id' => 1,
        ]);
    }
}

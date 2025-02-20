<?php

namespace Database\Seeders;

use App\Models\ClassGroup;
use Illuminate\Database\Seeder;

class ClassGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ClassGroup::firstOrcreate([
            'id'        => 1,
            'name'      => 'Class1',
            'school_id' => 1,
        ]);
        
        ClassGroup::firstOrcreate([
            'id'        => 2,
            'name'      => 'Class2',
            'school_id' => 1,
        ]);

        ClassGroup::firstOrcreate([
            'id'        => 3,
            'name'      => 'Class3',
            'school_id' => 1,
        ]);

        ClassGroup::firstOrcreate([
            'id'        => 4,
            'name'      => 'Class4',
            'school_id' => 1,
        ]);

        ClassGroup::firstOrcreate([
            'id'        => 5,
            'name'      => 'Class5',
            'school_id' => 1,
        ]);

        ClassGroup::firstOrcreate([
            'id'        => 6,
            'name'      => 'Class6',
            'school_id' => 1,
        ]);

        ClassGroup::firstOrcreate([
            'id'        => 7,
            'name'      => 'Class7',
            'school_id' => 1,
        ]);

        ClassGroup::firstOrcreate([
            'id'        => 8,
            'name'      => 'Class8',
            'school_id' => 1,
        ]);

        ClassGroup::firstOrcreate([
            'id'        => 9,
            'name'      => 'Class9',
            'school_id' => 1,
        ]);

        ClassGroup::firstOrcreate([
            'id'        => 10,
            'name'      => 'Class10',
            'school_id' => 1,
        ]);
    }
}

<?php

namespace Database\Seeders;

use App\Models\MyClass;
use Illuminate\Database\Seeder;

class MyClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MyClass::firstOrcreate([
            'id'             => 1,
            'name'           => 'Kindergarten',
            'class_group_id' => 1,
        ]);
        MyClass::firstOrcreate([
            'id'             => 2,
            'name'           => 'Grade1',
            'class_group_id' => 1,
        ]);
        MyClass::firstOrcreate([
            'id'             => 3,
            'name'           => 'Grade2',
            'class_group_id' => 1,
        ]);
        MyClass::firstOrcreate([
            'id'             => 4,
            'name'           => 'Grade3',
            'class_group_id' => 1,
        ]);
        MyClass::firstOrcreate([
            'id'             => 5,
            'name'           => 'Grade4',
            'class_group_id' => 1,
        ]);
        MyClass::firstOrcreate([
            'id'             => 6,
            'name'           => 'Grade5',
            'class_group_id' => 1,
        ]);
        MyClass::firstOrcreate([
            'id'             => 7,
            'name'           => 'Grade6',
            'class_group_id' => 1,
        ]);
        MyClass::firstOrcreate([
            'id'             => 8,
            'name'           => 'Office/1',
            'class_group_id' => 1,
        ]);
        MyClass::firstOrcreate([
            'id'             => 9,
            'name'           => 'Office/2',
            'class_group_id' => 1,
        ]);
        MyClass::firstOrcreate([
            'id'             => 10,
            'name'           => 'Library',
            'class_group_id' => 1,
        ]);
        // MyClass::factory()->count(10)->create();
    }
}

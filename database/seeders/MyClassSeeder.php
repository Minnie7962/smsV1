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
            'name'           => 'ថ្នាក់ទី១ (Grade 1)',
            'class_group_id' => 1,
        ]);
        MyClass::firstOrcreate([
            'id'             => 2,
            'name'           => 'ថ្នាក់ទី២ (Grade 2)',
            'class_group_id' => 1,
        ]);
        MyClass::firstOrcreate([
            'id'             => 3,
            'name'           => 'ថ្នាក់ទី៣ (Grade 3)',
            'class_group_id' => 1,
        ]);
        MyClass::firstOrcreate([
            'id'             => 4,
            'name'           => 'ថ្នាក់ទី៤ (Grade 4)',
            'class_group_id' => 1,
        ]);
        MyClass::firstOrcreate([
            'id'             => 5,
            'name'           => 'ថ្នាក់ទី៥ (Grade 5)',
            'class_group_id' => 1,
        ]);
        MyClass::firstOrcreate([
            'id'             => 6,
            'name'           => 'ថ្នាក់ទី៦ (Grade 6)',
            'class_group_id' => 1,
        ]);
        MyClass::factory()->count(6)->create();
    }
}

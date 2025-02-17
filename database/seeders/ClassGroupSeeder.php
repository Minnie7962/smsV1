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
            'name'      => 'Primary',
            'school_id' => 1,
        ]);
    }
}

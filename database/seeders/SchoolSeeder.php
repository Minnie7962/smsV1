<?php

namespace Database\Seeders;

use App\Models\School;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SchoolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        School::updateOrCreate(
            ['id' => 1],
            [
                'name'     => 'សាលាបឋមសិក្សាតាម៉ា',
                'address'  => 'Your school address',
                'code'     => Str::Random(10),
                'initials' => 'TPS',
            ]
        );

        School::factory()
            ->count(3)
            ->create();
    }
}

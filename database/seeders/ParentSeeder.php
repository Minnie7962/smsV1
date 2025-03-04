<?php

namespace Database\Seeders;

use App\Models\ParentRecord;
use App\Models\User;
use Illuminate\Database\Seeder;

class ParentSeeder extends Seeder
{
    public function run()
    {
        // Delete all records from the parent records table
        ParentRecord::query()->delete();

        // Get all parents
        $parents = User::whereHas('roles', function ($query) {
            $query->where('name', 'parent');
        })->get();

        foreach ($parents as $parent) {
            ParentRecord::create([
                'user_id' => $parent->id,
            ]);
        }
    }
}
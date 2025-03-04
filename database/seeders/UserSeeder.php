<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
        
        $superAdmin = User::firstOrCreate([
            'id'                => 1,
            'name'              => 'Admin Ry',
            'email'             => 'super@tamaprimary.edu.kh',
            'password'          => Hash::make('password'),
            'school_id'         => 1,
            'address'           => 'super admin street',
            'birthday'          => '22/04/04',
            'nationality'       => 'khmer',
            'state'             => 'bantey meanchey',
            'city'              => 'poipet',
            'blood_group'       => 'o-',
            'email_verified_at' => now(),
            'gender'            => 'female',
        ]);

        $superAdmin->assignRole('super-admin');
        $superAdmin->save();

        $admin = User::firstOrCreate([
            'id'                => 2,
            'name'              => 'Admin Na',
            'email'             => 'admin@tamaprimary.edu.kh',
            'password'          => Hash::make('password'),
            'school_id'         => 1,
            'address'           => 'admin street',
            'birthday'          => '22/04/04',
            'nationality'       => 'khmer',
            'state'             => 'bantey meanchey',
            'city'              => 'seri sophorn',
            'blood_group'       => 'B+',
            'email_verified_at' => now(),
            'gender'            => 'male',

        ]);

        $admin->assignRole('admin');

        $teacher = User::create([
            'id'                => 3,
            'name'              => 'Bora Hem',
            'email'             => 'teacher@tamaprimary.edu.kh',
            'password'          => Hash::make('password'),
            'school_id'         => 1,
            'address'           => 'teacher street',
            'birthday'          => '22/04/04',
            'nationality'       => 'khmer',
            'state'             => 'bantey meanchey',
            'city'              => 'seri sophorn',
            'blood_group'       => 'B+',
            'email_verified_at' => now(),
            'gender'            => 'male',

        ]);

        $teacher->assignRole('teacher');

        $teacher->teacherRecord()->create([
            'user_id' => $teacher->id,
        ]);

        $student = User::create([
            'id'                => 4,
            'name'              => 'Sopha Lay',
            'email'             => 'student@tamaprimary.edu.kh',
            'password'          => Hash::make('password'),
            'school_id'         => 1,
            'address'           => 'student street',
            'birthday'          => '22/04/04',
            'nationality'       => 'khmer',
            'state'             => 'bantey meanchey',
            'city'              => 'seri sophorn',
            'blood_group'       => 'B+',
            'email_verified_at' => now(),
            'gender'            => 'male',
        ]);
        $student->studentRecord()->create([
            'my_class_id'      => 1,
            'admission_date'   => '22/04/04',
            'is_graduated'     => false,
            'admission_number' => Str::random(10),
        ]);

        $student->assignRole('student');

        $parent = User::create([
            'name'              => 'Kem Lay',
            'email'             => 'parent@tamaprimary.edu.kh',
            'password'          => Hash::make('password'),
            'school_id'         => 1,
            'address'           => 'parent street',
            'birthday'          => '22/04/04',
            'nationality'       => 'khmer',
            'state'             => 'bantey meanchey',
            'city'              => 'seri sophorn',
            'blood_group'       => 'B+',
            'email_verified_at' => now(),
            'gender'            => 'male',

        ]);

        $parent->assignRole('parent');

        $parent->parentRecord()->create();

        $accountant = User::create([
            'name'              => 'Chhing Em',
            'email'             => 'accountant@tamaprimary.edu.kh',
            'password'          => Hash::make('password'),
            'school_id'         => 1,
            'address'           => 'accountant street',
            'birthday'          => '22/04/04',
            'nationality'       => 'khmer',
            'state'             => 'bantey meanchey',
            'city'              => 'seri sophorn',
            'blood_group'       => 'B+',
            'email_verified_at' => now(),
            'gender'            => 'female',

        ]);

        $accountant->assignRole('accountant');

        $librarian = User::create([
            'name'              => 'Rim Sa',
            'email'             => 'libratian@tamaprimary.edu.kh',
            'password'          => Hash::make('password'),
            'school_id'         => 1,
            'address'           => 'librarian street',
            'birthday'          => '22/04/04',
            'nationality'       => 'khmer',
            'state'             => 'bantey meanchey',
            'city'              => 'seri sophorn',
            'blood_group'       => 'B+',
            'email_verified_at' => now(),
            'gender'            => 'male',

        ]);

        $librarian->assignRole('librarian');
    }
}

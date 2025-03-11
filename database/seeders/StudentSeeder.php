<?php

namespace Database\Seeders;

use App\Models\StudentRecord;
use App\Models\User;
use App\Models\ClassGroup;
use App\Models\AcademicYear;
use App\Models\MyClass;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class StudentSeeder extends Seeder
{
    public function run()
    {
        // Disable foreign key constraints
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        StudentRecord::truncate();
        User::whereHas('roles', function ($query) {
            $query->where('name', 'student');
        })->delete();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $genders = ['Male', 'Female'];
        $bloodGroups = ['A+', 'A-', 'B+', 'B-', 'O+', 'O-', 'AB+', 'AB-'];
        $classGroups = ClassGroup::all();
        $classes = MyClass::all();
        $academicYears = AcademicYear::all();

        if ($classGroups->isEmpty() || $classes->isEmpty() || $academicYears->isEmpty()) {
            throw new \Exception('Ensure class groups, classes, and academic years are seeded first.');
        }

        $locations = ['Banteay Meanchey', 'Battambang', 'Kampong Cham', 'Phnom Penh', 'Siem Reap'];
        $phonePrefixes = ['011', '012', '015', '070', '078', '096', '097'];
        $maleNames = ['Sok', 'Chan', 'Sovann', 'Piseth', 'Vuth'];
        $femaleNames = ['Srey', 'Dara', 'Sokunthea', 'Nary', 'Sothea'];
        $lastNames = ['Pheng', 'Chhouk', 'Soun', 'Meas', 'Kim'];

        for ($i = 0; $i < 250; $i++) {
            $gender = $genders[array_rand($genders)];
            $firstName = $gender === 'Male' ? $maleNames[array_rand($maleNames)] : $femaleNames[array_rand($femaleNames)];
            $lastName = $lastNames[array_rand($lastNames)];
            $fullName = "$firstName $lastName";
            $email = strtolower($firstName . '.' . $lastName . Str::random(3) . '@tama.edu.kh');
            $address = $locations[array_rand($locations)];
            $birthDate = date('Y-m-d', strtotime(rand(2014, 2019) . '-' . rand(1, 12) . '-' . rand(1, 28)));
            $bloodGroup = $bloodGroups[array_rand($bloodGroups)];
            
            $contactNumber = $phonePrefixes[array_rand($phonePrefixes)] . rand(1000000, 9999999);
            $fatherPhone = $phonePrefixes[array_rand($phonePrefixes)] . rand(1000000, 9999999);
            $motherPhone = $phonePrefixes[array_rand($phonePrefixes)] . rand(1000000, 9999999);
            $emergencyPhone = $phonePrefixes[array_rand($phonePrefixes)] . rand(1000000, 9999999);

            // Create User
            $user = User::create([
                'name' => $fullName,
                'email' => $email,
                'password' => Hash::make('password'),
                'school_id' => 1,
                'address' => $address,
                'birthday' => $birthDate,
                'nationality' => 'Khmer',
                'state' => $address,
                'city' => $address,
                'blood_group' => $bloodGroup,
                'email_verified_at' => now(),
                'gender' => $gender,
            ]);
            $user->assignRole('student');

            // Create Student Record
            StudentRecord::create([
                'user_id' => $user->id,
                'class_group_id' => $classGroups->random()->id,
                'class_id' => $classes->random()->id,
                'academic_year_id' => $academicYears->random()->id,
                'admission_date' => now(),
                'is_graduated' => false,
                'admission_number' => 'TPS' . Str::random(5),
                'contact_number' => $contactNumber,
                'father_full_name' => 'Father ' . $firstName,
                'father_phone_number' => $fatherPhone,
                'mother_full_name' => 'Mother ' . $firstName,
                'mother_phone_number' => $motherPhone,
                'emergency_contact_name' => 'Emergency ' . $firstName,
                'emergency_contact_relationship' => 'Relative',
                'emergency_contact_number' => $emergencyPhone,
            ]);
        }
        
        $this->command->info("250 student records seeded successfully.");
    }
}

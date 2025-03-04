<?php
namespace Database\Seeders;

use App\Models\StudentRecord;
use App\Models\User;
use App\Models\MyClass;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Delete all records from the student records table
        StudentRecord::query()->delete();

        // Define the number of students to create
        $numberOfStudents = 100; // Set to 100
        
        $genders = ['Male', 'Female'];
        $bloodGroups = ['A+', 'A-', 'B+', 'B-', 'O+', 'O-', 'AB+', 'AB-'];
        
        $maleNames = ['Sok', 'Chan', 'Sovann', 'Piseth', 'Vuth', 'Sokha', 'Sokchea', 'Sokheng', 'Sokly', 'Sokna', 'Sokny', 'Sokun', 'Choun', 'Sokvichvichkunvuth', 'Sokvichvichly', 'Chin', 'Sokvichvichny', 'Sokvichvichun', 'Thou', 'Pha', 'Sokvichvichuntheara', 'Sokvichvichunthida', 'Sokvichvichunthorn', 'Sokvichvichunthy', 'Sokvichvichunvichet', 'Sokvichvichunvuth', 'Sokvichvichvichet', 'Sokvichvichvichey', 'Sokvichvichvichhai', 'Sokvichvichvichhay', 'Sokvichvichvichheka', 'Sokvichvichvichheng', 'Sokvichvichvichhong', 'Sokvichvichvichhor', 'Sokvichvichvichhour', 'Sokvichvichvichka', 'Sokvichvichvichkai', 'Sokvichvichvichkha', 'Sokvichvichvichkheang'];
        $femaleNames = ['Srey', 'Dara', 'Sokunthea', 'Nary', 'Sothea', 'Sophea', 'Lin', 'Soriya', 'Bopha', 'Ryna', 'Lika', 'Laivann', 'Porly', 'Nara', 'Lina', 'Sina', 'Sreyneang', 'Sreynich', 'Sreynak', 'Dalim', 'Sreyneat', 'Sreyneth', 'Sreynich', 'Sreynit', 'Sreynich', 'Pina', 'Nisa', 'Vichaka', 'Sopheap', 'Sokha', 'Sokchea', 'Sokheng', 'Sokly', 'Sokna', 'Sokny', 'Sokun', 'Sokunthea', 'Sokuntheary', 'Sokuntheara', 'Sokunthida', 'Sokunthorn', 'Sokunthy', 'Sokunvichet', 'Sokunvuth', 'Sokvichet', 'Sokvichey', 'Sokvichhai', 'Sokvichhay', 'Sokvichheka', 'Sokvichheng', 'Sokvichhong', 'Sokvichhor', 'Sokvichhour', 'Sokvichka', 'Sokvichkai', 'Sokvichkha', 'Sokvichkheang', 'Sokvichkheng', 'Sokvichkhorn', 'Sokvichkhy', 'Sokvichkong', 'Sokvichkorn', 'Sokvichkun', 'Sokvichkunn', 'Sokvichkunthea', 'Sokvichkuntheary', 'Sokvichkuntheara', 'Sokvichkunthida', 'Sokvichkunthorn', 'Sokvichkunthy', 'Sokvichkunvichet', 'Sokvichkunvuth', 'Sokvichly', 'Sokvichna', 'Sokvichny', 'Sokvichun', 'Sokvichunthea', 'Sokvichuntheary', 'Sokvichuntheara', 'Sokvichunthida', 'Sokvichunthorn', 'Sokvichunthy', 'Sokvichunvichet', 'Sokvichunvuth', 'Sokvichvichet', 'Sokvichvichey', 'Sokvichvichhai', 'Sokvichvichhay', 'Sokvichvichheka', 'Sokvichvichheng', 'Sokvichvichhong', 'Sok', 'Makara', 'Sivei', 'Lyna', 'Janna'];
        $lastNames = ['Pheng', 'Chhouk', 'Soun', 'Meas', 'Sokha', 'Hout', 'Ly', 'Ry', 'Lim', 'Lou', 'Sok', 'Kim', 'Thal', 'Sim', 'Ou','Ang', 'Bo'];
        $locations = [
            'Banteay Meanchey', 'Battambang', 'Kampong Cham', 'Kampong Chhnang', 'Kampong Speu', 
            'Kampong Thom', 'Kampot', 'Kandal', 'Kep', 'Koh Kong', 'Kratie', 'Mondulkiri', 
            'Ottar Meanchey', 'Pailin', 'Phnom Penh', 'Sihanoukville', 'Preah Vihear', 
            'Prey Veng', 'Pursat', 'Ratanakiri', 'Siem Reap', 'Stung Treng', 'Svay Rieng', 
            'Takeo', 'Tboung Khmum'
        ];
        
        // Get all class IDs
        $classIds = MyClass::pluck('id')->toArray();

        // Create 100 random students
        for ($i = 0; $i < $numberOfStudents; $i++) {
            $gender = $genders[array_rand($genders)];
            $firstName = $gender === 'Male' ? $maleNames[array_rand($maleNames)] : $femaleNames[array_rand($femaleNames)];
            $lastName = $lastNames[array_rand($lastNames)];
            $email = strtolower($firstName . '.' . $lastName . Str::random(3) . '@tama.edu.kh');
            
            $address = $locations[array_rand($locations)];
            $state = $locations[array_rand($locations)];
            $city = $locations[array_rand($locations)];
            
            // Generate a random birthday for a primary school student (ages 5 to 11)
            $birthYear = rand(2014, 2019);
            $birthMonth = rand(1, 12);
            $birthDay = rand(1, 28);
            
            // Assign a random blood group
            $bloodGroup = $bloodGroups[array_rand($bloodGroups)];
            
            $user = User::create([
                'name' => "$firstName $lastName",
                'email' => $email,
                'password' => Hash::make('password'),
                'school_id' => 1,
                'address' => $address,
                'birthday' => "$birthYear-$birthMonth-$birthDay",
                'nationality' => 'Khmer',
                'state' => $state,
                'city' => $city,
                'blood_group' => $bloodGroup, // Random blood group
                'email_verified_at' => now(),
                'gender' => $gender,
            ]);
            
            // Assign the 'student' role
            $user->assignRole('student');
            
            // Create a student record for the user
            StudentRecord::create([
                'user_id' => $user->id,
                'my_class_id' => $classIds[array_rand($classIds)],
                'admission_date' => '2023-04-22',
                'is_graduated' => false,
                'admission_number' => 'TPS' . Str::random(5),
            ]);
        }

        $this->command->info("{$numberOfStudents} student records seeded successfully.");
    }
}

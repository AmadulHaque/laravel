<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Seeder;
use Faker\Factory as FakerFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    { 

        $faker = \Faker\Factory::create();


        // Generate dummy data and insert into the database
        for ($i = 0; $i < 50000; $i++) {
            Student::create([
                'firstName' => $faker->unique(true)->firstName,
                'lastName' => $faker->unique(true)->lastName,
                'gender' => $faker->randomElement(['Male', 'Female']),
                'date_of_birth' => $faker->date,
                'roll' => $faker->randomLetter . $faker->unique(true)->randomNumber(3),
                'blood_group' => $faker->unique(true)->randomElement(['A+', 'B+', 'AB+', 'O+', 'A-', 'B-', 'AB-', 'O-']),
                'religion' => $faker->randomElement(['Christian', 'Muslim', 'Hindu', 'Buddhist']),
                'email' => $faker->email,
                'class' => $faker->numberBetween(1, 12),
                'section' => $faker->randomLetter,
                'addmission_id' => 'AD' . $faker->unique(true)->randomNumber(3),
                'phone' => $faker->phoneNumber,
            ]);
        }

    }
}

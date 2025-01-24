<?php

namespace Database\Seeders;

use App\Models\Employee;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        // Disable timestamps
        Employee::unguard();
        Employee::withoutTimestamps(function () use ($faker) {
            for ($i = 0; $i < 10; $i++) {
                Employee::create([
                    'name' => $faker->name,
                    'lastname' => $faker->lastName,
                    'company_id' => $faker->numberBetween($min = 1, $max = 10),
                    'phone_number' => $faker->phoneNumber,
                    'email' => $faker->email,
                    'address' => $faker->address,
                    'role' => $faker->jobTitle,
                    'photo' => $faker->imageUrl($width = 640, $height = 480),
                ]);
            }
        });
        Employee::reguard();
    }
}

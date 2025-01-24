<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 10; $i++) {
            Company::create([
                'name' => $faker->company,
                'logo' => $faker->imageUrl($width = 640, $height = 480),
                'P_iva' => $faker->ean13(),
                'phone_number' => $faker->phoneNumber,
                'address' => $faker->address,
                'email' => $faker->email,
                'website' => $faker->url,
            ]);
        }
    }
}

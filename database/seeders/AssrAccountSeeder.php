<?php

namespace Database\Seeders;

use App\Models\AssrAccount;
use Faker\Factory as Faker;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AssrAccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 0; $i < 5; $i++) {
            AssrAccount::create([
                'FirstName' => $faker->firstName(),
                'LastName' => $faker->lastName(),
                'MiddleName' => $faker->firstName(),
                'Birthday' => $faker->date('Y-m-d', '1999-10-04'),
                'Status' => 1,
                'HideBday' => 0,
                'TheBible' => $faker->randomElement([10, 20, 30, 40]),
                'Username' => 'example',
                'password' => Hash::make('password'),
                'Level' => 'Support',
                'Email' => $faker->unique()->safeEmail(),
                'SBV' => $faker->randomElement([0, 1]),
                'SilentMode' => 1,
                'SN' => $faker->numberBetween(1, 100),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}

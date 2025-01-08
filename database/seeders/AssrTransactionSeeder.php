<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class AssrTransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 50; $i++) {
            DB::table('assr_transaction')->insert([
                'Transaction' => $faker->sentence(),
                'Code' => $faker->bothify('???###'),
                'TimesUsed' => $faker->randomFloat(2, 1, 100),
                'created_at' => now(), 
                'updated_at' => now(),
            ]);
        }
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AssrUserLevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $userLevels = [
            ['name' => 'Support', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Administrator', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Validator', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Appraiser', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Printing', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Tax Mapper', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Reporting', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Encoder', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Frontline', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Record', 'created_at' => now(), 'updated_at' => now()],
        ];

        DB::table('assr_user_levels')->insert($userLevels);
    }
}

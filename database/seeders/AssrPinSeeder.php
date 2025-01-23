<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AssrPin;

class AssrPinSeeder extends Seeder
{
    public function run(): void
    {
        $kinds = ['Land', 'Machinery', 'Building', 'Vehicle', 'Equipment'];
        $pins = [];

        for ($i = 0; $i < 400; $i++) {
            $pins[] = [
                'PIN' => sprintf(
                    '%03d-%02d-%03d-%03d-%02d-%04d',
                    rand(100, 999),
                    rand(10, 99),
                    rand(100, 999),
                    rand(100, 999),
                    rand(10, 99),
                    rand(1000, 9999)
                ),
                'Location' => fake()->city(),
                'LotNo' => rand(1, 100),
                'BlkNo' => rand(1, 50),
                'SurveyNo' => 'PCS-' . rand(10, 99) . '-' . rand(100000, 999999),
                'Kind' => $kinds[array_rand($kinds)],
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        AssrPin::insert($pins);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\AssrPin;

class AssrPinSeeder extends Seeder
{
    public function run(): void
    {
        $pin = [
            [
                'PIN' => '120-02-019-009-017-2023',
                'Location' => '',
                'LotNo' => '',
                'BlkNo' => '',
                'SurveyNo' => '',
                'Kind' => 'Machinery',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'PIN' => '120-01-0003-038-047',
                'Location' => '',
                'LotNo' => '7',
                'BlkNo' => '71',
                'SurveyNo' => '',
                'Kind' => 'Land',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'PIN' => '120-01-009-032-027',
                'Location' => '',
                'LotNo' => '14',
                'BlkNo' => '6',
                'SurveyNo' => 'PCS-13-000484',
                'Kind' => 'Land',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'PIN' => '120-01-011-035-013-1001-378',
                'Location' => '',
                'LotNo' => '',
                'BlkNo' => '',
                'SurveyNo' => '',
                'Kind' => 'Building',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        foreach ($pin as $pins) {
            AssrPin::create($pins);
        }
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AssrTrackingSeries;

class AssrTrackingSeriesSeeder extends Seeder
{
    public function run(): void
    {
        $seriesData = [
            [
                'Date' => '2023-09-11 00:00:00',
                'DeptCode' => 'ASSR',
                'Series' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'Date' => '2023-10-02 00:00:00',
                'DeptCode' => 'ASSR',
                'Series' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'Date' => '2023-11-06 00:00:00',
                'DeptCode' => 'ASSR',
                'Series' => 21,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'Date' => '2023-11-07 00:00:00',
                'DeptCode' => 'ASSR',
                'Series' => 35,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'Date' => '2023-11-08 00:00:00',
                'DeptCode' => 'ASSR',
                'Series' => 23,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        foreach ($seriesData as $data) {
            AssrTrackingSeries::create($data);
        }
    }
}

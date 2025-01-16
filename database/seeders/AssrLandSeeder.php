<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AssrLand;

class AssrLandSeeder extends Seeder
{
    public function run(): void
    {
        $lands = [
            [
                'TDNo' => 'GL-006-06037',
                'Class' => 'RESIDENTIAL',
                'Area' => 100,
                'Unit_Value' => 700,
                'Adjustment' => 0,
                'Market_Value' => 70000,
                'AU' => 'RESIDENTIAL',
                'AL' => 20,
                'AV' => 14000,
                'Description' => null,
                'Exempt' => 0,
                'SubClass' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'TDNo' => 'GL-006-06035',
                'Class' => 'RESIDENTIAL',
                'Area' => 106,
                'Unit_Value' => 700,
                'Adjustment' => 0,
                'Market_Value' => 74,
                'AU' => 'Residential',
                'AL' => 0,
                'AV' => 0,
                'Description' => null,
                'Exempt' => 0,
                'SubClass' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'TDNo' => 'GL-006-05996',
                'Class' => 'RESIDENTIAL',
                'Area' => 400,
                'Unit_Value' => 2500,
                'Adjustment' => 0,
                'Market_Value' => 1000000,
                'AU' => 'Residential',
                'AL' => 0,
                'AV' => 0,
                'Description' => null,
                'Exempt' => 0,
                'SubClass' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'TDNo' => 'GL-006-06014',
                'Class' => 'RESIDENTIAL',
                'Area' => 66,
                'Unit_Value' => 900,
                'Adjustment' => 0,
                'Market_Value' => 59,
                'AU' => 'RESIDENTIAL',
                'AL' => 0,
                'AV' => 0,
                'Description' => null,
                'Exempt' => 0,
                'SubClass' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'TDNo' => 'GL-006-05939',
                'Class' => 'RES',
                'Area' => 185,
                'Unit_Value' => 2500,
                'Adjustment' => 0,
                'Market_Value' => 462500,
                'AU' => 'RESIDENTIAL',
                'AL' => 20,
                'AV' => 92500,
                'Description' => null,
                'Exempt' => 0,
                'SubClass' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        foreach ($lands as $land) {
            AssrLand::create($land);
        }
    }
}

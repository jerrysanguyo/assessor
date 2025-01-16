<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AssrMachinery;

class AssrMachinerySeeder extends Seeder
{
    public function run(): void
    {
        $machineries = [
            [
                'TDNo' => 'EM-006-01491',
                'Description' => 'MACHINERIES USED FOR THE MANUFACTORING OF LADIES UNDERGARMENTS',
                'Date_Of_Operation' => '2003',
                'Replacement_Cost' => 0,
                'Depreciation' => 0,
                'Market_Value' => 2839497.31,
                'ESL' => null,
                'RoAD' => null,
                'AU' => 'INDUSTRIAL',
                'AL' => 0,
                'AV' => 0,
                'Exempt' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'TDNo' => 'EM-006-01492',
                'Description' => 'MACHINERIES USED FOR THE MANUFACTORING OF LADIES UNDERGARMENTS',
                'Date_Of_Operation' => null,
                'Replacement_Cost' => 0,
                'Depreciation' => 0,
                'Market_Value' => 861071.79,
                'ESL' => null,
                'RoAD' => null,
                'AU' => 'INDUSTRIAL',
                'AL' => 0,
                'AV' => 0,
                'Exempt' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'TDNo' => 'EM-006-01498',
                'Description' => 'GENERATOR SET (MACHINERIES TURNOVER)',
                'Date_Of_Operation' => null,
                'Replacement_Cost' => 0,
                'Depreciation' => 0,
                'Market_Value' => 10960000,
                'ESL' => null,
                'RoAD' => null,
                'AU' => 'INDUSTRIAL',
                'AL' => 0,
                'AV' => 0,
                'Exempt' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'TDNo' => 'EM-017-00036',
                'Description' => 'MACHINERIES USED FOR THE MANUFACTURING OF SAFETY VAULT',
                'Date_Of_Operation' => null,
                'Replacement_Cost' => 1606700,
                'Depreciation' => 0,
                'Market_Value' => 1606700,
                'ESL' => null,
                'RoAD' => null,
                'AU' => 'INDUSTRIAL',
                'AL' => 0,
                'AV' => 0,
                'Exempt' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'TDNo' => 'EM-017-00052',
                'Description' => 'MACHINERIES FOR BATCHING PLANT 2002',
                'Date_Of_Operation' => null,
                'Replacement_Cost' => 1100000,
                'Depreciation' => 0,
                'Market_Value' => 1100000,
                'ESL' => null,
                'RoAD' => null,
                'AU' => 'INDUSTRIAL',
                'AL' => 0,
                'AV' => 0,
                'Exempt' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        foreach ($machineries as $machinery) {
            AssrMachinery::create($machinery);
        }
    }
}

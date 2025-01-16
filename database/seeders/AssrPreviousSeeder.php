<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AssrPrevious;

class AssrPreviousSeeder extends Seeder
{
    public function run(): void
    {
        $previousEntries = [
            [
                'TDNumber' => 'GL-001-00004',
                'prevTDNumber' => 'FL-001-00007',
                'PrevPIDNo' => null,
                'PreviousOwner' => 'SAME NAME',
                'PrevAV' => 86000,
                'year' => null,
                'partOf' => 'ok',
                'temp' => null,
                'Duplicate' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'TDNumber' => 'GL-001-00005',
                'prevTDNumber' => 'FL-001-00008',
                'PrevPIDNo' => null,
                'PreviousOwner' => 'SAME NAME',
                'PrevAV' => 5737600,
                'year' => null,
                'partOf' => 'ok',
                'temp' => null,
                'Duplicate' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'TDNumber' => 'GL-001-00006',
                'prevTDNumber' => 'FL-001-00009',
                'PrevPIDNo' => null,
                'PreviousOwner' => 'SAME NAME',
                'PrevAV' => 7205600,
                'year' => null,
                'partOf' => 'ok',
                'temp' => null,
                'Duplicate' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'TDNumber' => 'GL-001-00007',
                'prevTDNumber' => 'FL-007-00010',
                'PrevPIDNo' => null,
                'PreviousOwner' => 'SAME NAME',
                'PrevAV' => 934400,
                'year' => null,
                'partOf' => 'ok',
                'temp' => null,
                'Duplicate' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'TDNumber' => 'GL-001-00008',
                'prevTDNumber' => 'FL-001-00011',
                'PrevPIDNo' => null,
                'PreviousOwner' => 'SAME NAME',
                'PrevAV' => 810000,
                'year' => null,
                'partOf' => 'ok',
                'temp' => null,
                'Duplicate' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        foreach ($previousEntries as $entry) {
            AssrPrevious::create($entry);
        }
    }
}
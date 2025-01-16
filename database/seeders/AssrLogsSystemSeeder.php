<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AssrLogSystem;

class AssrLogSystemSeeder extends Seeder
{
    public function run(): void
    {
        $logs = [
            [
                'Date' => '2023-01-31 14:29:40',
                'Username' => 'Apollo',
                'Event' => 'Successfully Initialized',
                'PCName' => 'Apollo',
                'PCUsername' => 'Muzika',
                'PCAddress' => '40F2E92C747D',
                'PCIPAddress' => null,
                'DeptCode' => 'ASSR',
                'Branch' => 'Main',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'Date' => '2023-01-31 14:29:41',
                'Username' => 'Apollo',
                'Event' => 'Had signed in.',
                'PCName' => 'Apollo',
                'PCUsername' => 'Muzika',
                'PCAddress' => '40F2E92C747D',
                'PCIPAddress' => null,
                'DeptCode' => 'ASSR',
                'Branch' => 'Main',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'Date' => '2023-01-31 14:30:48',
                'Username' => 'Apollo',
                'Event' => 'Created account Muzika(Active)',
                'PCName' => 'Apollo',
                'PCUsername' => 'Muzika',
                'PCAddress' => '40F2E92C747D',
                'PCIPAddress' => null,
                'DeptCode' => 'ASSR',
                'Branch' => 'Main',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'Date' => '2023-01-31 14:31:18',
                'Username' => 'Apollo',
                'Event' => 'Had signed out',
                'PCName' => 'Apollo',
                'PCUsername' => 'Muzika',
                'PCAddress' => '40F2E92C747D',
                'PCIPAddress' => null,
                'DeptCode' => 'ASSR',
                'Branch' => 'Main',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'Date' => '2023-01-31 14:31:21',
                'Username' => 'Muzika',
                'Event' => 'Had signed in.',
                'PCName' => 'Apollo',
                'PCUsername' => 'Muzika',
                'PCAddress' => '40F2E92C747D',
                'PCIPAddress' => null,
                'DeptCode' => 'ASSR',
                'Branch' => 'Main',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        foreach ($logs as $log) {
            AssrLogSystem::create($log);
        }
    }
}

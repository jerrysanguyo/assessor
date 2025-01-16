<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AssrPreRegistration;

class AssrPreRegistrationSeeder extends Seeder
{
    public function run(): void
    {
        $preRegistrations = [
            [
                'CreationDate' => '2024-03-20 10:04:11',
                'TDNo' => 'EB-019-132863',
                'TrackingNo' => null,
                'Type' => 0,
                'Username' => 'Gabriel',
                'Transaction' => null,
                'TCN' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'CreationDate' => '2024-03-20 10:04:11',
                'TDNo' => 'EB-019-132404',
                'TrackingNo' => null,
                'Type' => 0,
                'Username' => 'Gabriel',
                'Transaction' => null,
                'TCN' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'CreationDate' => '2024-03-20 10:04:11',
                'TDNo' => 'EB-019-133765',
                'TrackingNo' => null,
                'Type' => 0,
                'Username' => 'Gabriel',
                'Transaction' => null,
                'TCN' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'CreationDate' => '2024-03-20 10:04:11',
                'TDNo' => 'EB-019-131977',
                'TrackingNo' => null,
                'Type' => 0,
                'Username' => 'Gabriel',
                'Transaction' => null,
                'TCN' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'CreationDate' => '2024-03-20 10:04:11',
                'TDNo' => 'EB-019-31619',
                'TrackingNo' => null,
                'Type' => 0,
                'Username' => 'Gabriel',
                'Transaction' => null,
                'TCN' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        foreach ($preRegistrations as $registration) {
            AssrPreRegistration::create($registration);
        }
    }
}

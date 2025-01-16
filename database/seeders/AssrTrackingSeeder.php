<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AssrTracking;

class AssrTrackingSeeder extends Seeder
{
    public function run(): void
    {
        $trackings = [
            [
                'Date' => '2023-09-11 16:12:09',
                'TrackingNo' => '2309110412070001',
                'Transaction' => 'New',
                'Applicant' => 'Er',
                'Address' => 'Erwr',
                'Representative' => 'Werw',
                'NoOfTransaction' => 1,
                'NoUsed' => -1,
                'ContactNo' => '123',
                'Username' => 'Yanz',
                'DeptCode' => 'ASSR',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'Date' => '2023-10-02 11:56:58',
                'TrackingNo' => '2310021156550001',
                'Transaction' => 'Gr',
                'Applicant' => 'Qw',
                'Address' => 'Qw',
                'Representative' => 'We',
                'NoOfTransaction' => 1,
                'NoUsed' => 0,
                'ContactNo' => '1231243',
                'Username' => 'Yanz',
                'DeptCode' => 'ASSR',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'Date' => '2023-11-06 08:56:54',
                'TrackingNo' => '2311060856490001',
                'Transaction' => 'Transfer Condo',
                'Applicant' => 'Sps David Peckson',
                'Address' => 'Fort Bonifacio',
                'Representative' => 'David Peckson',
                'NoOfTransaction' => 1,
                'NoUsed' => 0,
                'ContactNo' => '09454548741',
                'Username' => 'Lusaresk',
                'DeptCode' => 'ASSR',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'Date' => '2023-11-06 10:59:54',
                'TrackingNo' => '2311061059520002',
                'Transaction' => 'Encoding',
                'Applicant' => 'Assessor',
                'Address' => 'Taguig',
                'Representative' => '.',
                'NoOfTransaction' => 1000,
                'NoUsed' => 2121,
                'ContactNo' => null,
                'Username' => 'Infanteb',
                'DeptCode' => 'ASSR',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'Date' => '2023-11-06 12:14:05',
                'TrackingNo' => '2311061214020003',
                'Transaction' => 'Segregation',
                'Applicant' => 'Federal Land',
                'Address' => 'Fort Bonifacio',
                'Representative' => '-',
                'NoOfTransaction' => 2500,
                'NoUsed' => 1,
                'ContactNo' => null,
                'Username' => 'Magatj',
                'DeptCode' => 'ASSR',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        foreach ($trackings as $tracking) {
            AssrTracking::create($tracking);
        }
    }
}

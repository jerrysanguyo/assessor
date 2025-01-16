<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AssrTransaction;

class AssrTransactionSeeder extends Seeder
{
    public function run(): void
    {
        $transactions = [
            [
                'Transaction' => 'CHANGE OF BARANGAY AND CHANGE OF STATUS',
                'Code' => 'CCS',
                'TimesUsed' => 14,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'Transaction' => 'Consolidation',
                'Code' => 'C',
                'TimesUsed' => 58,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'Transaction' => 'House Re-assessment/Renovation',
                'Code' => 'HRR',
                'TimesUsed' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'Transaction' => 'Inclusion of PSD/PCS Number',
                'Code' => 'IPN',
                'TimesUsed' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'Transaction' => 'INCLUSION OF TITLE NUMBER AND CHANGE OF BARANGAY AS PER ORD. 67 S 2008',
                'Code' => 'ITN',
                'TimesUsed' => 17,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        foreach ($transactions as $transaction) {
            AssrTransaction::create($transaction);
        }
    }
}

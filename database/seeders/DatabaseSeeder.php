<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $seeders = [
            AssrBarangaySeeder::class,
            AssrUserLevelSeeder::class,
            AssrAccountSeeder::class,
            AssrTransactionSeeder::class,
            AssrPurposeSeeder::class,
            AssrPinSeeder::class,
        ];

        $this->call($seeders);
    }
}

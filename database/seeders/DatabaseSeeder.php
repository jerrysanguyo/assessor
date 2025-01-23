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
            RolesAndPermissions::class,
            AssrAccountSeeder::class,
            AssrBarangaySeeder::class,
            AssrUserLevelSeeder::class,
            AssrTransactionSeeder::class,
            AssrPurposeSeeder::class,
            AssrFeedSeeder::class,
            AssrPinSeeder::class,
            AssrInformationSeeder::class,
            AssrLandSeeder::class,
            AssrLogsUserLoginSeeder::class,
            AssrMachinerySeeder::class,
            AssrPreRegistrationSeeder::class,
            AssrPreviousSeeder::class,
            AssrTrackingSeeder::class,
            AssrTrackingSeriesSeeder::class,
        ];

        $this->call($seeders);
    }
}

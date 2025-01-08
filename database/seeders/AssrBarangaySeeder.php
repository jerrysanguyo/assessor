<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AssrBarangaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $barangays = array(
            array(
                "name" => "BAGUMBAYAN",
                "district" => "01",
            ),
            array(
                "name" => "BAGONG TANYAG",
                "district" => "02",
            ),
            array(
                "name" => "BAMBANG",
                "district" => "01",
            ),
            array(
                "name" => "CALZADA TIPAS",
                "district" => "01",
            ),
            array(
                "name" => "CEMBO",
                "district" => "EMBO",
            ),
            array(
                "name" => "CENTRAL BICUTAN",
                "district" => "02",
            ),
            array(
                "name" => "CENTRAL SIGNAL",
                "district" => "02",
            ),
            array(
                "name" => "COMEMBO",
                "district" => "EMBO",
            ),
            array(
                "name" => "EAST REMBO",
                "district" => "EMBO",
            ),
            array(
                "name" => "FORT BONIFACIO",
                "district" => "02",
            ),
            array(
                "name" => "HAGONOY",
                "district" => "01",
            ),
            array(
                "name" => "IBAYO TIPAS",
                "district" => "01",
            ),
            array(
                "name" => "KATUPARAN",
                "district" => "02",
            ),
            array(
                "name" => "LIGID TIPAS",
                "district" => "01",
            ),
            array(
                "name" => "LOWER BICUTAN",
                "district" => "01",
            ),
            array(
                "name" => "MAHARLIKA",
                "district" => "02",
            ),
            array(
                "name" => "NAPINDAN",
                "district" => "01",
            ),
            array(
                "name" => "NEW LOWER BICUTAN",
                "district" => "01",
            ),
            array(
                "name" => "NORTH DAANGHARI",
                "district" => "02",
            ),
            array(
                "name" => "NORTH SIGNAL",
                "district" => "02",
            ),
            array(
                "name" => "PALINGON TIPAS",
                "district" => "01",
            ),
            array(
                "name" => "PEMBO",
                "district" => "EMBO",
            ),
            array(
                "name" => "PINAGSAMA",
                "district" => "02",
            ),
            array(
                "name" => "PITOGO",
                "district" => "EMBO",
            ),
            array(
                "name" => "POST PROPER NORTHSIDE",
                "district" => "EMBO",
            ),
            array(
                "name" => "POST PROPER SOUTHSIDE",
                "district" => "EMBO",
            ),
            array(
                "name" => "RIZAL",
                "district" => "EMBO",
            ),
            array(
                "name" => "SAN MIGUEL",
                "district" => "01",
            ),
            array(
                "name" => "STA. ANA",
                "district" => "01",
            ),
            array(
                "name" => "SOUTH CEMBO",
                "district" => "EMBO",
            ),
            array(
                "name" => "SOUTH DAANGHARI",
                "district" => "EMBO",
            ),
            array(
                "name" => "SOUTH SIGNAL",
                "district" => "02",
            ),
            array(
                "name" => "TUKTUKAN",
                "district" => "01",
            ),
            array(
                "name" => "UPPER BICUTAN",
                "district" => "02",
            ),
            array(
                "name" => "USUSAN",
                "district" => "01",
            ),
            array(
                "name" => "WAWA",
                "district" => "01",
            ),
            array(
                "name" => "WESTERN BICUTAN",
                "district" => "02",
            ),
            array(
                "name" => "WEST REMBO",
                "district" => "EMBO",
            ),
        );

        foreach ($barangays as $barangay) {
            DB::table('assr_barangays')->insert([
                'name' => $barangay['name'],
                'district' => $barangay['district'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}

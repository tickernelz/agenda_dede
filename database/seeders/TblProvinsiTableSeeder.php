<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TblProvinsiTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('tbl_provinsi')->delete();

        \DB::table('tbl_provinsi')->insert(array(
            0 =>
                array(
                    'id' => 1,
                    'kode_prv' => '11',
                    'nama' => 'ACEH',
                ),
            1 =>
                array(
                    'id' => 2,
                    'kode_prv' => '12',
                    'nama' => 'SUMATERA UTARA',
                ),
            2 =>
                array(
                    'id' => 3,
                    'kode_prv' => '13',
                    'nama' => 'SUMATERA BARAT',
                ),
            3 =>
                array(
                    'id' => 4,
                    'kode_prv' => '14',
                    'nama' => 'RIAU',
                ),
            4 =>
                array(
                    'id' => 5,
                    'kode_prv' => '15',
                    'nama' => 'JAMBI',
                ),
            5 =>
                array(
                    'id' => 6,
                    'kode_prv' => '16',
                    'nama' => 'SUMATERA SELATAN',
                ),
            6 =>
                array(
                    'id' => 7,
                    'kode_prv' => '17',
                    'nama' => 'BENGKULU',
                ),
            7 =>
                array(
                    'id' => 8,
                    'kode_prv' => '18',
                    'nama' => 'LAMPUNG',
                ),
            8 =>
                array(
                    'id' => 9,
                    'kode_prv' => '19',
                    'nama' => 'KEPULAUAN BANGKA BELITUNG',
                ),
            9 =>
                array(
                    'id' => 10,
                    'kode_prv' => '21',
                    'nama' => 'KEPULAUAN RIAU',
                ),
            10 =>
                array(
                    'id' => 11,
                    'kode_prv' => '31',
                    'nama' => 'DKI JAKARTA',
                ),
            11 =>
                array(
                    'id' => 12,
                    'kode_prv' => '32',
                    'nama' => 'JAWA BARAT',
                ),
            12 =>
                array(
                    'id' => 13,
                    'kode_prv' => '33',
                    'nama' => 'JAWA TENGAH',
                ),
            13 =>
                array(
                    'id' => 14,
                    'kode_prv' => '34',
                    'nama' => 'DAERAH ISTIMEWA YOGYAKARTA',
                ),
            14 =>
                array(
                    'id' => 15,
                    'kode_prv' => '35',
                    'nama' => 'JAWA TIMUR',
                ),
            15 =>
                array(
                    'id' => 16,
                    'kode_prv' => '36',
                    'nama' => 'BANTEN',
                ),
            16 =>
                array(
                    'id' => 17,
                    'kode_prv' => '51',
                    'nama' => 'BALI',
                ),
            17 =>
                array(
                    'id' => 18,
                    'kode_prv' => '52',
                    'nama' => 'NUSA TENGGARA BARAT',
                ),
            18 =>
                array(
                    'id' => 19,
                    'kode_prv' => '53',
                    'nama' => 'NUSA TENGGARA TIMUR',
                ),
            19 =>
                array(
                    'id' => 20,
                    'kode_prv' => '61',
                    'nama' => 'KALIMANTAN BARAT',
                ),
            20 =>
                array(
                    'id' => 21,
                    'kode_prv' => '62',
                    'nama' => 'KALIMANTAN TENGAH',
                ),
            21 =>
                array(
                    'id' => 22,
                    'kode_prv' => '63',
                    'nama' => 'KALIMANTAN SELATAN',
                ),
            22 =>
                array(
                    'id' => 23,
                    'kode_prv' => '64',
                    'nama' => 'KALIMANTAN TIMUR',
                ),
            23 =>
                array(
                    'id' => 24,
                    'kode_prv' => '65',
                    'nama' => 'KALIMANTAN UTARA',
                ),
            24 =>
                array(
                    'id' => 25,
                    'kode_prv' => '71',
                    'nama' => 'SULAWESI UTARA',
                ),
            25 =>
                array(
                    'id' => 26,
                    'kode_prv' => '72',
                    'nama' => 'SULAWESI TENGAH',
                ),
            26 =>
                array(
                    'id' => 27,
                    'kode_prv' => '73',
                    'nama' => 'SULAWESI SELATAN',
                ),
            27 =>
                array(
                    'id' => 28,
                    'kode_prv' => '74',
                    'nama' => 'SULAWESI TENGGARA',
                ),
            28 =>
                array(
                    'id' => 29,
                    'kode_prv' => '75',
                    'nama' => 'GORONTALO',
                ),
            29 =>
                array(
                    'id' => 30,
                    'kode_prv' => '76',
                    'nama' => 'SULAWESI BARAT',
                ),
            30 =>
                array(
                    'id' => 31,
                    'kode_prv' => '81',
                    'nama' => 'MALUKU',
                ),
            31 =>
                array(
                    'id' => 32,
                    'kode_prv' => '82',
                    'nama' => 'MALUKU UTARA',
                ),
            32 =>
                array(
                    'id' => 33,
                    'kode_prv' => '91',
                    'nama' => 'PAPUA',
                ),
            33 =>
                array(
                    'id' => 34,
                    'kode_prv' => '92',
                    'nama' => 'PAPUA BARAT',
                ),
        ));


    }
}

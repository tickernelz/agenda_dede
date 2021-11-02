<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TblKabupatenTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('tbl_kabupaten')->delete();

        \DB::table('tbl_kabupaten')->insert(array(
            0 =>
                array(
                    'kode_prv' => '11',
                    'kode_kab' => '11.01',
                    'nama' => 'KAB. ACEH SELATAN',
                ),
            1 =>
                array(
                    'kode_prv' => '11',
                    'kode_kab' => '11.02',
                    'nama' => 'KAB. ACEH TENGGARA',
                ),
            2 =>
                array(
                    'kode_prv' => '11',
                    'kode_kab' => '11.03',
                    'nama' => 'KAB. ACEH TIMUR',
                ),
            3 =>
                array(
                    'kode_prv' => '11',
                    'kode_kab' => '11.04',
                    'nama' => 'KAB. ACEH TENGAH',
                ),
            4 =>
                array(
                    'kode_prv' => '11',
                    'kode_kab' => '11.05',
                    'nama' => 'KAB. ACEH BARAT',
                ),
            5 =>
                array(
                    'kode_prv' => '11',
                    'kode_kab' => '11.06',
                    'nama' => 'KAB. ACEH BESAR',
                ),
            6 =>
                array(
                    'kode_prv' => '11',
                    'kode_kab' => '11.07',
                    'nama' => 'KAB. PIDIE',
                ),
            7 =>
                array(
                    'kode_prv' => '11',
                    'kode_kab' => '11.08',
                    'nama' => 'KAB. ACEH UTARA',
                ),
            8 =>
                array(
                    'kode_prv' => '11',
                    'kode_kab' => '11.09',
                    'nama' => 'KAB. SIMEULUE',
                ),
            9 =>
                array(
                    'kode_prv' => '11',
                    'kode_kab' => '11.10',
                    'nama' => 'KAB. ACEH SINGKIL',
                ),
            10 =>
                array(
                    'kode_prv' => '11',
                    'kode_kab' => '11.11',
                    'nama' => 'KAB. BIREUEN',
                ),
            11 =>
                array(
                    'kode_prv' => '11',
                    'kode_kab' => '11.12',
                    'nama' => 'KAB. ACEH BARAT DAYA',
                ),
            12 =>
                array(
                    'kode_prv' => '11',
                    'kode_kab' => '11.13',
                    'nama' => 'KAB. GAYO LUES',
                ),
            13 =>
                array(
                    'kode_prv' => '11',
                    'kode_kab' => '11.14',
                    'nama' => 'KAB. ACEH JAYA',
                ),
            14 =>
                array(
                    'kode_prv' => '11',
                    'kode_kab' => '11.15',
                    'nama' => 'KAB. NAGAN RAYA',
                ),
            15 =>
                array(
                    'kode_prv' => '11',
                    'kode_kab' => '11.16',
                    'nama' => 'KAB. ACEH TAMIANG',
                ),
            16 =>
                array(
                    'kode_prv' => '11',
                    'kode_kab' => '11.17',
                    'nama' => 'KAB. BENER MERIAH',
                ),
            17 =>
                array(
                    'kode_prv' => '11',
                    'kode_kab' => '11.18',
                    'nama' => 'KAB. PIDIE JAYA',
                ),
            18 =>
                array(
                    'kode_prv' => '11',
                    'kode_kab' => '11.71',
                    'nama' => 'KOTA BANDA ACEH',
                ),
            19 =>
                array(
                    'kode_prv' => '11',
                    'kode_kab' => '11.72',
                    'nama' => 'KOTA SABANG',
                ),
            20 =>
                array(
                    'kode_prv' => '11',
                    'kode_kab' => '11.73',
                    'nama' => 'KOTA LHOKSEUMAWE',
                ),
            21 =>
                array(
                    'kode_prv' => '11',
                    'kode_kab' => '11.74',
                    'nama' => 'KOTA LANGSA',
                ),
            22 =>
                array(
                    'kode_prv' => '11',
                    'kode_kab' => '11.75',
                    'nama' => 'KOTA SUBULUSSALAM',
                ),
            23 =>
                array(
                    'kode_prv' => '12',
                    'kode_kab' => '12.01',
                    'nama' => 'KAB. TAPANULI TENGAH',
                ),
            24 =>
                array(
                    'kode_prv' => '12',
                    'kode_kab' => '12.02',
                    'nama' => 'KAB. TAPANULI UTARA',
                ),
            25 =>
                array(
                    'kode_prv' => '12',
                    'kode_kab' => '12.03',
                    'nama' => 'KAB. TAPANULI SELATAN',
                ),
            26 =>
                array(
                    'kode_prv' => '12',
                    'kode_kab' => '12.04',
                    'nama' => 'KAB. NIAS',
                ),
            27 =>
                array(
                    'kode_prv' => '12',
                    'kode_kab' => '12.05',
                    'nama' => 'KAB. LANGKAT',
                ),
            28 =>
                array(
                    'kode_prv' => '12',
                    'kode_kab' => '12.06',
                    'nama' => 'KAB. KARO',
                ),
            29 =>
                array(
                    'kode_prv' => '12',
                    'kode_kab' => '12.07',
                    'nama' => 'KAB. DELI SERDANG',
                ),
            30 =>
                array(
                    'kode_prv' => '12',
                    'kode_kab' => '12.08',
                    'nama' => 'KAB. SIMALUNGUN',
                ),
            31 =>
                array(
                    'kode_prv' => '12',
                    'kode_kab' => '12.09',
                    'nama' => 'KAB. ASAHAN',
                ),
            32 =>
                array(
                    'kode_prv' => '12',
                    'kode_kab' => '12.10',
                    'nama' => 'KAB. LABUHANBATU',
                ),
            33 =>
                array(
                    'kode_prv' => '12',
                    'kode_kab' => '12.11',
                    'nama' => 'KAB. DAIRI',
                ),
            34 =>
                array(
                    'kode_prv' => '12',
                    'kode_kab' => '12.12',
                    'nama' => 'KAB. TOBA SAMOSIR',
                ),
            35 =>
                array(
                    'kode_prv' => '12',
                    'kode_kab' => '12.13',
                    'nama' => 'KAB. MANDAILING NATAL',
                ),
            36 =>
                array(
                    'kode_prv' => '12',
                    'kode_kab' => '12.14',
                    'nama' => 'KAB. NIAS SELATAN',
                ),
            37 =>
                array(
                    'kode_prv' => '12',
                    'kode_kab' => '12.15',
                    'nama' => 'KAB. PAKPAK BHARAT',
                ),
            38 =>
                array(
                    'kode_prv' => '12',
                    'kode_kab' => '12.16',
                    'nama' => 'KAB. HUMBANG HASUNDUTAN',
                ),
            39 =>
                array(
                    'kode_prv' => '12',
                    'kode_kab' => '12.17',
                    'nama' => 'KAB. SAMOSIR',
                ),
            40 =>
                array(
                    'kode_prv' => '12',
                    'kode_kab' => '12.18',
                    'nama' => 'KAB. SERDANG BEDAGAI',
                ),
            41 =>
                array(
                    'kode_prv' => '12',
                    'kode_kab' => '12.19',
                    'nama' => 'KAB. BATU BARA',
                ),
            42 =>
                array(
                    'kode_prv' => '12',
                    'kode_kab' => '12.20',
                    'nama' => 'KAB. PADANG LAWAS UTARA',
                ),
            43 =>
                array(
                    'kode_prv' => '12',
                    'kode_kab' => '12.21',
                    'nama' => 'KAB. PADANG LAWAS',
                ),
            44 =>
                array(
                    'kode_prv' => '12',
                    'kode_kab' => '12.22',
                    'nama' => 'KAB. LABUHANBATU SELATAN',
                ),
            45 =>
                array(
                    'kode_prv' => '12',
                    'kode_kab' => '12.23',
                    'nama' => 'KAB. LABUHANBATU UTARA',
                ),
            46 =>
                array(
                    'kode_prv' => '12',
                    'kode_kab' => '12.24',
                    'nama' => 'KAB. NIAS UTARA',
                ),
            47 =>
                array(
                    'kode_prv' => '12',
                    'kode_kab' => '12.25',
                    'nama' => 'KAB. NIAS BARAT',
                ),
            48 =>
                array(
                    'kode_prv' => '12',
                    'kode_kab' => '12.71',
                    'nama' => 'KOTA MEDAN',
                ),
            49 =>
                array(
                    'kode_prv' => '12',
                    'kode_kab' => '12.72',
                    'nama' => 'KOTA PEMATANGSIANTAR',
                ),
            50 =>
                array(
                    'kode_prv' => '12',
                    'kode_kab' => '12.73',
                    'nama' => 'KOTA SIBOLGA',
                ),
            51 =>
                array(
                    'kode_prv' => '12',
                    'kode_kab' => '12.74',
                    'nama' => 'KOTA TANJUNG BALAI',
                ),
            52 =>
                array(
                    'kode_prv' => '12',
                    'kode_kab' => '12.75',
                    'nama' => 'KOTA BINJAI',
                ),
            53 =>
                array(
                    'kode_prv' => '12',
                    'kode_kab' => '12.76',
                    'nama' => 'KOTA TEBING TINGGI',
                ),
            54 =>
                array(
                    'kode_prv' => '12',
                    'kode_kab' => '12.77',
                    'nama' => 'KOTA PADANGSIDIMPUAN',
                ),
            55 =>
                array(
                    'kode_prv' => '12',
                    'kode_kab' => '12.78',
                    'nama' => 'KOTA GUNUNGSITOLI',
                ),
            56 =>
                array(
                    'kode_prv' => '13',
                    'kode_kab' => '13.01',
                    'nama' => 'KAB. PESISIR SELATAN',
                ),
            57 =>
                array(
                    'kode_prv' => '13',
                    'kode_kab' => '13.02',
                    'nama' => 'KAB. SOLOK',
                ),
            58 =>
                array(
                    'kode_prv' => '13',
                    'kode_kab' => '13.03',
                    'nama' => 'KAB. SIJUNJUNG',
                ),
            59 =>
                array(
                    'kode_prv' => '13',
                    'kode_kab' => '13.04',
                    'nama' => 'KAB. TANAH DATAR',
                ),
            60 =>
                array(
                    'kode_prv' => '13',
                    'kode_kab' => '13.05',
                    'nama' => 'KAB. PADANG PARIAMAN',
                ),
            61 =>
                array(
                    'kode_prv' => '13',
                    'kode_kab' => '13.06',
                    'nama' => 'KAB. AGAM',
                ),
            62 =>
                array(
                    'kode_prv' => '13',
                    'kode_kab' => '13.07',
                    'nama' => 'KAB. LIMA PULUH KOTA',
                ),
            63 =>
                array(
                    'kode_prv' => '13',
                    'kode_kab' => '13.08',
                    'nama' => 'KAB. PASAMAN',
                ),
            64 =>
                array(
                    'kode_prv' => '13',
                    'kode_kab' => '13.09',
                    'nama' => 'KAB. KEPULAUAN MENTAWAI',
                ),
            65 =>
                array(
                    'kode_prv' => '13',
                    'kode_kab' => '13.10',
                    'nama' => 'KAB. DHARMASRAYA',
                ),
            66 =>
                array(
                    'kode_prv' => '13',
                    'kode_kab' => '13.11',
                    'nama' => 'KAB. SOLOK SELATAN',
                ),
            67 =>
                array(
                    'kode_prv' => '13',
                    'kode_kab' => '13.12',
                    'nama' => 'KAB. PASAMAN BARAT',
                ),
            68 =>
                array(
                    'kode_prv' => '13',
                    'kode_kab' => '13.71',
                    'nama' => 'KOTA PADANG',
                ),
            69 =>
                array(
                    'kode_prv' => '13',
                    'kode_kab' => '13.72',
                    'nama' => 'KOTA SOLOK',
                ),
            70 =>
                array(
                    'kode_prv' => '13',
                    'kode_kab' => '13.73',
                    'nama' => 'KOTA SAWAHLUNTO',
                ),
            71 =>
                array(
                    'kode_prv' => '13',
                    'kode_kab' => '13.74',
                    'nama' => 'KOTA PADANG PANJANG',
                ),
            72 =>
                array(
                    'kode_prv' => '13',
                    'kode_kab' => '13.75',
                    'nama' => 'KOTA BUKITTINGGI',
                ),
            73 =>
                array(
                    'kode_prv' => '13',
                    'kode_kab' => '13.76',
                    'nama' => 'KOTA PAYAKUMBUH',
                ),
            74 =>
                array(
                    'kode_prv' => '13',
                    'kode_kab' => '13.77',
                    'nama' => 'KOTA PARIAMAN',
                ),
            75 =>
                array(
                    'kode_prv' => '14',
                    'kode_kab' => '14.01',
                    'nama' => 'KAB. KAMPAR',
                ),
            76 =>
                array(
                    'kode_prv' => '14',
                    'kode_kab' => '14.02',
                    'nama' => 'KAB. INDRAGIRI HULU',
                ),
            77 =>
                array(
                    'kode_prv' => '14',
                    'kode_kab' => '14.03',
                    'nama' => 'KAB. BENGKALIS',
                ),
            78 =>
                array(
                    'kode_prv' => '14',
                    'kode_kab' => '14.04',
                    'nama' => 'KAB. INDRAGIRI HILIR',
                ),
            79 =>
                array(
                    'kode_prv' => '14',
                    'kode_kab' => '14.05',
                    'nama' => 'KAB. PELALAWAN',
                ),
            80 =>
                array(
                    'kode_prv' => '14',
                    'kode_kab' => '14.06',
                    'nama' => 'KAB. ROKAN HULU',
                ),
            81 =>
                array(
                    'kode_prv' => '14',
                    'kode_kab' => '14.07',
                    'nama' => 'KAB. ROKAN HILIR',
                ),
            82 =>
                array(
                    'kode_prv' => '14',
                    'kode_kab' => '14.08',
                    'nama' => 'KAB. SIAK',
                ),
            83 =>
                array(
                    'kode_prv' => '14',
                    'kode_kab' => '14.09',
                    'nama' => 'KAB. KUANTAN SINGINGI',
                ),
            84 =>
                array(
                    'kode_prv' => '14',
                    'kode_kab' => '14.10',
                    'nama' => 'KAB. KEPULAUAN MERANTI',
                ),
            85 =>
                array(
                    'kode_prv' => '14',
                    'kode_kab' => '14.71',
                    'nama' => 'KOTA PEKANBARU',
                ),
            86 =>
                array(
                    'kode_prv' => '14',
                    'kode_kab' => '14.72',
                    'nama' => 'KOTA DUMAI',
                ),
            87 =>
                array(
                    'kode_prv' => '15',
                    'kode_kab' => '15.01',
                    'nama' => 'KAB. KERINCI',
                ),
            88 =>
                array(
                    'kode_prv' => '15',
                    'kode_kab' => '15.02',
                    'nama' => 'KAB. MERANGIN',
                ),
            89 =>
                array(
                    'kode_prv' => '15',
                    'kode_kab' => '15.03',
                    'nama' => 'KAB. SAROLANGUN',
                ),
            90 =>
                array(
                    'kode_prv' => '15',
                    'kode_kab' => '15.04',
                    'nama' => 'KAB. BATANGHARI',
                ),
            91 =>
                array(
                    'kode_prv' => '15',
                    'kode_kab' => '15.05',
                    'nama' => 'KAB. MUARO JAMBI',
                ),
            92 =>
                array(
                    'kode_prv' => '15',
                    'kode_kab' => '15.06',
                    'nama' => 'KAB. TANJUNG JABUNG BARAT',
                ),
            93 =>
                array(
                    'kode_prv' => '15',
                    'kode_kab' => '15.07',
                    'nama' => 'KAB. TANJUNG JABUNG TIMUR',
                ),
            94 =>
                array(
                    'kode_prv' => '15',
                    'kode_kab' => '15.08',
                    'nama' => 'KAB. BUNGO',
                ),
            95 =>
                array(
                    'kode_prv' => '15',
                    'kode_kab' => '15.09',
                    'nama' => 'KAB. TEBO',
                ),
            96 =>
                array(
                    'kode_prv' => '15',
                    'kode_kab' => '15.71',
                    'nama' => 'KOTA JAMBI',
                ),
            97 =>
                array(
                    'kode_prv' => '15',
                    'kode_kab' => '15.72',
                    'nama' => 'KOTA SUNGAI PENUH',
                ),
            98 =>
                array(
                    'kode_prv' => '16',
                    'kode_kab' => '16.01',
                    'nama' => 'KAB. OGAN KOMERING ULU',
                ),
            99 =>
                array(
                    'kode_prv' => '16',
                    'kode_kab' => '16.02',
                    'nama' => 'KAB. OGAN KOMERING ILIR',
                ),
            100 =>
                array(
                    'kode_prv' => '16',
                    'kode_kab' => '16.03',
                    'nama' => 'KAB. MUARA ENIM',
                ),
            101 =>
                array(
                    'kode_prv' => '16',
                    'kode_kab' => '16.04',
                    'nama' => 'KAB. LAHAT',
                ),
            102 =>
                array(
                    'kode_prv' => '16',
                    'kode_kab' => '16.05',
                    'nama' => 'KAB. MUSI RAWAS',
                ),
            103 =>
                array(
                    'kode_prv' => '16',
                    'kode_kab' => '16.06',
                    'nama' => 'KAB. MUSI BANYUASIN',
                ),
            104 =>
                array(
                    'kode_prv' => '16',
                    'kode_kab' => '16.07',
                    'nama' => 'KAB. BANYUASIN',
                ),
            105 =>
                array(
                    'kode_prv' => '16',
                    'kode_kab' => '16.08',
                    'nama' => 'KAB. OGAN KOMERING ULU TIMUR',
                ),
            106 =>
                array(
                    'kode_prv' => '16',
                    'kode_kab' => '16.09',
                    'nama' => 'KAB. OGAN KOMERING ULU SELATAN',
                ),
            107 =>
                array(
                    'kode_prv' => '16',
                    'kode_kab' => '16.10',
                    'nama' => 'KAB. OGAN ILIR',
                ),
            108 =>
                array(
                    'kode_prv' => '16',
                    'kode_kab' => '16.11',
                    'nama' => 'KAB. EMPAT LAWANG',
                ),
            109 =>
                array(
                    'kode_prv' => '16',
                    'kode_kab' => '16.12',
                    'nama' => 'KAB. PENUKAL ABAB LEMATANG ILIR',
                ),
            110 =>
                array(
                    'kode_prv' => '16',
                    'kode_kab' => '16.13',
                    'nama' => 'KAB. MUSI RAWAS UTARA',
                ),
            111 =>
                array(
                    'kode_prv' => '16',
                    'kode_kab' => '16.71',
                    'nama' => 'KOTA PALEMBANG',
                ),
            112 =>
                array(
                    'kode_prv' => '16',
                    'kode_kab' => '16.72',
                    'nama' => 'KOTA PAGAR ALAM',
                ),
            113 =>
                array(
                    'kode_prv' => '16',
                    'kode_kab' => '16.73',
                    'nama' => 'KOTA LUBUK LINGGAU',
                ),
            114 =>
                array(
                    'kode_prv' => '16',
                    'kode_kab' => '16.74',
                    'nama' => 'KOTA PRABUMULIH',
                ),
            115 =>
                array(
                    'kode_prv' => '17',
                    'kode_kab' => '17.01',
                    'nama' => 'KAB. BENGKULU SELATAN',
                ),
            116 =>
                array(
                    'kode_prv' => '17',
                    'kode_kab' => '17.02',
                    'nama' => 'KAB. REJANG LEBONG',
                ),
            117 =>
                array(
                    'kode_prv' => '17',
                    'kode_kab' => '17.03',
                    'nama' => 'KAB. BENGKULU UTARA',
                ),
            118 =>
                array(
                    'kode_prv' => '17',
                    'kode_kab' => '17.04',
                    'nama' => 'KAB. KAUR',
                ),
            119 =>
                array(
                    'kode_prv' => '17',
                    'kode_kab' => '17.05',
                    'nama' => 'KAB. SELUMA',
                ),
            120 =>
                array(
                    'kode_prv' => '17',
                    'kode_kab' => '17.06',
                    'nama' => 'KAB. MUKO MUKO',
                ),
            121 =>
                array(
                    'kode_prv' => '17',
                    'kode_kab' => '17.07',
                    'nama' => 'KAB. LEBONG',
                ),
            122 =>
                array(
                    'kode_prv' => '17',
                    'kode_kab' => '17.08',
                    'nama' => 'KAB. KEPAHIANG',
                ),
            123 =>
                array(
                    'kode_prv' => '17',
                    'kode_kab' => '17.09',
                    'nama' => 'KAB. BENGKULU TENGAH',
                ),
            124 =>
                array(
                    'kode_prv' => '17',
                    'kode_kab' => '17.71',
                    'nama' => 'KOTA BENGKULU',
                ),
            125 =>
                array(
                    'kode_prv' => '18',
                    'kode_kab' => '18.01',
                    'nama' => 'KAB. LAMPUNG SELATAN',
                ),
            126 =>
                array(
                    'kode_prv' => '18',
                    'kode_kab' => '18.02',
                    'nama' => 'KAB. LAMPUNG TENGAH',
                ),
            127 =>
                array(
                    'kode_prv' => '18',
                    'kode_kab' => '18.03',
                    'nama' => 'KAB. LAMPUNG UTARA',
                ),
            128 =>
                array(
                    'kode_prv' => '18',
                    'kode_kab' => '18.04',
                    'nama' => 'KAB. LAMPUNG BARAT',
                ),
            129 =>
                array(
                    'kode_prv' => '18',
                    'kode_kab' => '18.05',
                    'nama' => 'KAB. TULANG BAWANG',
                ),
            130 =>
                array(
                    'kode_prv' => '18',
                    'kode_kab' => '18.06',
                    'nama' => 'KAB. TANGGAMUS',
                ),
            131 =>
                array(
                    'kode_prv' => '18',
                    'kode_kab' => '18.07',
                    'nama' => 'KAB. LAMPUNG TIMUR',
                ),
            132 =>
                array(
                    'kode_prv' => '18',
                    'kode_kab' => '18.08',
                    'nama' => 'KAB. WAY KANAN',
                ),
            133 =>
                array(
                    'kode_prv' => '18',
                    'kode_kab' => '18.09',
                    'nama' => 'KAB. PESAWARAN',
                ),
            134 =>
                array(
                    'kode_prv' => '18',
                    'kode_kab' => '18.10',
                    'nama' => 'KAB. PRINGSEWU',
                ),
            135 =>
                array(
                    'kode_prv' => '18',
                    'kode_kab' => '18.11',
                    'nama' => 'KAB. MESUJI',
                ),
            136 =>
                array(
                    'kode_prv' => '18',
                    'kode_kab' => '18.12',
                    'nama' => 'KAB. TULANG BAWANG BARAT',
                ),
            137 =>
                array(
                    'kode_prv' => '18',
                    'kode_kab' => '18.13',
                    'nama' => 'KAB. PESISIR BARAT',
                ),
            138 =>
                array(
                    'kode_prv' => '18',
                    'kode_kab' => '18.71',
                    'nama' => 'KOTA BANDAR LAMPUNG',
                ),
            139 =>
                array(
                    'kode_prv' => '18',
                    'kode_kab' => '18.72',
                    'nama' => 'KOTA METRO',
                ),
            140 =>
                array(
                    'kode_prv' => '19',
                    'kode_kab' => '19.01',
                    'nama' => 'KAB. BANGKA',
                ),
            141 =>
                array(
                    'kode_prv' => '19',
                    'kode_kab' => '19.02',
                    'nama' => 'KAB. BELITUNG',
                ),
            142 =>
                array(
                    'kode_prv' => '19',
                    'kode_kab' => '19.03',
                    'nama' => 'KAB. BANGKA SELATAN',
                ),
            143 =>
                array(
                    'kode_prv' => '19',
                    'kode_kab' => '19.04',
                    'nama' => 'KAB. BANGKA TENGAH',
                ),
            144 =>
                array(
                    'kode_prv' => '19',
                    'kode_kab' => '19.05',
                    'nama' => 'KAB. BANGKA BARAT',
                ),
            145 =>
                array(
                    'kode_prv' => '19',
                    'kode_kab' => '19.06',
                    'nama' => 'KAB. BELITUNG TIMUR',
                ),
            146 =>
                array(
                    'kode_prv' => '19',
                    'kode_kab' => '19.71',
                    'nama' => 'KOTA PANGKAL PINANG',
                ),
            147 =>
                array(
                    'kode_prv' => '21',
                    'kode_kab' => '21.01',
                    'nama' => 'KAB. BINTAN',
                ),
            148 =>
                array(
                    'kode_prv' => '21',
                    'kode_kab' => '21.02',
                    'nama' => 'KAB. KARIMUN',
                ),
            149 =>
                array(
                    'kode_prv' => '21',
                    'kode_kab' => '21.03',
                    'nama' => 'KAB. NATUNA',
                ),
            150 =>
                array(
                    'kode_prv' => '21',
                    'kode_kab' => '21.04',
                    'nama' => 'KAB. LINGGA',
                ),
            151 =>
                array(
                    'kode_prv' => '21',
                    'kode_kab' => '21.05',
                    'nama' => 'KAB. KEPULAUAN ANAMBAS',
                ),
            152 =>
                array(
                    'kode_prv' => '21',
                    'kode_kab' => '21.71',
                    'nama' => 'KOTA BATAM',
                ),
            153 =>
                array(
                    'kode_prv' => '21',
                    'kode_kab' => '21.72',
                    'nama' => 'KOTA TANJUNG PINANG',
                ),
            154 =>
                array(
                    'kode_prv' => '31',
                    'kode_kab' => '31.01',
                    'nama' => 'KAB. ADM. KEP. SERIBU',
                ),
            155 =>
                array(
                    'kode_prv' => '31',
                    'kode_kab' => '31.71',
                    'nama' => 'KOTA ADM. JAKARTA PUSAT',
                ),
            156 =>
                array(
                    'kode_prv' => '31',
                    'kode_kab' => '31.72',
                    'nama' => 'KOTA ADM. JAKARTA UTARA',
                ),
            157 =>
                array(
                    'kode_prv' => '31',
                    'kode_kab' => '31.73',
                    'nama' => 'KOTA ADM. JAKARTA BARAT',
                ),
            158 =>
                array(
                    'kode_prv' => '31',
                    'kode_kab' => '31.74',
                    'nama' => 'KOTA ADM. JAKARTA SELATAN',
                ),
            159 =>
                array(
                    'kode_prv' => '31',
                    'kode_kab' => '31.75',
                    'nama' => 'KOTA ADM. JAKARTA TIMUR',
                ),
            160 =>
                array(
                    'kode_prv' => '32',
                    'kode_kab' => '32.01',
                    'nama' => 'KAB. BOGOR',
                ),
            161 =>
                array(
                    'kode_prv' => '32',
                    'kode_kab' => '32.02',
                    'nama' => 'KAB. SUKABUMI',
                ),
            162 =>
                array(
                    'kode_prv' => '32',
                    'kode_kab' => '32.03',
                    'nama' => 'KAB. CIANJUR',
                ),
            163 =>
                array(
                    'kode_prv' => '32',
                    'kode_kab' => '32.04',
                    'nama' => 'KAB. BANDUNG',
                ),
            164 =>
                array(
                    'kode_prv' => '32',
                    'kode_kab' => '32.05',
                    'nama' => 'KAB. GARUT',
                ),
            165 =>
                array(
                    'kode_prv' => '32',
                    'kode_kab' => '32.06',
                    'nama' => 'KAB. TASIKMALAYA',
                ),
            166 =>
                array(
                    'kode_prv' => '32',
                    'kode_kab' => '32.07',
                    'nama' => 'KAB. CIAMIS',
                ),
            167 =>
                array(
                    'kode_prv' => '32',
                    'kode_kab' => '32.08',
                    'nama' => 'KAB. KUNINGAN',
                ),
            168 =>
                array(
                    'kode_prv' => '32',
                    'kode_kab' => '32.09',
                    'nama' => 'KAB. CIREBON',
                ),
            169 =>
                array(
                    'kode_prv' => '32',
                    'kode_kab' => '32.10',
                    'nama' => 'KAB. MAJALENGKA',
                ),
            170 =>
                array(
                    'kode_prv' => '32',
                    'kode_kab' => '32.11',
                    'nama' => 'KAB. SUMEDANG',
                ),
            171 =>
                array(
                    'kode_prv' => '32',
                    'kode_kab' => '32.12',
                    'nama' => 'KAB. INDRAMAYU',
                ),
            172 =>
                array(
                    'kode_prv' => '32',
                    'kode_kab' => '32.13',
                    'nama' => 'KAB. SUBANG',
                ),
            173 =>
                array(
                    'kode_prv' => '32',
                    'kode_kab' => '32.14',
                    'nama' => 'KAB. PURWAKARTA',
                ),
            174 =>
                array(
                    'kode_prv' => '32',
                    'kode_kab' => '32.15',
                    'nama' => 'KAB. KARAWANG',
                ),
            175 =>
                array(
                    'kode_prv' => '32',
                    'kode_kab' => '32.16',
                    'nama' => 'KAB. BEKASI',
                ),
            176 =>
                array(
                    'kode_prv' => '32',
                    'kode_kab' => '32.17',
                    'nama' => 'KAB. BANDUNG BARAT',
                ),
            177 =>
                array(
                    'kode_prv' => '32',
                    'kode_kab' => '32.18',
                    'nama' => 'KAB. PANGANDARAN',
                ),
            178 =>
                array(
                    'kode_prv' => '32',
                    'kode_kab' => '32.71',
                    'nama' => 'KOTA BOGOR',
                ),
            179 =>
                array(
                    'kode_prv' => '32',
                    'kode_kab' => '32.72',
                    'nama' => 'KOTA SUKABUMI',
                ),
            180 =>
                array(
                    'kode_prv' => '32',
                    'kode_kab' => '32.73',
                    'nama' => 'KOTA BANDUNG',
                ),
            181 =>
                array(
                    'kode_prv' => '32',
                    'kode_kab' => '32.74',
                    'nama' => 'KOTA CIREBON',
                ),
            182 =>
                array(
                    'kode_prv' => '32',
                    'kode_kab' => '32.75',
                    'nama' => 'KOTA BEKASI',
                ),
            183 =>
                array(
                    'kode_prv' => '32',
                    'kode_kab' => '32.76',
                    'nama' => 'KOTA DEPOK',
                ),
            184 =>
                array(
                    'kode_prv' => '32',
                    'kode_kab' => '32.77',
                    'nama' => 'KOTA CIMAHI',
                ),
            185 =>
                array(
                    'kode_prv' => '32',
                    'kode_kab' => '32.78',
                    'nama' => 'KOTA TASIKMALAYA',
                ),
            186 =>
                array(
                    'kode_prv' => '32',
                    'kode_kab' => '32.79',
                    'nama' => 'KOTA BANJAR',
                ),
            187 =>
                array(
                    'kode_prv' => '33',
                    'kode_kab' => '33.01',
                    'nama' => 'KAB. CILACAP',
                ),
            188 =>
                array(
                    'kode_prv' => '33',
                    'kode_kab' => '33.02',
                    'nama' => 'KAB. BANYUMAS',
                ),
            189 =>
                array(
                    'kode_prv' => '33',
                    'kode_kab' => '33.03',
                    'nama' => 'KAB. PURBALINGGA',
                ),
            190 =>
                array(
                    'kode_prv' => '33',
                    'kode_kab' => '33.04',
                    'nama' => 'KAB. BANJARNEGARA',
                ),
            191 =>
                array(
                    'kode_prv' => '33',
                    'kode_kab' => '33.05',
                    'nama' => 'KAB. KEBUMEN',
                ),
            192 =>
                array(
                    'kode_prv' => '33',
                    'kode_kab' => '33.06',
                    'nama' => 'KAB. PURWOREJO',
                ),
            193 =>
                array(
                    'kode_prv' => '33',
                    'kode_kab' => '33.07',
                    'nama' => 'KAB. WONOSOBO',
                ),
            194 =>
                array(
                    'kode_prv' => '33',
                    'kode_kab' => '33.08',
                    'nama' => 'KAB. MAGELANG',
                ),
            195 =>
                array(
                    'kode_prv' => '33',
                    'kode_kab' => '33.09',
                    'nama' => 'KAB. BOYOLALI',
                ),
            196 =>
                array(
                    'kode_prv' => '33',
                    'kode_kab' => '33.10',
                    'nama' => 'KAB. KLATEN',
                ),
            197 =>
                array(
                    'kode_prv' => '33',
                    'kode_kab' => '33.11',
                    'nama' => 'KAB. SUKOHARJO',
                ),
            198 =>
                array(
                    'kode_prv' => '33',
                    'kode_kab' => '33.12',
                    'nama' => 'KAB. WONOGIRI',
                ),
            199 =>
                array(
                    'kode_prv' => '33',
                    'kode_kab' => '33.13',
                    'nama' => 'KAB. KARANGANYAR',
                ),
            200 =>
                array(
                    'kode_prv' => '33',
                    'kode_kab' => '33.14',
                    'nama' => 'KAB. SRAGEN',
                ),
            201 =>
                array(
                    'kode_prv' => '33',
                    'kode_kab' => '33.15',
                    'nama' => 'KAB. GROBOGAN',
                ),
            202 =>
                array(
                    'kode_prv' => '33',
                    'kode_kab' => '33.16',
                    'nama' => 'KAB. BLORA',
                ),
            203 =>
                array(
                    'kode_prv' => '33',
                    'kode_kab' => '33.17',
                    'nama' => 'KAB. REMBANG',
                ),
            204 =>
                array(
                    'kode_prv' => '33',
                    'kode_kab' => '33.18',
                    'nama' => 'KAB. PATI',
                ),
            205 =>
                array(
                    'kode_prv' => '33',
                    'kode_kab' => '33.19',
                    'nama' => 'KAB. KUDUS',
                ),
            206 =>
                array(
                    'kode_prv' => '33',
                    'kode_kab' => '33.20',
                    'nama' => 'KAB. JEPARA',
                ),
            207 =>
                array(
                    'kode_prv' => '33',
                    'kode_kab' => '33.21',
                    'nama' => 'KAB. DEMAK',
                ),
            208 =>
                array(
                    'kode_prv' => '33',
                    'kode_kab' => '33.22',
                    'nama' => 'KAB. SEMARANG',
                ),
            209 =>
                array(
                    'kode_prv' => '33',
                    'kode_kab' => '33.23',
                    'nama' => 'KAB. TEMANGGUNG',
                ),
            210 =>
                array(
                    'kode_prv' => '33',
                    'kode_kab' => '33.24',
                    'nama' => 'KAB. KENDAL',
                ),
            211 =>
                array(
                    'kode_prv' => '33',
                    'kode_kab' => '33.25',
                    'nama' => 'KAB. BATANG',
                ),
            212 =>
                array(
                    'kode_prv' => '33',
                    'kode_kab' => '33.26',
                    'nama' => 'KAB. PEKALONGAN',
                ),
            213 =>
                array(
                    'kode_prv' => '33',
                    'kode_kab' => '33.27',
                    'nama' => 'KAB. PEMALANG',
                ),
            214 =>
                array(
                    'kode_prv' => '33',
                    'kode_kab' => '33.28',
                    'nama' => 'KAB. TEGAL',
                ),
            215 =>
                array(
                    'kode_prv' => '33',
                    'kode_kab' => '33.29',
                    'nama' => 'KAB. BREBES',
                ),
            216 =>
                array(
                    'kode_prv' => '33',
                    'kode_kab' => '33.71',
                    'nama' => 'KOTA MAGELANG',
                ),
            217 =>
                array(
                    'kode_prv' => '33',
                    'kode_kab' => '33.72',
                    'nama' => 'KOTA SURAKARTA',
                ),
            218 =>
                array(
                    'kode_prv' => '33',
                    'kode_kab' => '33.73',
                    'nama' => 'KOTA SALATIGA',
                ),
            219 =>
                array(
                    'kode_prv' => '33',
                    'kode_kab' => '33.74',
                    'nama' => 'KOTA SEMARANG',
                ),
            220 =>
                array(
                    'kode_prv' => '33',
                    'kode_kab' => '33.75',
                    'nama' => 'KOTA PEKALONGAN',
                ),
            221 =>
                array(
                    'kode_prv' => '33',
                    'kode_kab' => '33.76',
                    'nama' => 'KOTA TEGAL',
                ),
            222 =>
                array(
                    'kode_prv' => '34',
                    'kode_kab' => '34.01',
                    'nama' => 'KAB. KULON PROGO',
                ),
            223 =>
                array(
                    'kode_prv' => '34',
                    'kode_kab' => '34.02',
                    'nama' => 'KAB. BANTUL',
                ),
            224 =>
                array(
                    'kode_prv' => '34',
                    'kode_kab' => '34.03',
                    'nama' => 'KAB. GUNUNGKIDUL',
                ),
            225 =>
                array(
                    'kode_prv' => '34',
                    'kode_kab' => '34.04',
                    'nama' => 'KAB. SLEMAN',
                ),
            226 =>
                array(
                    'kode_prv' => '34',
                    'kode_kab' => '34.71',
                    'nama' => 'KOTA YOGYAKARTA',
                ),
            227 =>
                array(
                    'kode_prv' => '35',
                    'kode_kab' => '35.01',
                    'nama' => 'KAB. PACITAN',
                ),
            228 =>
                array(
                    'kode_prv' => '35',
                    'kode_kab' => '35.02',
                    'nama' => 'KAB. PONOROGO',
                ),
            229 =>
                array(
                    'kode_prv' => '35',
                    'kode_kab' => '35.03',
                    'nama' => 'KAB. TRENGGALEK',
                ),
            230 =>
                array(
                    'kode_prv' => '35',
                    'kode_kab' => '35.04',
                    'nama' => 'KAB. TULUNGAGUNG',
                ),
            231 =>
                array(
                    'kode_prv' => '35',
                    'kode_kab' => '35.05',
                    'nama' => 'KAB. BLITAR',
                ),
            232 =>
                array(
                    'kode_prv' => '35',
                    'kode_kab' => '35.06',
                    'nama' => 'KAB. KEDIRI',
                ),
            233 =>
                array(
                    'kode_prv' => '35',
                    'kode_kab' => '35.07',
                    'nama' => 'KAB. MALANG',
                ),
            234 =>
                array(
                    'kode_prv' => '35',
                    'kode_kab' => '35.08',
                    'nama' => 'KAB. LUMAJANG',
                ),
            235 =>
                array(
                    'kode_prv' => '35',
                    'kode_kab' => '35.09',
                    'nama' => 'KAB. JEMBER',
                ),
            236 =>
                array(
                    'kode_prv' => '35',
                    'kode_kab' => '35.10',
                    'nama' => 'KAB. BANYUWANGI',
                ),
            237 =>
                array(
                    'kode_prv' => '35',
                    'kode_kab' => '35.11',
                    'nama' => 'KAB. BONDOWOSO',
                ),
            238 =>
                array(
                    'kode_prv' => '35',
                    'kode_kab' => '35.12',
                    'nama' => 'KAB. SITUBONDO',
                ),
            239 =>
                array(
                    'kode_prv' => '35',
                    'kode_kab' => '35.13',
                    'nama' => 'KAB. PROBOLINGGO',
                ),
            240 =>
                array(
                    'kode_prv' => '35',
                    'kode_kab' => '35.14',
                    'nama' => 'KAB. PASURUAN',
                ),
            241 =>
                array(
                    'kode_prv' => '35',
                    'kode_kab' => '35.15',
                    'nama' => 'KAB. SIDOARJO',
                ),
            242 =>
                array(
                    'kode_prv' => '35',
                    'kode_kab' => '35.16',
                    'nama' => 'KAB. MOJOKERTO',
                ),
            243 =>
                array(
                    'kode_prv' => '35',
                    'kode_kab' => '35.17',
                    'nama' => 'KAB. JOMBANG',
                ),
            244 =>
                array(
                    'kode_prv' => '35',
                    'kode_kab' => '35.18',
                    'nama' => 'KAB. NGANJUK',
                ),
            245 =>
                array(
                    'kode_prv' => '35',
                    'kode_kab' => '35.19',
                    'nama' => 'KAB. MADIUN',
                ),
            246 =>
                array(
                    'kode_prv' => '35',
                    'kode_kab' => '35.20',
                    'nama' => 'KAB. MAGETAN',
                ),
            247 =>
                array(
                    'kode_prv' => '35',
                    'kode_kab' => '35.21',
                    'nama' => 'KAB. NGAWI',
                ),
            248 =>
                array(
                    'kode_prv' => '35',
                    'kode_kab' => '35.22',
                    'nama' => 'KAB. BOJONEGORO',
                ),
            249 =>
                array(
                    'kode_prv' => '35',
                    'kode_kab' => '35.23',
                    'nama' => 'KAB. TUBAN',
                ),
            250 =>
                array(
                    'kode_prv' => '35',
                    'kode_kab' => '35.24',
                    'nama' => 'KAB. LAMONGAN',
                ),
            251 =>
                array(
                    'kode_prv' => '35',
                    'kode_kab' => '35.25',
                    'nama' => 'KAB. GRESIK',
                ),
            252 =>
                array(
                    'kode_prv' => '35',
                    'kode_kab' => '35.26',
                    'nama' => 'KAB. BANGKALAN',
                ),
            253 =>
                array(
                    'kode_prv' => '35',
                    'kode_kab' => '35.27',
                    'nama' => 'KAB. SAMPANG',
                ),
            254 =>
                array(
                    'kode_prv' => '35',
                    'kode_kab' => '35.28',
                    'nama' => 'KAB. PAMEKASAN',
                ),
            255 =>
                array(
                    'kode_prv' => '35',
                    'kode_kab' => '35.29',
                    'nama' => 'KAB. SUMENEP',
                ),
            256 =>
                array(
                    'kode_prv' => '35',
                    'kode_kab' => '35.71',
                    'nama' => 'KOTA KEDIRI',
                ),
            257 =>
                array(
                    'kode_prv' => '35',
                    'kode_kab' => '35.72',
                    'nama' => 'KOTA BLITAR',
                ),
            258 =>
                array(
                    'kode_prv' => '35',
                    'kode_kab' => '35.73',
                    'nama' => 'KOTA MALANG',
                ),
            259 =>
                array(
                    'kode_prv' => '35',
                    'kode_kab' => '35.74',
                    'nama' => 'KOTA PROBOLINGGO',
                ),
            260 =>
                array(
                    'kode_prv' => '35',
                    'kode_kab' => '35.75',
                    'nama' => 'KOTA PASURUAN',
                ),
            261 =>
                array(
                    'kode_prv' => '35',
                    'kode_kab' => '35.76',
                    'nama' => 'KOTA MOJOKERTO',
                ),
            262 =>
                array(
                    'kode_prv' => '35',
                    'kode_kab' => '35.77',
                    'nama' => 'KOTA MADIUN',
                ),
            263 =>
                array(
                    'kode_prv' => '35',
                    'kode_kab' => '35.78',
                    'nama' => 'KOTA SURABAYA',
                ),
            264 =>
                array(
                    'kode_prv' => '35',
                    'kode_kab' => '35.79',
                    'nama' => 'KOTA BATU',
                ),
            265 =>
                array(
                    'kode_prv' => '36',
                    'kode_kab' => '36.01',
                    'nama' => 'KAB. PANDEGLANG',
                ),
            266 =>
                array(
                    'kode_prv' => '36',
                    'kode_kab' => '36.02',
                    'nama' => 'KAB. LEBAK',
                ),
            267 =>
                array(
                    'kode_prv' => '36',
                    'kode_kab' => '36.03',
                    'nama' => 'KAB. TANGERANG',
                ),
            268 =>
                array(
                    'kode_prv' => '36',
                    'kode_kab' => '36.04',
                    'nama' => 'KAB. SERANG',
                ),
            269 =>
                array(
                    'kode_prv' => '36',
                    'kode_kab' => '36.71',
                    'nama' => 'KOTA TANGERANG',
                ),
            270 =>
                array(
                    'kode_prv' => '36',
                    'kode_kab' => '36.72',
                    'nama' => 'KOTA CILEGON',
                ),
            271 =>
                array(
                    'kode_prv' => '36',
                    'kode_kab' => '36.73',
                    'nama' => 'KOTA SERANG',
                ),
            272 =>
                array(
                    'kode_prv' => '36',
                    'kode_kab' => '36.74',
                    'nama' => 'KOTA TANGERANG SELATAN',
                ),
            273 =>
                array(
                    'kode_prv' => '51',
                    'kode_kab' => '51.01',
                    'nama' => 'KAB. JEMBRANA',
                ),
            274 =>
                array(
                    'kode_prv' => '51',
                    'kode_kab' => '51.02',
                    'nama' => 'KAB. TABANAN',
                ),
            275 =>
                array(
                    'kode_prv' => '51',
                    'kode_kab' => '51.03',
                    'nama' => 'KAB. BADUNG',
                ),
            276 =>
                array(
                    'kode_prv' => '51',
                    'kode_kab' => '51.04',
                    'nama' => 'KAB. GIANYAR',
                ),
            277 =>
                array(
                    'kode_prv' => '51',
                    'kode_kab' => '51.05',
                    'nama' => 'KAB. KLUNGKUNG',
                ),
            278 =>
                array(
                    'kode_prv' => '51',
                    'kode_kab' => '51.06',
                    'nama' => 'KAB. BANGLI',
                ),
            279 =>
                array(
                    'kode_prv' => '51',
                    'kode_kab' => '51.07',
                    'nama' => 'KAB. KARANGASEM',
                ),
            280 =>
                array(
                    'kode_prv' => '51',
                    'kode_kab' => '51.08',
                    'nama' => 'KAB. BULELENG',
                ),
            281 =>
                array(
                    'kode_prv' => '51',
                    'kode_kab' => '51.71',
                    'nama' => 'KOTA DENPASAR',
                ),
            282 =>
                array(
                    'kode_prv' => '52',
                    'kode_kab' => '52.01',
                    'nama' => 'KAB. LOMBOK BARAT',
                ),
            283 =>
                array(
                    'kode_prv' => '52',
                    'kode_kab' => '52.02',
                    'nama' => 'KAB. LOMBOK TENGAH',
                ),
            284 =>
                array(
                    'kode_prv' => '52',
                    'kode_kab' => '52.03',
                    'nama' => 'KAB. LOMBOK TIMUR',
                ),
            285 =>
                array(
                    'kode_prv' => '52',
                    'kode_kab' => '52.04',
                    'nama' => 'KAB. SUMBAWA',
                ),
            286 =>
                array(
                    'kode_prv' => '52',
                    'kode_kab' => '52.05',
                    'nama' => 'KAB. DOMPU',
                ),
            287 =>
                array(
                    'kode_prv' => '52',
                    'kode_kab' => '52.06',
                    'nama' => 'KAB. BIMA',
                ),
            288 =>
                array(
                    'kode_prv' => '52',
                    'kode_kab' => '52.07',
                    'nama' => 'KAB. SUMBAWA BARAT',
                ),
            289 =>
                array(
                    'kode_prv' => '52',
                    'kode_kab' => '52.08',
                    'nama' => 'KAB. LOMBOK UTARA',
                ),
            290 =>
                array(
                    'kode_prv' => '52',
                    'kode_kab' => '52.71',
                    'nama' => 'KOTA MATARAM',
                ),
            291 =>
                array(
                    'kode_prv' => '52',
                    'kode_kab' => '52.72',
                    'nama' => 'KOTA BIMA',
                ),
            292 =>
                array(
                    'kode_prv' => '53',
                    'kode_kab' => '53.01',
                    'nama' => 'KAB. KUPANG',
                ),
            293 =>
                array(
                    'kode_prv' => '53',
                    'kode_kab' => '53.02',
                    'nama' => 'KAB. TIMOR TENGAH SELATAN',
                ),
            294 =>
                array(
                    'kode_prv' => '53',
                    'kode_kab' => '53.03',
                    'nama' => 'KAB. TIMOR TENGAH UTARA',
                ),
            295 =>
                array(
                    'kode_prv' => '53',
                    'kode_kab' => '53.04',
                    'nama' => 'KAB. BELU',
                ),
            296 =>
                array(
                    'kode_prv' => '53',
                    'kode_kab' => '53.05',
                    'nama' => 'KAB. ALOR',
                ),
            297 =>
                array(
                    'kode_prv' => '53',
                    'kode_kab' => '53.06',
                    'nama' => 'KAB. FLORES TIMUR',
                ),
            298 =>
                array(
                    'kode_prv' => '53',
                    'kode_kab' => '53.07',
                    'nama' => 'KAB. SIKKA',
                ),
            299 =>
                array(
                    'kode_prv' => '53',
                    'kode_kab' => '53.08',
                    'nama' => 'KAB. ENDE',
                ),
            300 =>
                array(
                    'kode_prv' => '53',
                    'kode_kab' => '53.09',
                    'nama' => 'KAB. NGADA',
                ),
            301 =>
                array(
                    'kode_prv' => '53',
                    'kode_kab' => '53.10',
                    'nama' => 'KAB. MANGGARAI',
                ),
            302 =>
                array(
                    'kode_prv' => '53',
                    'kode_kab' => '53.11',
                    'nama' => 'KAB. SUMBA TIMUR',
                ),
            303 =>
                array(
                    'kode_prv' => '53',
                    'kode_kab' => '53.12',
                    'nama' => 'KAB. SUMBA BARAT',
                ),
            304 =>
                array(
                    'kode_prv' => '53',
                    'kode_kab' => '53.13',
                    'nama' => 'KAB. LEMBATA',
                ),
            305 =>
                array(
                    'kode_prv' => '53',
                    'kode_kab' => '53.14',
                    'nama' => 'KAB. ROTE NDAO',
                ),
            306 =>
                array(
                    'kode_prv' => '53',
                    'kode_kab' => '53.15',
                    'nama' => 'KAB. MANGGARAI BARAT',
                ),
            307 =>
                array(
                    'kode_prv' => '53',
                    'kode_kab' => '53.16',
                    'nama' => 'KAB. NAGEKEO',
                ),
            308 =>
                array(
                    'kode_prv' => '53',
                    'kode_kab' => '53.17',
                    'nama' => 'KAB. SUMBA TENGAH',
                ),
            309 =>
                array(
                    'kode_prv' => '53',
                    'kode_kab' => '53.18',
                    'nama' => 'KAB. SUMBA BARAT DAYA',
                ),
            310 =>
                array(
                    'kode_prv' => '53',
                    'kode_kab' => '53.19',
                    'nama' => 'KAB. MANGGARAI TIMUR',
                ),
            311 =>
                array(
                    'kode_prv' => '53',
                    'kode_kab' => '53.20',
                    'nama' => 'KAB. SABU RAIJUA',
                ),
            312 =>
                array(
                    'kode_prv' => '53',
                    'kode_kab' => '53.21',
                    'nama' => 'KAB. MALAKA',
                ),
            313 =>
                array(
                    'kode_prv' => '53',
                    'kode_kab' => '53.71',
                    'nama' => 'KOTA KUPANG',
                ),
            314 =>
                array(
                    'kode_prv' => '61',
                    'kode_kab' => '61.01',
                    'nama' => 'KAB. SAMBAS',
                ),
            315 =>
                array(
                    'kode_prv' => '61',
                    'kode_kab' => '61.02',
                    'nama' => 'KAB. MEMPAWAH',
                ),
            316 =>
                array(
                    'kode_prv' => '61',
                    'kode_kab' => '61.03',
                    'nama' => 'KAB. SANGGAU',
                ),
            317 =>
                array(
                    'kode_prv' => '61',
                    'kode_kab' => '61.04',
                    'nama' => 'KAB. KETAPANG',
                ),
            318 =>
                array(
                    'kode_prv' => '61',
                    'kode_kab' => '61.05',
                    'nama' => 'KAB. SINTANG',
                ),
            319 =>
                array(
                    'kode_prv' => '61',
                    'kode_kab' => '61.06',
                    'nama' => 'KAB. KAPUAS HULU',
                ),
            320 =>
                array(
                    'kode_prv' => '61',
                    'kode_kab' => '61.07',
                    'nama' => 'KAB. BENGKAYANG',
                ),
            321 =>
                array(
                    'kode_prv' => '61',
                    'kode_kab' => '61.08',
                    'nama' => 'KAB. LANDAK',
                ),
            322 =>
                array(
                    'kode_prv' => '61',
                    'kode_kab' => '61.09',
                    'nama' => 'KAB. SEKADAU',
                ),
            323 =>
                array(
                    'kode_prv' => '61',
                    'kode_kab' => '61.10',
                    'nama' => 'KAB. MELAWI',
                ),
            324 =>
                array(
                    'kode_prv' => '61',
                    'kode_kab' => '61.11',
                    'nama' => 'KAB. KAYONG UTARA',
                ),
            325 =>
                array(
                    'kode_prv' => '61',
                    'kode_kab' => '61.12',
                    'nama' => 'KAB. KUBU RAYA',
                ),
            326 =>
                array(
                    'kode_prv' => '61',
                    'kode_kab' => '61.71',
                    'nama' => 'KOTA PONTIANAK',
                ),
            327 =>
                array(
                    'kode_prv' => '61',
                    'kode_kab' => '61.72',
                    'nama' => 'KOTA SINGKAWANG',
                ),
            328 =>
                array(
                    'kode_prv' => '62',
                    'kode_kab' => '62.01',
                    'nama' => 'KAB. KOTAWARINGIN BARAT',
                ),
            329 =>
                array(
                    'kode_prv' => '62',
                    'kode_kab' => '62.02',
                    'nama' => 'KAB. KOTAWARINGIN TIMUR',
                ),
            330 =>
                array(
                    'kode_prv' => '62',
                    'kode_kab' => '62.03',
                    'nama' => 'KAB. KAPUAS',
                ),
            331 =>
                array(
                    'kode_prv' => '62',
                    'kode_kab' => '62.04',
                    'nama' => 'KAB. BARITO SELATAN',
                ),
            332 =>
                array(
                    'kode_prv' => '62',
                    'kode_kab' => '62.05',
                    'nama' => 'KAB. BARITO UTARA',
                ),
            333 =>
                array(
                    'kode_prv' => '62',
                    'kode_kab' => '62.06',
                    'nama' => 'KAB. KATINGAN',
                ),
            334 =>
                array(
                    'kode_prv' => '62',
                    'kode_kab' => '62.07',
                    'nama' => 'KAB. SERUYAN',
                ),
            335 =>
                array(
                    'kode_prv' => '62',
                    'kode_kab' => '62.08',
                    'nama' => 'KAB. SUKAMARA',
                ),
            336 =>
                array(
                    'kode_prv' => '62',
                    'kode_kab' => '62.09',
                    'nama' => 'KAB. LAMANDAU',
                ),
            337 =>
                array(
                    'kode_prv' => '62',
                    'kode_kab' => '62.10',
                    'nama' => 'KAB. GUNUNG MAS',
                ),
            338 =>
                array(
                    'kode_prv' => '62',
                    'kode_kab' => '62.11',
                    'nama' => 'KAB. PULANG PISAU',
                ),
            339 =>
                array(
                    'kode_prv' => '62',
                    'kode_kab' => '62.12',
                    'nama' => 'KAB. MURUNG RAYA',
                ),
            340 =>
                array(
                    'kode_prv' => '62',
                    'kode_kab' => '62.13',
                    'nama' => 'KAB. BARITO TIMUR',
                ),
            341 =>
                array(
                    'kode_prv' => '62',
                    'kode_kab' => '62.71',
                    'nama' => 'KOTA PALANGKARAYA',
                ),
            342 =>
                array(
                    'kode_prv' => '63',
                    'kode_kab' => '63.01',
                    'nama' => 'KAB. TANAH LAUT',
                ),
            343 =>
                array(
                    'kode_prv' => '63',
                    'kode_kab' => '63.02',
                    'nama' => 'KAB. KOTABARU',
                ),
            344 =>
                array(
                    'kode_prv' => '63',
                    'kode_kab' => '63.03',
                    'nama' => 'KAB. BANJAR',
                ),
            345 =>
                array(
                    'kode_prv' => '63',
                    'kode_kab' => '63.04',
                    'nama' => 'KAB. BARITO KUALA',
                ),
            346 =>
                array(
                    'kode_prv' => '63',
                    'kode_kab' => '63.05',
                    'nama' => 'KAB. TAPIN',
                ),
            347 =>
                array(
                    'kode_prv' => '63',
                    'kode_kab' => '63.06',
                    'nama' => 'KAB. HULU SUNGAI SELATAN',
                ),
            348 =>
                array(
                    'kode_prv' => '63',
                    'kode_kab' => '63.07',
                    'nama' => 'KAB. HULU SUNGAI TENGAH',
                ),
            349 =>
                array(
                    'kode_prv' => '63',
                    'kode_kab' => '63.08',
                    'nama' => 'KAB. HULU SUNGAI UTARA',
                ),
            350 =>
                array(
                    'kode_prv' => '63',
                    'kode_kab' => '63.09',
                    'nama' => 'KAB. TABALONG',
                ),
            351 =>
                array(
                    'kode_prv' => '63',
                    'kode_kab' => '63.10',
                    'nama' => 'KAB. TANAH BUMBU',
                ),
            352 =>
                array(
                    'kode_prv' => '63',
                    'kode_kab' => '63.11',
                    'nama' => 'KAB. BALANGAN',
                ),
            353 =>
                array(
                    'kode_prv' => '63',
                    'kode_kab' => '63.71',
                    'nama' => 'KOTA BANJARMASIN',
                ),
            354 =>
                array(
                    'kode_prv' => '63',
                    'kode_kab' => '63.72',
                    'nama' => 'KOTA BANJARBARU',
                ),
            355 =>
                array(
                    'kode_prv' => '64',
                    'kode_kab' => '64.01',
                    'nama' => 'KAB. PASER',
                ),
            356 =>
                array(
                    'kode_prv' => '64',
                    'kode_kab' => '64.02',
                    'nama' => 'KAB. KUTAI KARTANEGARA',
                ),
            357 =>
                array(
                    'kode_prv' => '64',
                    'kode_kab' => '64.03',
                    'nama' => 'KAB. BERAU',
                ),
            358 =>
                array(
                    'kode_prv' => '64',
                    'kode_kab' => '64.07',
                    'nama' => 'KAB. KUTAI BARAT',
                ),
            359 =>
                array(
                    'kode_prv' => '64',
                    'kode_kab' => '64.08',
                    'nama' => 'KAB. KUTAI TIMUR',
                ),
            360 =>
                array(
                    'kode_prv' => '64',
                    'kode_kab' => '64.09',
                    'nama' => 'KAB. PENAJAM PASER UTARA',
                ),
            361 =>
                array(
                    'kode_prv' => '64',
                    'kode_kab' => '64.11',
                    'nama' => 'KAB. MAHAKAM ULU',
                ),
            362 =>
                array(
                    'kode_prv' => '64',
                    'kode_kab' => '64.71',
                    'nama' => 'KOTA BALIKPAPAN',
                ),
            363 =>
                array(
                    'kode_prv' => '64',
                    'kode_kab' => '64.72',
                    'nama' => 'KOTA SAMARINDA',
                ),
            364 =>
                array(
                    'kode_prv' => '64',
                    'kode_kab' => '64.74',
                    'nama' => 'KOTA BONTANG',
                ),
            365 =>
                array(
                    'kode_prv' => '65',
                    'kode_kab' => '65.01',
                    'nama' => 'KAB. BULUNGAN',
                ),
            366 =>
                array(
                    'kode_prv' => '65',
                    'kode_kab' => '65.02',
                    'nama' => 'KAB. MALINAU',
                ),
            367 =>
                array(
                    'kode_prv' => '65',
                    'kode_kab' => '65.03',
                    'nama' => 'KAB. NUNUKAN',
                ),
            368 =>
                array(
                    'kode_prv' => '65',
                    'kode_kab' => '65.04',
                    'nama' => 'KAB. TANA TIDUNG',
                ),
            369 =>
                array(
                    'kode_prv' => '65',
                    'kode_kab' => '65.71',
                    'nama' => 'KOTA TARAKAN',
                ),
            370 =>
                array(
                    'kode_prv' => '71',
                    'kode_kab' => '71.01',
                    'nama' => 'KAB. BOLAANG MONGONDOW',
                ),
            371 =>
                array(
                    'kode_prv' => '71',
                    'kode_kab' => '71.02',
                    'nama' => 'KAB. MINAHASA',
                ),
            372 =>
                array(
                    'kode_prv' => '71',
                    'kode_kab' => '71.03',
                    'nama' => 'KAB. KEPULAUAN SANGIHE',
                ),
            373 =>
                array(
                    'kode_prv' => '71',
                    'kode_kab' => '71.04',
                    'nama' => 'KAB. KEPULAUAN TALAUD',
                ),
            374 =>
                array(
                    'kode_prv' => '71',
                    'kode_kab' => '71.05',
                    'nama' => 'KAB. MINAHASA SELATAN',
                ),
            375 =>
                array(
                    'kode_prv' => '71',
                    'kode_kab' => '71.06',
                    'nama' => 'KAB. MINAHASA UTARA',
                ),
            376 =>
                array(
                    'kode_prv' => '71',
                    'kode_kab' => '71.07',
                    'nama' => 'KAB. MINAHASA TENGGARA',
                ),
            377 =>
                array(
                    'kode_prv' => '71',
                    'kode_kab' => '71.08',
                    'nama' => 'KAB. BOLAANG MONGONDOW UTARA',
                ),
            378 =>
                array(
                    'kode_prv' => '71',
                    'kode_kab' => '71.09',
                    'nama' => 'KAB. KEP. SIAU TAGULANDANG BIARO',
                ),
            379 =>
                array(
                    'kode_prv' => '71',
                    'kode_kab' => '71.10',
                    'nama' => 'KAB. BOLAANG MONGONDOW TIMUR',
                ),
            380 =>
                array(
                    'kode_prv' => '71',
                    'kode_kab' => '71.11',
                    'nama' => 'KAB. BOLAANG MONGONDOW SELATAN',
                ),
            381 =>
                array(
                    'kode_prv' => '71',
                    'kode_kab' => '71.71',
                    'nama' => 'KOTA MANADO',
                ),
            382 =>
                array(
                    'kode_prv' => '71',
                    'kode_kab' => '71.72',
                    'nama' => 'KOTA BITUNG',
                ),
            383 =>
                array(
                    'kode_prv' => '71',
                    'kode_kab' => '71.73',
                    'nama' => 'KOTA TOMOHON',
                ),
            384 =>
                array(
                    'kode_prv' => '71',
                    'kode_kab' => '71.74',
                    'nama' => 'KOTA KOTAMOBAGU',
                ),
            385 =>
                array(
                    'kode_prv' => '72',
                    'kode_kab' => '72.01',
                    'nama' => 'KAB. BANGGAI',
                ),
            386 =>
                array(
                    'kode_prv' => '72',
                    'kode_kab' => '72.02',
                    'nama' => 'KAB. POSO',
                ),
            387 =>
                array(
                    'kode_prv' => '72',
                    'kode_kab' => '72.03',
                    'nama' => 'KAB. DONGGALA',
                ),
            388 =>
                array(
                    'kode_prv' => '72',
                    'kode_kab' => '72.04',
                    'nama' => 'KAB. TOLI TOLI',
                ),
            389 =>
                array(
                    'kode_prv' => '72',
                    'kode_kab' => '72.05',
                    'nama' => 'KAB. BUOL',
                ),
            390 =>
                array(
                    'kode_prv' => '72',
                    'kode_kab' => '72.06',
                    'nama' => 'KAB. MOROWALI',
                ),
            391 =>
                array(
                    'kode_prv' => '72',
                    'kode_kab' => '72.07',
                    'nama' => 'KAB. BANGGAI KEPULAUAN',
                ),
            392 =>
                array(
                    'kode_prv' => '72',
                    'kode_kab' => '72.08',
                    'nama' => 'KAB. PARIGI MOUTONG',
                ),
            393 =>
                array(
                    'kode_prv' => '72',
                    'kode_kab' => '72.09',
                    'nama' => 'KAB. TOJO UNA UNA',
                ),
            394 =>
                array(
                    'kode_prv' => '72',
                    'kode_kab' => '72.10',
                    'nama' => 'KAB. SIGI',
                ),
            395 =>
                array(
                    'kode_prv' => '72',
                    'kode_kab' => '72.11',
                    'nama' => 'KAB. BANGGAI LAUT',
                ),
            396 =>
                array(
                    'kode_prv' => '72',
                    'kode_kab' => '72.12',
                    'nama' => 'KAB. MOROWALI UTARA',
                ),
            397 =>
                array(
                    'kode_prv' => '72',
                    'kode_kab' => '72.71',
                    'nama' => 'KOTA PALU',
                ),
            398 =>
                array(
                    'kode_prv' => '73',
                    'kode_kab' => '73.01',
                    'nama' => 'KAB. KEPULAUAN SELAYAR',
                ),
            399 =>
                array(
                    'kode_prv' => '73',
                    'kode_kab' => '73.02',
                    'nama' => 'KAB. BULUKUMBA',
                ),
            400 =>
                array(
                    'kode_prv' => '73',
                    'kode_kab' => '73.03',
                    'nama' => 'KAB. BANTAENG',
                ),
            401 =>
                array(
                    'kode_prv' => '73',
                    'kode_kab' => '73.04',
                    'nama' => 'KAB. JENEPONTO',
                ),
            402 =>
                array(
                    'kode_prv' => '73',
                    'kode_kab' => '73.05',
                    'nama' => 'KAB. TAKALAR',
                ),
            403 =>
                array(
                    'kode_prv' => '73',
                    'kode_kab' => '73.06',
                    'nama' => 'KAB. GOWA',
                ),
            404 =>
                array(
                    'kode_prv' => '73',
                    'kode_kab' => '73.07',
                    'nama' => 'KAB. SINJAI',
                ),
            405 =>
                array(
                    'kode_prv' => '73',
                    'kode_kab' => '73.08',
                    'nama' => 'KAB. BONE',
                ),
            406 =>
                array(
                    'kode_prv' => '73',
                    'kode_kab' => '73.09',
                    'nama' => 'KAB. MAROS',
                ),
            407 =>
                array(
                    'kode_prv' => '73',
                    'kode_kab' => '73.10',
                    'nama' => 'KAB. PANGKAJENE KEPULAUAN',
                ),
            408 =>
                array(
                    'kode_prv' => '73',
                    'kode_kab' => '73.11',
                    'nama' => 'KAB. BARRU',
                ),
            409 =>
                array(
                    'kode_prv' => '73',
                    'kode_kab' => '73.12',
                    'nama' => 'KAB. SOPPENG',
                ),
            410 =>
                array(
                    'kode_prv' => '73',
                    'kode_kab' => '73.13',
                    'nama' => 'KAB. WAJO',
                ),
            411 =>
                array(
                    'kode_prv' => '73',
                    'kode_kab' => '73.14',
                    'nama' => 'KAB. SIDENRENG RAPPANG',
                ),
            412 =>
                array(
                    'kode_prv' => '73',
                    'kode_kab' => '73.15',
                    'nama' => 'KAB. PINRANG',
                ),
            413 =>
                array(
                    'kode_prv' => '73',
                    'kode_kab' => '73.16',
                    'nama' => 'KAB. ENREKANG',
                ),
            414 =>
                array(
                    'kode_prv' => '73',
                    'kode_kab' => '73.17',
                    'nama' => 'KAB. LUWU',
                ),
            415 =>
                array(
                    'kode_prv' => '73',
                    'kode_kab' => '73.18',
                    'nama' => 'KAB. TANA TORAJA',
                ),
            416 =>
                array(
                    'kode_prv' => '73',
                    'kode_kab' => '73.22',
                    'nama' => 'KAB. LUWU UTARA',
                ),
            417 =>
                array(
                    'kode_prv' => '73',
                    'kode_kab' => '73.24',
                    'nama' => 'KAB. LUWU TIMUR',
                ),
            418 =>
                array(
                    'kode_prv' => '73',
                    'kode_kab' => '73.26',
                    'nama' => 'KAB. TORAJA UTARA',
                ),
            419 =>
                array(
                    'kode_prv' => '73',
                    'kode_kab' => '73.71',
                    'nama' => 'KOTA MAKASSAR',
                ),
            420 =>
                array(
                    'kode_prv' => '73',
                    'kode_kab' => '73.72',
                    'nama' => 'KOTA PARE PARE',
                ),
            421 =>
                array(
                    'kode_prv' => '73',
                    'kode_kab' => '73.73',
                    'nama' => 'KOTA PALOPO',
                ),
            422 =>
                array(
                    'kode_prv' => '74',
                    'kode_kab' => '74.01',
                    'nama' => 'KAB. KOLAKA',
                ),
            423 =>
                array(
                    'kode_prv' => '74',
                    'kode_kab' => '74.02',
                    'nama' => 'KAB. KONAWE',
                ),
            424 =>
                array(
                    'kode_prv' => '74',
                    'kode_kab' => '74.03',
                    'nama' => 'KAB. MUNA',
                ),
            425 =>
                array(
                    'kode_prv' => '74',
                    'kode_kab' => '74.04',
                    'nama' => 'KAB. BUTON',
                ),
            426 =>
                array(
                    'kode_prv' => '74',
                    'kode_kab' => '74.05',
                    'nama' => 'KAB. KONAWE SELATAN',
                ),
            427 =>
                array(
                    'kode_prv' => '74',
                    'kode_kab' => '74.06',
                    'nama' => 'KAB. BOMBANA',
                ),
            428 =>
                array(
                    'kode_prv' => '74',
                    'kode_kab' => '74.07',
                    'nama' => 'KAB. WAKATOBI',
                ),
            429 =>
                array(
                    'kode_prv' => '74',
                    'kode_kab' => '74.08',
                    'nama' => 'KAB. KOLAKA UTARA',
                ),
            430 =>
                array(
                    'kode_prv' => '74',
                    'kode_kab' => '74.09',
                    'nama' => 'KAB. KONAWE UTARA',
                ),
            431 =>
                array(
                    'kode_prv' => '74',
                    'kode_kab' => '74.10',
                    'nama' => 'KAB. BUTON UTARA',
                ),
            432 =>
                array(
                    'kode_prv' => '74',
                    'kode_kab' => '74.11',
                    'nama' => 'KAB. KOLAKA TIMUR',
                ),
            433 =>
                array(
                    'kode_prv' => '74',
                    'kode_kab' => '74.12',
                    'nama' => 'KAB. KONAWE KEPULAUAN',
                ),
            434 =>
                array(
                    'kode_prv' => '74',
                    'kode_kab' => '74.13',
                    'nama' => 'KAB. MUNA BARAT',
                ),
            435 =>
                array(
                    'kode_prv' => '74',
                    'kode_kab' => '74.14',
                    'nama' => 'KAB. BUTON TENGAH',
                ),
            436 =>
                array(
                    'kode_prv' => '74',
                    'kode_kab' => '74.15',
                    'nama' => 'KAB. BUTON SELATAN',
                ),
            437 =>
                array(
                    'kode_prv' => '74',
                    'kode_kab' => '74.71',
                    'nama' => 'KOTA KENDARI',
                ),
            438 =>
                array(
                    'kode_prv' => '74',
                    'kode_kab' => '74.72',
                    'nama' => 'KOTA BAU BAU',
                ),
            439 =>
                array(
                    'kode_prv' => '75',
                    'kode_kab' => '75.01',
                    'nama' => 'KAB. GORONTALO',
                ),
            440 =>
                array(
                    'kode_prv' => '75',
                    'kode_kab' => '75.02',
                    'nama' => 'KAB. BOALEMO',
                ),
            441 =>
                array(
                    'kode_prv' => '75',
                    'kode_kab' => '75.03',
                    'nama' => 'KAB. BONE BOLANGO',
                ),
            442 =>
                array(
                    'kode_prv' => '75',
                    'kode_kab' => '75.04',
                    'nama' => 'KAB. PAHUWATO',
                ),
            443 =>
                array(
                    'kode_prv' => '75',
                    'kode_kab' => '75.05',
                    'nama' => 'KAB. GORONTALO UTARA',
                ),
            444 =>
                array(
                    'kode_prv' => '75',
                    'kode_kab' => '75.71',
                    'nama' => 'KOTA GORONTALO',
                ),
            445 =>
                array(
                    'kode_prv' => '76',
                    'kode_kab' => '76.01',
                    'nama' => 'KAB. MAMUJU UTARA',
                ),
            446 =>
                array(
                    'kode_prv' => '76',
                    'kode_kab' => '76.02',
                    'nama' => 'KAB. MAMUJU',
                ),
            447 =>
                array(
                    'kode_prv' => '76',
                    'kode_kab' => '76.03',
                    'nama' => 'KAB. MAMASA',
                ),
            448 =>
                array(
                    'kode_prv' => '76',
                    'kode_kab' => '76.04',
                    'nama' => 'KAB. POLEWALI MANDAR',
                ),
            449 =>
                array(
                    'kode_prv' => '76',
                    'kode_kab' => '76.05',
                    'nama' => 'KAB. MAJENE',
                ),
            450 =>
                array(
                    'kode_prv' => '76',
                    'kode_kab' => '76.06',
                    'nama' => 'KAB. MAMUJU TENGAH',
                ),
            451 =>
                array(
                    'kode_prv' => '81',
                    'kode_kab' => '81.01',
                    'nama' => 'KAB. MALUKU TENGAH',
                ),
            452 =>
                array(
                    'kode_prv' => '81',
                    'kode_kab' => '81.02',
                    'nama' => 'KAB. MALUKU TENGGARA',
                ),
            453 =>
                array(
                    'kode_prv' => '81',
                    'kode_kab' => '81.03',
                    'nama' => 'KAB. MALUKU TENGGARA BARAT',
                ),
            454 =>
                array(
                    'kode_prv' => '81',
                    'kode_kab' => '81.04',
                    'nama' => 'KAB. BURU',
                ),
            455 =>
                array(
                    'kode_prv' => '81',
                    'kode_kab' => '81.05',
                    'nama' => 'KAB. SERAM BAGIAN TIMUR',
                ),
            456 =>
                array(
                    'kode_prv' => '81',
                    'kode_kab' => '81.06',
                    'nama' => 'KAB. SERAM BAGIAN BARAT',
                ),
            457 =>
                array(
                    'kode_prv' => '81',
                    'kode_kab' => '81.07',
                    'nama' => 'KAB. KEPULAUAN ARU',
                ),
            458 =>
                array(
                    'kode_prv' => '81',
                    'kode_kab' => '81.08',
                    'nama' => 'KAB. MALUKU BARAT DAYA',
                ),
            459 =>
                array(
                    'kode_prv' => '81',
                    'kode_kab' => '81.09',
                    'nama' => 'KAB. BURU SELATAN',
                ),
            460 =>
                array(
                    'kode_prv' => '81',
                    'kode_kab' => '81.71',
                    'nama' => 'KOTA AMBON',
                ),
            461 =>
                array(
                    'kode_prv' => '81',
                    'kode_kab' => '81.72',
                    'nama' => 'KOTA TUAL',
                ),
            462 =>
                array(
                    'kode_prv' => '82',
                    'kode_kab' => '82.01',
                    'nama' => 'KAB. HALMAHERA BARAT',
                ),
            463 =>
                array(
                    'kode_prv' => '82',
                    'kode_kab' => '82.02',
                    'nama' => 'KAB. HALMAHERA TENGAH',
                ),
            464 =>
                array(
                    'kode_prv' => '82',
                    'kode_kab' => '82.03',
                    'nama' => 'KAB. HALMAHERA UTARA',
                ),
            465 =>
                array(
                    'kode_prv' => '82',
                    'kode_kab' => '82.04',
                    'nama' => 'KAB. HALMAHERA SELATAN',
                ),
            466 =>
                array(
                    'kode_prv' => '82',
                    'kode_kab' => '82.05',
                    'nama' => 'KAB. KEPULAUAN SULA',
                ),
            467 =>
                array(
                    'kode_prv' => '82',
                    'kode_kab' => '82.06',
                    'nama' => 'KAB. HALMAHERA TIMUR',
                ),
            468 =>
                array(
                    'kode_prv' => '82',
                    'kode_kab' => '82.07',
                    'nama' => 'KAB. PULAU MOROTAI',
                ),
            469 =>
                array(
                    'kode_prv' => '82',
                    'kode_kab' => '82.08',
                    'nama' => 'KAB. PULAU TALIABU',
                ),
            470 =>
                array(
                    'kode_prv' => '82',
                    'kode_kab' => '82.71',
                    'nama' => 'KOTA TERNATE',
                ),
            471 =>
                array(
                    'kode_prv' => '82',
                    'kode_kab' => '82.72',
                    'nama' => 'KOTA TIDORE KEPULAUAN',
                ),
            472 =>
                array(
                    'kode_prv' => '91',
                    'kode_kab' => '91.01',
                    'nama' => 'KAB. MERAUKE',
                ),
            473 =>
                array(
                    'kode_prv' => '91',
                    'kode_kab' => '91.02',
                    'nama' => 'KAB. JAYAWIJAYA',
                ),
            474 =>
                array(
                    'kode_prv' => '91',
                    'kode_kab' => '91.03',
                    'nama' => 'KAB. JAYAPURA',
                ),
            475 =>
                array(
                    'kode_prv' => '91',
                    'kode_kab' => '91.04',
                    'nama' => 'KAB. NABIRE',
                ),
            476 =>
                array(
                    'kode_prv' => '91',
                    'kode_kab' => '91.05',
                    'nama' => 'KAB. KEPULAUAN YAPEN',
                ),
            477 =>
                array(
                    'kode_prv' => '91',
                    'kode_kab' => '91.06',
                    'nama' => 'KAB. BIAK NUMFOR',
                ),
            478 =>
                array(
                    'kode_prv' => '91',
                    'kode_kab' => '91.07',
                    'nama' => 'KAB. PUNCAK JAYA',
                ),
            479 =>
                array(
                    'kode_prv' => '91',
                    'kode_kab' => '91.08',
                    'nama' => 'KAB. PANIAI',
                ),
            480 =>
                array(
                    'kode_prv' => '91',
                    'kode_kab' => '91.09',
                    'nama' => 'KAB. MIMIKA',
                ),
            481 =>
                array(
                    'kode_prv' => '91',
                    'kode_kab' => '91.10',
                    'nama' => 'KAB. SARMI',
                ),
            482 =>
                array(
                    'kode_prv' => '91',
                    'kode_kab' => '91.11',
                    'nama' => 'KAB. KEEROM',
                ),
            483 =>
                array(
                    'kode_prv' => '91',
                    'kode_kab' => '91.12',
                    'nama' => 'KAB. PEGUNUNGAN BINTANG',
                ),
            484 =>
                array(
                    'kode_prv' => '91',
                    'kode_kab' => '91.13',
                    'nama' => 'KAB. YAHUKIMO',
                ),
            485 =>
                array(
                    'kode_prv' => '91',
                    'kode_kab' => '91.14',
                    'nama' => 'KAB. TOLIKARA',
                ),
            486 =>
                array(
                    'kode_prv' => '91',
                    'kode_kab' => '91.15',
                    'nama' => 'KAB. WAROPEN',
                ),
            487 =>
                array(
                    'kode_prv' => '91',
                    'kode_kab' => '91.16',
                    'nama' => 'KAB. BOVEN DIGOEL',
                ),
            488 =>
                array(
                    'kode_prv' => '91',
                    'kode_kab' => '91.17',
                    'nama' => 'KAB. MAPPI',
                ),
            489 =>
                array(
                    'kode_prv' => '91',
                    'kode_kab' => '91.18',
                    'nama' => 'KAB. ASMAT',
                ),
            490 =>
                array(
                    'kode_prv' => '91',
                    'kode_kab' => '91.19',
                    'nama' => 'KAB. SUPIORI',
                ),
            491 =>
                array(
                    'kode_prv' => '91',
                    'kode_kab' => '91.20',
                    'nama' => 'KAB. MAMBERAMO RAYA',
                ),
            492 =>
                array(
                    'kode_prv' => '91',
                    'kode_kab' => '91.21',
                    'nama' => 'KAB. MAMBERAMO TENGAH',
                ),
            493 =>
                array(
                    'kode_prv' => '91',
                    'kode_kab' => '91.22',
                    'nama' => 'KAB. YALIMO',
                ),
            494 =>
                array(
                    'kode_prv' => '91',
                    'kode_kab' => '91.23',
                    'nama' => 'KAB. LANNY JAYA',
                ),
            495 =>
                array(
                    'kode_prv' => '91',
                    'kode_kab' => '91.24',
                    'nama' => 'KAB. NDUGA',
                ),
            496 =>
                array(
                    'kode_prv' => '91',
                    'kode_kab' => '91.25',
                    'nama' => 'KAB. PUNCAK',
                ),
            497 =>
                array(
                    'kode_prv' => '91',
                    'kode_kab' => '91.26',
                    'nama' => 'KAB. DOGIYAI',
                ),
            498 =>
                array(
                    'kode_prv' => '91',
                    'kode_kab' => '91.27',
                    'nama' => 'KAB. INTAN JAYA',
                ),
            499 =>
                array(
                    'kode_prv' => '91',
                    'kode_kab' => '91.28',
                    'nama' => 'KAB. DEIYAI',
                ),
        ));
        \DB::table('tbl_kabupaten')->insert(array(
            0 =>
                array(
                    'kode_prv' => '91',
                    'kode_kab' => '91.71',
                    'nama' => 'KOTA JAYAPURA',
                ),
            1 =>
                array(
                    'kode_prv' => '92',
                    'kode_kab' => '92.01',
                    'nama' => 'KAB. SORONG',
                ),
            2 =>
                array(
                    'kode_prv' => '92',
                    'kode_kab' => '92.02',
                    'nama' => 'KAB. MANOKWARI',
                ),
            3 =>
                array(
                    'kode_prv' => '92',
                    'kode_kab' => '92.03',
                    'nama' => 'KAB. FAK FAK',
                ),
            4 =>
                array(
                    'kode_prv' => '92',
                    'kode_kab' => '92.04',
                    'nama' => 'KAB. SORONG SELATAN',
                ),
            5 =>
                array(
                    'kode_prv' => '92',
                    'kode_kab' => '92.05',
                    'nama' => 'KAB. RAJA AMPAT',
                ),
            6 =>
                array(
                    'kode_prv' => '92',
                    'kode_kab' => '92.06',
                    'nama' => 'KAB. TELUK BINTUNI',
                ),
            7 =>
                array(
                    'kode_prv' => '92',
                    'kode_kab' => '92.07',
                    'nama' => 'KAB. TELUK WONDAMA',
                ),
            8 =>
                array(
                    'kode_prv' => '92',
                    'kode_kab' => '92.08',
                    'nama' => 'KAB. KAIMANA',
                ),
            9 =>
                array(
                    'kode_prv' => '92',
                    'kode_kab' => '92.09',
                    'nama' => 'KAB. TAMBRAUW',
                ),
            10 =>
                array(
                    'kode_prv' => '92',
                    'kode_kab' => '92.10',
                    'nama' => 'KAB. MAYBRAT',
                ),
            11 =>
                array(
                    'kode_prv' => '92',
                    'kode_kab' => '92.11',
                    'nama' => 'KAB. MANOKWARI SELATAN',
                ),
            12 =>
                array(
                    'kode_prv' => '92',
                    'kode_kab' => '92.12',
                    'nama' => 'KAB. PEGUNUNGAN ARFAK',
                ),
            13 =>
                array(
                    'kode_prv' => '92',
                    'kode_kab' => '92.71',
                    'nama' => 'KOTA SORONG',
                ),
        ));


    }
}

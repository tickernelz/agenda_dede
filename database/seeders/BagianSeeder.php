<?php

namespace Database\Seeders;

use App\Models\Bagian;
use Illuminate\Database\Seeder;

class BagianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Bagian::create([
            'nama' => 'Sekretariat'
        ]);
        Bagian::create([
            'nama' => 'Bid. Kesmas'
        ]);
        Bagian::create([
            'nama' => 'Bid. Yankes'
        ]);
        Bagian::create([
            'nama' => 'Bid. SDK'
        ]);
        Bagian::create([
            'nama' => 'Bid. P2'
        ]);
    }
}

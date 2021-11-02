<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'username' => 'Dede1',
            'nama' => 'super_admin',
            'nip' => '1234561',
            'password' => bcrypt('123'),
        ])->assignRole('Super Admin');

        User::create([
            'username' => 'Dede2',
            'nama' => 'admin',
            'nip' => '1234562',
            'password' => bcrypt('123'),
        ])->assignRole('Admin');

        User::create([
            'username' => 'Dede3',
            'nama' => 'user',
            'nip' => '1234563',
            'password' => bcrypt('123'),
        ])->assignRole('Sekretariat');
    }
}

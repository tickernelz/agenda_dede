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
            'email' => 'dede1@gmail.com',
            'nama' => 'super_admin',
            'nip' => '1234561',
            'password' => bcrypt('123'),
        ])->assignRole('Super Admin');

        User::create([
            'username' => 'Dede2',
            'nama' => 'admin',
            'email' => 'dede2@gmail.com',
            'nip' => '1234562',
            'password' => bcrypt('123'),
        ])->assignRole('Admin');

        User::create([
            'username' => 'Dede3',
            'nama' => 'user',
            'email' => 'dede1234pky@gmail.com',
            'nip' => '1234563',
            'password' => bcrypt('123'),
        ])->assignRole('Sekretariat');
    }
}

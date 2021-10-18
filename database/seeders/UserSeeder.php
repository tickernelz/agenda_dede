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
            'status' => 'super_admin',
            'password' => bcrypt('123'),
        ])->assignRole('super_admin');

        User::create([
            'username' => 'Dede2',
            'nama' => 'admin',
            'nip' => '1234562',
            'status' => 'admin',
            'password' => bcrypt('123'),
        ])->assignRole('admin');

        User::create([
            'username' => 'Dede3',
            'nama' => 'user',
            'nip' => '1234563',
            'status' => 'user',
            'password' => bcrypt('123'),
        ])->assignRole('user');
    }
}

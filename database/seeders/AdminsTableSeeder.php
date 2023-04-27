<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'nik' => '913828321321',
            'name' => 'Bayu Satrio Trilaksono',
            'email' => 'adminBayu@gmail.com',
            'phone' => '081315048406',
            'address' => 'Jl. Merdeka No. 1',
            'gender' => 'Laki-laki',
            'password' => bcrypt('12345'),
            'roles' => 'ADMIN',
        ]);
        User::create([
            'nik' => '120220000001',
            'name' => 'Fikri Haikal',
            'email' => 'adminFikri@gmail.com',
            'phone' => '08134442221111',
            'address' => 'Jl. Merdeka No. 1',
            'gender' => 'Laki-laki',
            'password' => bcrypt('12345'),
            'roles' => 'ADMIN',
        ]);
        User::create([
            'nik' => '12022000000',
            'name' => 'Iqbal Maulana Harahap',
            'email' => 'adminIqbal@gmail.com',
            'phone' => '081234567890',
            'address' => 'Jl. Merdeka No. 1',
            'gender' => 'male',
            'password' => bcrypt('12345'),
            'roles' => 'ADMIN',
        ]);
        User::create([
            'nik' => '12022000002',
            'name' => 'Petugas',
            'phone' => '0813122334455',
            'email' => 'petugas1@gmail.com',
            'address' => 'Jl. Merdeka No. 1',
            'gender' => 'Laki-laki',
            'password' => bcrypt('12345'),
            'roles' => 'PETUGAS',
        ]);
    }
}

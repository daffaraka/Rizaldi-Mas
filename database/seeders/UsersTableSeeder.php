<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {

                // Insert 10 data dummy user
                for ($i = 1; $i <= 25; $i++) {
                    DB::table('users')->insert([
                        'nik' => "2{$i}325322",
                        'name' => "user{$i}",
                        'email' => "user{$i}@gmail.com",
                        'phone' => "08{$i}2345678",
                        'address' => "Jalan Mangrove {$i}, Kota Mangrove, Provinsi Banten",
                        'gender' => ['Laki-laki', 'Perempuan'][rand(0, 1)],
                        'password' => Hash::make('123456'),
                        'roles' => 'USER',
                        'created_at'=> now(),
                        'updated_at'=> now()
                    ]);
                }
            }

}

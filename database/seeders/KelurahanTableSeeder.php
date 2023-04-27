<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class KelurahanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $kelurahan = [

        ['id' => 1, 'nama_kelurahan' => 'Cibaduyut'],
          ['id' => 2, 'nama_kelurahan' => 'Cicendo'],
          ['id' => 3, 'nama_kelurahan' => 'Cicadap'],
          ['id' => 4, 'nama_kelurahan' => 'Cipaganti'],
          ['id' => 5, 'nama_kelurahan' => 'Cipedes'],
          ['id' => 6, 'nama_kelurahan' => 'Cibangkong'],
          ['id' => 7, 'nama_kelurahan' => 'Ciroyom'],
          ['id' => 8, 'nama_kelurahan' => 'Cisitu'],
          ['id' => 9, 'nama_kelurahan' => 'Citarum'],
          ['id' => 10, 'nama_kelurahan' => 'Cibiru'],
          // tambahkan kelurahan yang lain di sini
          ['id' => 11, 'nama_kelurahan' => 'Ciganitri'],
          ['id' => 12, 'nama_kelurahan' => 'Bojong Soang'],
          ['id' => 13, 'nama_kelurahan' => 'Sukabirus'],
       ];

       Kelurahan::insert($kelurahan);
    }
}

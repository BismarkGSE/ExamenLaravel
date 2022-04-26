<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CiutatsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      DB::table('ciutats')->insert([
        'nom' => 'Badalona',
        'n_habitants' => 220440,
      ]);

      DB::table('ciutats')->insert([
        'nom' => 'Barcelona',
        'n_habitants' => 1636762,
      ]);

      DB::table('ciutats')->insert([
        'nom' => 'Hospitalet de Llobregat',
        'n_habitants' => 264923,
      ]);

      DB::table('ciutats')->insert([
        'nom' => 'Terrassa',
        'n_habitants' => 220556,
      ]);

      DB::table('ciutats')->insert([
        'nom' => 'Sabadell',
        'n_habitants' => 213644,
      ]);

    }
}

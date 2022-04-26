<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CasalsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      DB::table('casals')->insert([
        'nomCasal' => 'Casal el casc',
        'data_inici' => '2022/04/27',
        'data_final' => '2022/05/02',
        'n_places' => 10,
        'id_ciutat' => 1,
      ]);

      DB::table('casals')->insert([
        'nomCasal' => 'Casal el moviment',
        'data_inici' => '2022/05/27',
        'data_final' => '2022/05/31',
        'n_places' => 10,
        'id_ciutat' => 2,
      ]);

      DB::table('casals')->insert([
        'nomCasal' => 'Casal el naranjos',
        'data_inici' => '2022/05/07',
        'data_final' => '2022/05/20',
        'n_places' => 10,
        'id_ciutat' => 3,
      ]);

      DB::table('casals')->insert([
        'nomCasal' => 'Casal el recorredor',
        'data_inici' => '2022/06/07',
        'data_final' => '2022/06/12',
        'n_places' => 10,
        'id_ciutat' => 4,
      ]);

      DB::table('casals')->insert([
        'nomCasal' => 'Casal el pino',
        'data_inici' => '2022/04/27',
        'data_final' => '2022/05/02',
        'n_places' => 10,
        'id_ciutat' => 5,
      ]);

      DB::table('casals')->insert([
        'nomCasal' => 'Casal el cespeds',
        'data_inici' => '2022/06/27',
        'data_final' => '2022/07/02',
        'n_places' => 10,
        'id_ciutat' => 1,
      ]);

      DB::table('casals')->insert([
        'nomCasal' => 'Casal el puertas',
        'data_inici' => '2022/09/27',
        'data_final' => '2022/10/02',
        'n_places' => 10,
        'id_ciutat' => 2,
      ]);

      DB::table('casals')->insert([
        'nomCasal' => 'Casal el gabis',
        'data_inici' => '2022/12/27',
        'data_final' => '2023/01/12',
        'n_places' => 10,
        'id_ciutat' => 1,
      ]);

    }
}

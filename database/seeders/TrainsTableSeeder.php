<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Train; 

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $trains = [
            ['azienda' => 'Trenitalia', 'stazione_partenza' => 'Roma', 'stazione_arrivo' => 'Firenze', 'orario_partenza' => '08:00', 'orario_arrivo' => '11:30', 'codice_treno' => '77777', 'numero_carrozze' => 8],
            ['azienda' => 'Italotreni', 'stazione_partenza' => 'Firenze', 'stazione_arrivo' => 'Bari', 'orario_partenza' => '09:30', 'orario_arrivo' => '13:15', 'codice_treno' => '78960', 'numero_carrozze' => 4],
        ];

        foreach ($trains as $train) {
            Train::create($train);
        }
    }
}

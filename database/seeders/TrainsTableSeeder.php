<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
// use Database\Migrations\create_trains_table;
use App\Models\Train;


class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $trains = config('trains');

        foreach ($trains as $arrTrain) {
            // primo metodo
            // $objTrain = new Train();
            // $objTrain->azienda = $arrTrain['reference'];
            // //...
            // $objTrain->save();

            //secondo metodo
            Train::create($arrTrain);
        }
    }
}

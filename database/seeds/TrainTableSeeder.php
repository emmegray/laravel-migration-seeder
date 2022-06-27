<?php

use App\Train;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 50; $i++) {
            $new_train = new Train();

            $partenza = date("Y-m-d H:i:00", strtotime($faker->time()));
            $arrivo = date("Y-m-d H:i:00", strtotime($faker->time()));

            $new_train->azienda = $faker->company();
            $new_train->stazione_di_partenza = $faker->streetAddress();
            $new_train->stazione_di_arrivo = $faker->streetAddress();
            $new_train->orario_partenza = $partenza;
            $new_train->orario_di_arrivo = $arrivo;
            $new_train->codice_treno = $faker->numberBetween(1, 50);
            $new_train->numero_carrozze = $faker->numberBetween(1, 10);
            $new_train->in_orario = $faker->boolean();
            $new_train->cancellato = $faker->boolean();
            $new_train->save();
        }
    }
}

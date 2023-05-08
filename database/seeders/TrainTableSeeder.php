<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        for ($i=0; $i < 1000 ; $i++) { 
            $new_train = new Train();
            $new_train->azienda = $faker->text(50);
            $new_train->stazione_partenza = $faker->city();
            $new_train->stazione_arrivo = $faker->city();
            $new_train->orario_partenza = $faker->dateTimeBetween('-1 week', '+1 week');
            $new_train->orario_arrivo = $faker->dateTimeBetween('-1 week', '+1 week');
            $new_train->codice = $faker->bothify('?????-#####');
            $new_train->carrozze = $faker->numberBetween(3, 20);
            $new_train->ritardo = $faker->numberBetween(0, 1);
            $new_train->cancellato = $faker->numberBetween(0, 1);
            $new_train->save();
        }
    }
}


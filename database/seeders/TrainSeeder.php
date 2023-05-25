<?php

namespace Database\Seeders;

use App\Models\TrainModel; 
use Faker\Generator as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 10; $i++) { 
            $train = new TrainModel();
            $train->agency = $faker->randomElement(['Pippo Srl', 'Pluto snc', 'paperino sas']);
            $train->departure_station = $faker->randomElement(['roma', 'milano', 'torino', 'napoli', 'rimini', 'piacenza',' bari']);
            $train->arrival_station = $faker->randomElement(['roma', 'milano', 'torino', 'napoli', 'rimini', 'piacenza',' bari']);
            $train->departure_time = $faker->time();
            $train->arrival_time = $faker->time();
            $train->train_serial_number = $faker->bothify('??-##???-##');
            $train->number_of_carriage = $faker->numberBetween(1, 10);
            $train->is_in_time = $faker->boolean();
            $train->is_out_of_time = $faker->boolean();
            $train->save();
        }
     

    }
}

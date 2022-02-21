<?php

use Faker\Generator as Faker;

use Illuminate\Database\Seeder;

use App\Train;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 50; $i++) { 
            $newTrain = new Train();
            $newTrain->company = $faker-> words(2,true);
            $newTrain->startingStation = $faker-> city();
            $newTrain->arrivingStation = $faker-> city();
            $newTrain->startingTime = $faker->time() ;
            $newTrain->arrivingTime = $faker-> time();
            $newTrain->trainCode = $faker->randomNumber(9, true) ;
            $newTrain->wagonNumber = $faker->numberBetween(1, 12) ;
            $newTrain->inTime = $faker->boolean() ;
            $newTrain->delayed = $faker-> boolean();
            $newTrain->startingDate = $faker->dateTimeBetween('-1 week', '+1 week');
            $newTrain->arrivingDate = $faker->dateTimeBetween('-1 week', '+1 week');
            $newTrain->save();
        }
    }
}

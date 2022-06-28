<?php

use App\Train;

use Faker\Generator as Faker;

use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i= 0 ; $i < 100; $i++){
            $newTrain = new Train();
            $newTrain->company = $faker->company();
            $newTrain->departure = $faker->city();
            $newTrain->arrival = $faker->city();
            $newTrain->departure_time = $faker->time();
            $newTrain->code = $faker->regexify('[A-Z]{5}[0-4]{3}');
            $newTrain->coach = $faker->numberBetween(3, 12);
            $newTrain->on_time = $faker->boolean();
            $newTrain->deleted = $faker->boolean();
            $newTrain->save();   

        }
    }
}

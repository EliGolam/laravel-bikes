<?php

use Illuminate\Database\Seeder;

use App\Bike;
use Faker\Generator as Faker;

class BikeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 10; $i++) {
            $bike = new Bike();
            $bike->brand = $faker->text(16);
            $bike->model = $faker->text(32);
            $bike->change = $faker->boolean();
            $bike->type = $faker->randomElement(['citta', 'montainBike', 'corsa']);
            $bike->save();
        }

    }
}

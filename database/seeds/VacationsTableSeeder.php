<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Vacation;

class VacationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for( $i = 0; $i < 100; $i++){
            $vacation = new Vacation();
            $vacation->address = $faker->streetAddress();
            $vacation->post_code = $faker->postcode();
            $vacation->city = $faker->city();
            $vacation->country = $faker->country();
            $vacation->rooms = $faker->randomDigit();
            $vacation->pool = $faker->numberBetween(0, 1);
            $vacation->avaiable = $faker->numberBetween(0, 1);
            $vacation->price = $faker->randomFloat(1, 1000, 5000);
            $vacation->description = $faker->text(400);
            $vacation->save();
            }
    }
}

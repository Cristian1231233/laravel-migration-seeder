<?php

use Faker\Generator as Faker;
use App\Viaggio;
use Illuminate\Database\Seeder;

class ViaggiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run( Faker $faker )
    {
        for($i=0; $i < 50; $i++){
        $new_viaggio = new Viaggio();
        $new_viaggio->name = $faker->name();
        $new_viaggio->description = $faker->text();
        $new_viaggio->price = $faker->numberBetween(120,400);
        $new_viaggio->release_date = $faker->date();
        $new_viaggio->vote = $faker->numberBetween(1,5);
        $new_viaggio->save();
    }
}
}
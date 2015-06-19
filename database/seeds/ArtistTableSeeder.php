<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ArtistTableSeeder extends Seeder{

    public function run(){

        $faker = Faker::create();
        for($i=0;$i<30;$i++) {
            $id=\DB::table('artist')->insert(array(
                'name' => $faker->firstName
            ));
            \DB::table('track')->insert(array(
               'name'=>$faker->firstName,
                'id_artist'=>$id
            ));
        }
    }
}
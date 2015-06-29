<?php

use Illuminate\Database\Seeder;
use Faker\Factory as FakerFactory;

class ArtistTableSeeder extends Seeder
{
    public function run()
    {
        $faker = FakerFactory::create();
        for ($i = 0; $i < 30; $i++) {
            $id = \DB::table('artist')->insert(array(
                'name' => $faker->firstName
            ));
            \DB::table('song')->insert(array(
                'name' => $faker->firstName,
                'url_source' => '/home/ignacio/ProyectoCyberLab/public/558e675e3a517.mp3',
                'artist_id' => $id
            ));
        }
    }
}
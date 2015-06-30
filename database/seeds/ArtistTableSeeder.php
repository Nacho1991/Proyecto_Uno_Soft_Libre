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
            if($i>0) {
                \DB::table('song')->insert(array(
                    'name' => $faker->firstName,
                    'url_source' => '/home/ignacio/ProyectoCyberLab/public/558e675e3a517.mp3',
                    'artist_id' => $id
                ));
            }
            if($i>=1) {
                \DB::table('lista')->insert(array(
                    'song_id' => $i,
                    'user_id' => $i
                ));
            }
        }
    }
}
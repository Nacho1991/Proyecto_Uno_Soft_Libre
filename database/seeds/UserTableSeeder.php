<?php

use Illuminate\Database\Seeder;
use Faker\Factory as FakerFactory;

class UserTableSeeder extends Seeder
{
    public function run(){
        $faker = FakerFactory::create();
        $isAdmin = true;
        for ($i = 0; $i < 30; $i++) {
            if ($i == 1) {
                $isAdmin = false;
            } else {
                \DB::table('user')->insert(array(
                    'email' => $faker->email,
                    'password' => \Hash::make('12345'),
                    'is_admin' => $isAdmin
                ));
            }
        }
    }

}
<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class UserTableSeeder extends Seeder{

    public function run(){

        $faker = Faker::create();
        for($i=0;$i<30;$i++) {
            \DB::table('users')->insert(array(
                'username' => $faker->userName,
                'email' => $faker->unique()->email,
                'password' => \Hash::make('12345'),
                'is_admin' => false
            ));
        }
    }
}
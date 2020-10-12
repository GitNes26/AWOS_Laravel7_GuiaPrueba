<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('users')->insert([
        //     'name'  => 'Jhon Smith',
        //     'email'     => 'admin@gmail.com',
        //     'password'  => bcrypt('123456'),
        // ]);
        $faker = Faker::Create();
        
        foreach(range(1,10) as $f){
            DB::table('users')->insert([
                'name' => $faker->sentence(2),
                'email' => $faker->sentence(1),
                'password' => $faker->sentence(1)
            ]);
        }
    }
}

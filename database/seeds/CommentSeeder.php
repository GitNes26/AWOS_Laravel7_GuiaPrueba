<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;


class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('comments')->insert([
        //     'comment' => "que rica leche",
        //     'user_id' => 1,
        //     'product_id' => 1
        // ],[
        //     'comment' => "que rico queso",
        //     'user_id' => 1,
        //     'product_id' => 2
        // ],[
        //     'comment' => "salio caducado",
        //     'user_id' => 5,
        //     'product_id' => 1
        // ],[
        //     'comment' => "nada mejor que esto",
        //     'user_id' => 2,
        //     'product_id' => 2
        // ],[
        //     'comment' => "que rico jugo",
        //     'user_id' => 1,
        //     'product_id' => 2
        // ]);
        $faker = Faker::Create();

        foreach(range(1,100) as $f){
            DB::table('comments')->insert([
                'comment' => $faker->sentence(2),
                'user_id' => App\User::all()->random()->id,
                'product_id' => App\Product::all()->random()->id
            ]);
        }
    }
}

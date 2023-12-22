<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Generator as Faker;
use DB;

class productseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 10 ; $i++) { 
            DB::table('product')->insert([
                'product_title' => $faker->words(2, true),
                'product_decription' =>$faker->sentence(5),
                'price' => $faker->randomDigit(1000,1000 ),
                'quantity' => $faker->randomDigit(10,100),
    
            ]);
        }
        
    }
}

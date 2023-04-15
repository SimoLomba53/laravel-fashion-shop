<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Shoe;
use Faker\Generator as Faker;

class ShoeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 50; $i++) {
         $shoe = new Shoe;
         $shoe->brand= $faker->word();
         $shoe->model= $faker->word();
         $shoe->size= $faker->numberBetween(36,45);
         $shoe->price_buy= $faker->numberBetween(60,120);
         $shoe->price_resell= $faker->numberBetween(121,300);
         $shoe->discount=$faker->boolean();
         $shoe->image = 'https://picsum.photos/300/200';
        
         $shoe->save();
      }
    }
}
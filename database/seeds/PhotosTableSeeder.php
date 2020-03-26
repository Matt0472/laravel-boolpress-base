<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Photo;

class PhotosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 18; $i++) {
            $randNumber = rand(1, 6);
            $newPhoto = new Photo;
            $newPhoto->title = $faker->sentence($nbWords = 15, $variableNbWords = true);
            $newPhoto->path = $faker->imageUrl($width = 640, $height = 480);
            $newPhoto->user_id = $randNumber;
            $newPhoto->save();
        }
    }
}

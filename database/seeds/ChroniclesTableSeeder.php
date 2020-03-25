<?php

use Illuminate\Database\Seeder;
use App\Chronicle;
use Faker\Generator as Faker;

class ChroniclesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 10; $i++) { 
            $newChronicle = new Chronicle();
            $newChronicle->author = $faker->name();
            $newChronicle->author_job = $faker->jobTitle();
            $newChronicle->category = $faker->word();
            $newChronicle->title = $faker->sentence($nbWords = 15, $variableNbWords = true);
            $newChronicle->img = $faker->imageUrl($width = 640, $height = 480);
            $newChronicle->article = $faker->text($maxNbChars = 500);
            $newChronicle->save();
        }
    }
}

<?php

namespace Database\Seeders;

use App\Models\Aboutus;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class AboutusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker::create();

        for ($i = 0; $i < 10; $i++) {
            Aboutus::create([
                'title' => $faker->sentence,
                'description' => $faker->paragraph,
                'aboutus_image' => $faker->imageUrl(),
            ]);
        }
    }
}

<?php

namespace Database\Seeders;

use App\Models\Badge;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class BadgeSeeder extends Seeder
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
            Badge::create([
                'title' => $faker->sentence,
                'description' => $faker->paragraph,
                'badge_image' => $faker->imageUrl(),
            ]);
        }
    }
}

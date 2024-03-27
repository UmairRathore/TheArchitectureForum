<?php

namespace Database\Seeders;

use App\Models\Tags;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class TagsSeeder extends Seeder
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
            Tags::create([
                'title' => $faker->word,
                'description' => $faker->sentence,
            ]);
        }
    }
}

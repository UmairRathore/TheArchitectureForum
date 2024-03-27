<?php

namespace Database\Seeders;

use App\Models\Topic;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class TopicSeeder extends Seeder
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
            Topic::create([
                'title' => $faker->sentence,
            ]);
        }
    }
}

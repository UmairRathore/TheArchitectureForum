<?php

namespace Database\Seeders;

use App\Models\Faq;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class FaqSeeder extends Seeder
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
            Faq::create([
                'title' => $faker->sentence,
                'description' => $faker->paragraph,
            ]);
        }
    }
}

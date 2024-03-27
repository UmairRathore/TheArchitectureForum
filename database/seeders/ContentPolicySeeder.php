<?php

namespace Database\Seeders;

use App\Models\ContentPolicy;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ContentPolicySeeder extends Seeder
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
            ContentPolicy::create([
                'description' => $faker->paragraph,
            ]);
        }
    }
}

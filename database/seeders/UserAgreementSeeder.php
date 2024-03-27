<?php

namespace Database\Seeders;

use App\Models\UserAgreement;
use Faker\Factory as Faker;

use Illuminate\Database\Seeder;

class UserAgreementSeeder extends Seeder
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
            UserAgreement::create([
                'description' => $faker->paragraph,
            ]);
        }
    }
}

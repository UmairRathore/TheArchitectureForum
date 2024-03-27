<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class UserSeeder extends Seeder
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
            User::create([
                'fname' => $faker->firstName,
                'lname' => $faker->lastName,
                'name' => $faker->name,
                'email' => $faker->unique()->safeEmail,
                'role' => $faker->randomElement(['user', 'admin']),
                'password' => bcrypt('password'), // Hashed password for example
                'gender' => $faker->randomElement(['male', 'female']),
                'location' => $faker->address,
                'about_me' => $faker->paragraph,
                'last_seen' => $faker->dateTimeThisYear(),
                'instagram_url' => $faker->url,
                'facebook_url' => $faker->url,
                'twitter_url' => $faker->url,
                'profile_image' => $faker->imageUrl(),
                'student_or_worker' => $faker->randomElement(['student', 'worker']),
                'student_or_worker_workplace' => $faker->company,
            ]);
        }
    }
}

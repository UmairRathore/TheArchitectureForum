<?php

namespace Database\Seeders;

use App\Models\Badge;
use App\Models\User;
use App\Models\UserBadge;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class UserBadgeSeeder extends Seeder
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

        $userIds = User::pluck('id')->toArray();
        $badgeIds = Badge::pluck('id')->toArray();

        foreach ($userIds as $userId) {
            UserBadge::create([
                'user_id' => $userId,
                'badge_id' => $faker->randomElement($badgeIds),
            ]);
        }
    }
}

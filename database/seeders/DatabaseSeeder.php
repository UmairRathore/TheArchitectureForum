<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            AboutusSeeder::class,
            BadgeSeeder::class,
            ContentPolicySeeder::class,
            FaqSeeder::class,
            PrivacyPolicySeeder::class,
            TagsSeeder::class,
            TopicSeeder::class,
            UserSeeder::class,
            UserBadgeSeeder::class,
            UserAgreementSeeder::class,
        ]);
    }

}

<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            CategorySeeder::class,
            LevelSeeder::class,
            ThemeSeeder::class,
            SousThemeSeeder::class,
            QuestionSeeder::class,
            SmatSeeder::class,
            // SmatUserSeeder::class,
            // RankingSeeder::class,
            FriendSeeder::class,
        ]);
    }
}

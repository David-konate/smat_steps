<?php

namespace Database\Seeders;

use App\Models\SousTheme;
use Illuminate\Database\Seeder;

class SousThemeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SousTheme::create([
            'sous_theme' => 'Star Wars',
            'theme_id' => 1
        ]);

        SousTheme::create([
            'sous_theme' => 'Friends',
            'theme_id' => 2
        ]);

        SousTheme::create([
            'sous_theme' => 'Basket',
            'theme_id' => 3
        ]);
    }
}

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
        SousTheme::create([
            'sous_theme' => 'France',
            'theme_id' => 4
        ]);
        SousTheme::create([
            'sous_theme' => 'Rap US',
            'theme_id' => 5
        ]);
        SousTheme::create([
            'sous_theme' => 'Europe',
            'theme_id' => 6
        ]);
        SousTheme::create([
            'sous_theme' => 'Zelda',
            'theme_id' => 7
        ]);
    }
}

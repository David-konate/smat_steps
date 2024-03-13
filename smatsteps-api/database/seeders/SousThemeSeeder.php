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
            'theme_id' => 1, 'sous_theme_image' => 'Lightsaber.webp'
        ]);

        SousTheme::create([
            'sous_theme' => 'Friends',
            'theme_id' => 2, 'sous_theme_image' => 'frien.jpg'
        ]);

        SousTheme::create([
            'sous_theme' => 'NBA',
            'theme_id' => 3, 'sous_theme_image' => 'carter.jpg'
        ]);
        SousTheme::create([
            'sous_theme' => 'France',
            'theme_id' => 4, 'sous_theme_image' => 'banreduite.jpg'
        ]);
        SousTheme::create([
            'sous_theme' => 'Rap US',
            'theme_id' => 5, 'sous_theme_image' => 'raental.jpg'
        ]);
        SousTheme::create([
            'sous_theme' => 'Europe',
            'theme_id' => 6, 'sous_theme_image' => 'geoEuri.jpg'
        ]);
        SousTheme::create([
            'sous_theme' => 'Zelda',
            'theme_id' => 7, 'sous_theme_image' => 'link.jpg'
        ]);
    }
}

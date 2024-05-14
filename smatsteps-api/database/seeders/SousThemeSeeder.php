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
        //1
        SousTheme::create([
            'sous_theme' => 'Star Wars',
            'theme_id' => 1, 'sous_theme_image' => 'Lightsaber.webp'
        ]);
        //2
        SousTheme::create([
            'sous_theme' => 'Friends',
            'theme_id' => 2, 'sous_theme_image' => 'frien.jpg'
        ]);
        //3
        SousTheme::create([
            'sous_theme' => 'NBA',
            'theme_id' => 3, 'sous_theme_image' => 'carter.jpg'
        ]);
        //4
        SousTheme::create([
            'sous_theme' => 'France',
            'theme_id' => 4, 'sous_theme_image' => 'banreduite.jpg'
        ]);
        //5
        SousTheme::create([
            'sous_theme' => 'Rap US-2000',
            'theme_id' => 5, 'sous_theme_image' => 'raental.jpg'
        ]);
        //6
        SousTheme::create([
            'sous_theme' => 'Rap FR-2010',
            'theme_id' => 5, 'sous_theme_image' => 'rapFr.avif'
        ]);

        //7
        SousTheme::create([
            'sous_theme' => 'Zelda',
            'theme_id' => 7, 'sous_theme_image' => 'link.jpg'
        ]);
        //8
        SousTheme::create([
            'sous_theme' => 'Final Fantasy',
            'theme_id' => 7, 'sous_theme_image' => 'ff.webp'
        ]);
        //9
        SousTheme::create([
            'sous_theme' => 'Europe',
            'theme_id' => 6, 'sous_theme_image' => 'geoEuri.jpg'
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ThemeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Assurez-vous que les thèmes existent avant d'ajouter les univers
        DB::table('themes')->insert([
            ['theme' => 'Cinema', 'theme_image' => 'cinema.png'],
            ['theme' => 'Serie', 'theme_image' => 'serie.jpg'],
            ['theme' => 'Sport', 'theme_image' => 'sport.png'],
            ['theme' => 'Histoire', 'theme_image' => 'marianne.jpeg'],
            ['theme' => 'Musique', 'theme_image' => 'musique.avif'],
            ['theme' => 'Géographie', 'theme_image' => 'geo.webp'],
            ['theme' => 'Jeux vidéo', 'theme_image' => 'jvd.jpg'],
        ]);
    }
}

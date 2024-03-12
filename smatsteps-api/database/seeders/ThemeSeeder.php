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
            ['theme' => 'Cinema'],
            ['theme' => 'Serie'],
            ['theme' => 'Sport'],
            ['theme' => 'Histoire'],
            ['theme' => 'Musique'],
            ['theme' => 'Géographie'],
            ['theme' => 'Jeux vidéo'],
        ]);
    }
}

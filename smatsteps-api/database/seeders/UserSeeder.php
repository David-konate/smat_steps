<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // création de l'administrateur
        User::create([
            'user_pseudo' => 'Daouda',
            'password' => Hash::make('Azerty@123'),
            'email' => 'admin@boss.fr',
            'user_image' => 'r2d2.jpg',
            'is_admin' => true,
            'slug' => Str::slug('r2d2'),
            'remember_token' => Str::random(10),
        ]);

        // création d'un utilisateur test
        User::create([
            'user_pseudo' => 'Mara',
            'password' => Hash::make('Azerty@123'),
            'email' => 'utilisateur@use.fr',
            'user_image' => 'mara.jpg',
            'is_admin' => false,
            'slug' => Str::slug('mara'),
            'remember_token' => Str::random(10),
        ]);

        // création de 6 utilisateurs aléatoires
        User::factory(10)->create();
    }
}

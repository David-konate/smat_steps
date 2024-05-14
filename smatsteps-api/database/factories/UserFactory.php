<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class UserFactory extends Factory
{
    protected static ?string $password;

    public function definition(): array
    {
        $faker = Faker::create();

        // Liste des noms de fichiers d'images possibles
        $imageOptions = ['1.png', 'banreduite.jpg', 'carter.jpg', 'frien.jpg', 'Lightsaber.webp', 'link.jpg',];
        $pseudo = $faker->userName;
        return [
            'user_pseudo' => $pseudo,
            'password' => static::$password ??= Hash::make('Azerty@123'),
            'email' => $faker->unique()->safeEmail,
            'user_image' => $faker->randomElement($imageOptions), // Choix aléatoire parmi les images disponibles
            'is_admin' => false,
            'slug' => Str::slug($pseudo),
            'remember_token' => Str::random(10),
        ];
    }

    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}

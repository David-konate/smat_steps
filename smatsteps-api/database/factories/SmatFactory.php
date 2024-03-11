<?php

// SmatFactory.php

namespace Database\Factories;

use App\Models\Smat;
use App\Models\User;
use App\Models\SmatUser;
use Illuminate\Database\Eloquent\Factories\Factory;

class SmatFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // Définissez les attributs de Smat selon vos besoins

            // ...
        ];
    }

    /**
     * Configurez l'état pour créer entre 2 et 4 utilisateurs associés.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function configure(): SmatFactory
    {
        return $this->afterCreating(function (Smat $smat) {
            // Associez entre 2 et 4 utilisateurs à ce Smat
            $usersCount = $this->faker->numberBetween(2, 4);
            $users = User::inRandomOrder()->limit($usersCount)->get();

            // Associez chaque utilisateur à ce Smat
            $users->each(function ($user) use ($smat) {
                SmatUser::factory()->create([
                    'smat_id' => $smat->id,
                    'user_id' => $user->id,
                ]);
            });
        });
    }
}

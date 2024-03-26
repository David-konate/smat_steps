<?php

namespace Database\Factories;

use App\Models\SmatUser;
use App\Models\User;
use App\Models\Smat;
use Illuminate\Database\Eloquent\Factories\Factory;

class SmatUserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // Récupérez un Smat existant ou créez-en un nouveau
        $smatId = Smat::pluck('id')->random();

        // Récupérez l'ID d'un premier utilisateur aléatoire
        $user1Id = User::pluck('id')->random();

        // Récupérez l'ID d'un deuxième utilisateur qui diffère d'au moins 1 de l'ID du premier utilisateur
        $user2Id = User::whereNotIn('id', [$user1Id])->pluck('id')->random();

        return [
            'result_smat' => $this->faker->randomFloat(2, 0, 100), // Génère un résultat aléatoire entre 0 et 100 avec 2 décimales
            'user_id' => $user1Id,
            'smat_id' => $smatId,
        ];
        [
            'result_smat' => $this->faker->randomFloat(2, 0, 100), // Génère un résultat aléatoire entre 0 et 100 avec 2 décimales
            'user_id' => $user2Id,
            'smat_id' => $smatId,
        ];
    }
}

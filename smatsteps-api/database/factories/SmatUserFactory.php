<?php

namespace Database\Factories;

use App\Models\Smat;
use App\Models\User;
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
        // Sélectionnez aléatoirement un smat_id et un user_id
        $smatId = Smat::pluck('id')->random();
        $userId = User::pluck('id')->random();

        return [
            'smat_id' => $smatId,
            'user_id' => $userId,
        ];
    }
}

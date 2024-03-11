<?php

namespace Database\Factories;

use App\Models\Ranking;
use App\Models\User;
use App\Models\SousTheme;
use Illuminate\Database\Eloquent\Factories\Factory;

class RankingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $userIds = User::pluck('id')->random();
        $sousThemeIds = SousTheme::pluck('id')->random();

        return [
            'result_quiz' => $this->faker->randomFloat(2, 0, 100),
            'time_quiz' => $this->faker->randomFloat(2, 0, 100),
            'user_id' => $userIds,
            'level' => $this->faker->randomElement([1, 2, 3]),
            'sous_theme_id' => $sousThemeIds,
        ];
    }
}

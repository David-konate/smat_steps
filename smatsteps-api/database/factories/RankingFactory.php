<?php

namespace Database\Factories;

use App\Models\Ranking;
use App\Models\User;
use App\Models\Theme;
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
        $themeId = Theme::pluck('id')->random();
        $sousThemeId = null;

        // Vérifie s'il existe des sous-thèmes pour ce thème
        $sousThemes = SousTheme::where('theme_id', $themeId)->get();
        if ($sousThemes->isNotEmpty()) {
            // Sélectionnez un sous-thème de manière aléatoire
            $sousTheme = $sousThemes->random();
            $sousThemeId = $sousTheme->id;

            // Assurez-vous que l'ID du sous-thème est identique à celui du thème parent
            if ($sousTheme->theme_id != $themeId) {
                $sousThemeId = $themeId;
            }
        }

        // Définissez aléatoirement si le champ sous_theme_id doit être vide
        if (rand(0, 1)) {
            $sousThemeId = null;
        }

        return [
            'result_quiz' => $this->faker->randomFloat(2, 0, 100),
            'time_quiz' => $this->faker->randomFloat(2, 0, 100),
            'user_id' => $userIds,
            'level' => $this->faker->randomElement([1, 2, 3]),
            // Assurez-vous que le champ theme_id ne soit jamais null
            'theme_id' => $themeId,
            // Le champ sous_theme_id peut être null
            'sous_theme_id' => $sousThemeId,
        ];
    }
}

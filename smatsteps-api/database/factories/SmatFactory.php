<?php

namespace Database\Factories;

use App\Models\Smat;
use App\Models\User;
use App\Models\Theme;
use App\Models\SousTheme;
use App\Models\QuestionSmat;
use App\Models\Question;
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
        // Sélectionnez un thème de manière aléatoire
        $themeId = Theme::pluck('id')->random();

        // Initialisez le sous-thème à null
        $sousThemeId = null;

        // Vérifiez s'il existe des sous-thèmes pour ce thème
        $sousThemes = SousTheme::where('theme_id', $themeId)->get();

        // Si des sous-thèmes existent, en choisissez un de manière aléatoire
        if ($sousThemes->isNotEmpty()) {
            $sousTheme = $sousThemes->random();
            $sousThemeId = $sousTheme->id;
        }

        return [
            'level_id' => $this->faker->randomElement([1, 2, 3]),
            // Assurez-vous que le champ theme_id ne soit jamais null
            'theme_id' => $themeId,
            // Le champ sous_theme_id peut être null
            'sous_theme_id' => $sousThemeId,
        ];
    }

    /**
     * Indicate that the smat belongs to a specific user.
     *
     * @param  int  $userId
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function ownedByUser($userId): SmatFactory
    {
        return $this->afterCreating(function (Smat $smat) use ($userId) {
            // Associez l'utilisateur spécifié à ce Smat
            $user = User::findOrFail($userId);
            $user->smats()->attach($smat->id);

            // Sélectionnez les IDs des questions en fonction du niveau
            $questions = [];

            if ($smat->level_id === 1) {
                // Sélectionnez 12 questions de niveau 1
                $questions = Question::where('level_id', 1)->inRandomOrder()->take(12)->pluck('id');
            } elseif ($smat->level_id === 2) {
                // Sélectionnez 6 questions de niveau 1 et 6 questions de niveau 2
                $questionsLevel1 = Question::where('level_id', 1)->inRandomOrder()->take(6)->pluck('id');
                $questionsLevel2 = Question::where('level_id', 2)->inRandomOrder()->take(6)->pluck('id');
                $questions = $questionsLevel1->merge($questionsLevel2)->take(12);
            } elseif ($smat->level_id === 3) {
                // Sélectionnez 4 questions de niveau 1, 4 questions de niveau 2 et 4 questions de niveau 3
                $questionsLevel1 = Question::where('level_id', 1)->inRandomOrder()->take(4)->pluck('id');
                $questionsLevel2 = Question::where('level_id', 2)->inRandomOrder()->take(4)->pluck('id');
                $questionsLevel3 = Question::where('level_id', 3)->inRandomOrder()->take(4)->pluck('id');
                $questions = $questionsLevel1->merge($questionsLevel2)->merge($questionsLevel3)->take(12);
            }

            // Attachez chaque ID de question au Smat
            foreach ($questions as $questionId) {
                QuestionSmat::create([
                    'question_id' => $questionId,
                    'smat_id' => $smat->id,
                ]);
            }
        });
    }
}

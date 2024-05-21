<?php

namespace Tests\Unit;

use App\Models\Level;
use Tests\TestCase;
use App\Models\Question;
use App\Models\SousTheme;
use App\Models\Theme;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Laravel\Sanctum\Sanctum;

use Mockery as m; // Inclure Mockery pour l'injection de dépendances (facultatif)

class QuestionControllerTest extends TestCase
{
    use RefreshDatabase;


    public function test_store_question()
    {
        // Créer un utilisateur factice et générer un jeton d'authentification pour lui
        $user = User::factory()->create();
        Sanctum::actingAs($user);

        // Créer un nouveau niveau
        $level = Level::create();

        // Créer un nouveau thème avec un sous-thème
        $theme = Theme::create([
            'theme' => 'Nom du thème',
            'theme_image' => 'Chemin de l\'image du thème',
        ]);

        // Créer un nouveau sous-thème avec le champ 'sous_theme' défini
        $sousTheme = SousTheme::factory()->create([
            'theme_id' => $theme->id,
            'sous_theme' => 'Nom du sous-thème', // Ajout de la valeur pour le champ 'sous_theme'
        ]);

        // Payload de la requête avec les IDs des nouveaux niveaux, thèmes et sous-thèmes
        $payload = [
            'question' => 'What is Laravel?',
            'level_id' => $level->id,
            'theme_id' => $theme->id,
            'sous_theme_id' => $sousTheme->id,
            'user_id' => $user->id,
            'answers' => [
                ['answer' => 'A PHP Framework', 'is_correct' => 1, 'answerText' => 'A PHP Framework'],
                ['answer' => 'A JavaScript Library', 'is_correct' => 0, 'answerText' => 'A JavaScript Library'],
                ['answer' => 'A CSS Framework', 'is_correct' => 0, 'answerText' => 'A CSS Framework'],
                ['answer' => 'A Database', 'is_correct' => 0, 'answerText' => 'A Database'],
            ],
        ];


        // Faire la requête avec le jeton d'authentification
        $response = $this->actingAs($user)->postJson(route('questions.store'), $payload);

        // Assurer que la réponse est conforme aux attentes
        $response->assertStatus(200)
            ->assertJson([
                'status' => true,
                'message' => 'Question créée avec succès',
            ]);

        // Assurer que la question a été ajoutée à la base de données
        $this->assertDatabaseHas('questions', ['question' => 'What is Laravel?']);
        $this->assertDatabaseCount('answers', 4);
    }



    public function test_random_question()
    {
        // Semer la base de données avec des questions
        $this->test_store_question();
        // Récupérer une question aléatoire
        $randomQuestion = Question::inRandomOrder()->first();

        // Vérifier que la question aléatoire existe
        $this->assertNotNull($randomQuestion);
    }
}

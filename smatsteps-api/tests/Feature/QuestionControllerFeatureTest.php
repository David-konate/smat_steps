<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class QuestionControllerFeatureTest extends TestCase
{
    use RefreshDatabase;
    use WithFaker;

    public function testNewRankedGame()
    {
        // Création d'un utilisateur factice
        $user = User::factory()->create();

        // Authentification en tant qu'utilisateur fictif
        $this->actingAs($user);

        // Simulation de la requête HTTP
        $response = $this->getJson('/api/new-game/1?theme=1&sousTheme=1');

        // Vérification du code de réponse
        $response->assertStatus(200);

        // Vérification de la structure JSON de la réponse
        $response->assertJsonStructure([
            'questions',
            'countLevel1',
            'countLevel2',
            'countLevel3',
        ]);
    }
}

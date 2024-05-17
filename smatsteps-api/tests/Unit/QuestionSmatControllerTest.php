<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\Question;
use App\Models\Answer;
use App\Models\QuestionSmat;
use App\Models\Smat;
use App\Models\SmatUser;
use Illuminate\Http\Request;

class QuestionSmatControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_current_question_not_enough_players()
    {
        // Simulez une réponse vide pour les joueurs
        SmatUser::factory()->create(['smat_id' => 1]);

        $response = $this->getJson('/api/current-question/1/1');

        $response->assertStatus(400)
            ->assertJson([
                'error' => true,
                'message' => 'Il n\'y a pas assez de joueurs pour répondre à la question.',
                'code' => 400,
            ]);
    }

    public function test_current_question_not_found()
    {
        // Simulez deux joueurs
        SmatUser::factory()->count(2)->create(['smat_id' => 1]);

        $response = $this->getJson('/api/current-question/1/1');

        $response->assertStatus(404)
            ->assertJson([
                'error' => true,
                'message' => 'Question non trouvée.',
                'code' => 404,
            ]);
    }

    public function test_current_question_found()
    {
        // Simulez deux joueurs
        SmatUser::factory()->count(2)->create(['smat_id' => 1]);

        // Créez une question et ses réponses
        $question = Question::factory()->create();
        QuestionSmat::factory()->create(['smat_id' => 1, 'current_question' => 1, 'question_id' => $question->id]);
        Answer::factory()->count(3)->create(['question_id' => $question->id]);

        $response = $this->getJson('/api/current-question/1/1');

        $response->assertStatus(200)
            ->assertJson([
                'status' => true,
                'currentQuestion' => [
                    'id' => $question->id,
                    'answers' => [],
                ],
                'code' => 200,
            ]);
    }
}

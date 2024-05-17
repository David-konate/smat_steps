<?php

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\Question;
use App\Models\Answer;
use App\Models\QuestionSmat;
use App\Models\Smat;
use App\Models\SmatUser;

class QuestionSmatControllerIntegrationTest extends TestCase
{
    use RefreshDatabase;

    public function test_current_question_integration()
    {
        // Créez un Smat et deux joueurs
        $smat = Smat::factory()->create();
        SmatUser::factory()->count(2)->create(['smat_id' => $smat->id]);

        // Créez une question et ses réponses
        $question = Question::factory()->create();
        QuestionSmat::factory()->create(['smat_id' => $smat->id, 'current_question' => 1, 'question_id' => $question->id]);
        $answers = Answer::factory()->count(3)->create(['question_id' => $question->id]);

        $response = $this->getJson("/api/current-question/{$smat->id}/1");

        $response->assertStatus(200)
            ->assertJsonStructure([
                'status',
                'currentQuestion' => [
                    'id',
                    'answers' => [
                        '*' => ['id', 'text', 'question_id']
                    ]
                ],
                'currentAnswers' => [
                    '*' => ['id', 'text', 'question_id']
                ],
                'players' => [
                    '*' => ['id', 'name', 'smat_id']
                ],
                'smat' => [
                    'id', 'name', 'theme', 'sousTheme'
                ],
                'code'
            ]);
    }
}

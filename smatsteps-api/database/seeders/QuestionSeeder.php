<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Level;
use App\Models\Answer;
use App\Models\Category;
use App\Models\Question;
use App\Models\SousTheme;
use Illuminate\Database\Seeder;


class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Sample questions data, adjust accordingly
        $questionsData = [
            [
                'title' => "Quel est le nom complet de Ross?",
                'category_id' => 1,
                'level_id' => 1,
                'sous_theme_id' => 2,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Ross Geller', 'is_correct' => true],
                    ['answer' => 'Ross Bing', 'is_correct' => false],
                    ['answer' => 'Ross Green', 'is_correct' => false],
                    ['answer' => 'Ross Tribbiani', 'is_correct' => false],
                ],
            ],

            [
                'title' => "Qui est le colocataire de Joey?",
                'category_id' => 1,
                'level_id' => 1,
                'sous_theme_id' => 2,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Chandler Bing', 'is_correct' => false],
                    ['answer' => 'Monica Geller', 'is_correct' => false],
                    ['answer' => 'Rachel Green', 'is_correct' => false],
                    ['answer' => 'Ross Geller', 'is_correct' => true],
                ],
            ],

            [
                'title' => "Quelle est la profession de Monica?",
                'category_id' => 1,
                'level_id' => 1,
                'sous_theme_id' => 2,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Chef', 'is_correct' => true],
                    ['answer' => 'Actrice', 'is_correct' => false],
                    ['answer' => 'Journaliste', 'is_correct' => false],
                    ['answer' => 'Infirmière', 'is_correct' => false],
                ],
                [
                    'title' => "Quel est le métier de Chandler?",
                    'category_id' => 1,
                    'level_id' => 1,
                    'sous_theme_id' => 2,
                    'user_id' => 1,
                    'answers' => [
                        ['answer' => 'Ingénieur', 'is_correct' => false],
                        ['answer' => 'Avocat', 'is_correct' => true],
                        ['answer' => 'Médecin', 'is_correct' => false],
                        ['answer' => 'Acteur', 'is_correct' => false],
                    ],
                ],

                [
                    'title' => "Quelle est la passion de Ross pour la paléontologie?",
                    'category_id' => 1,
                    'level_id' => 1,
                    'sous_theme_id' => 2,
                    'user_id' => 1,
                    'answers' => [
                        ['answer' => 'Astronomie', 'is_correct' => false],
                        ['answer' => 'Archéologie', 'is_correct' => false],
                        ['answer' => 'Géologie', 'is_correct' => true],
                        ['answer' => 'Botanique', 'is_correct' => false],
                    ],
                ],

                [
                    'title' => "Quelle est la chanson emblématique de la série?",
                    'category_id' => 1,
                    'level_id' => 1,
                    'sous_theme_id' => 2,
                    'user_id' => 1,
                    'answers' => [
                        ['answer' => 'I\'ll Be There for You', 'is_correct' => true],
                        ['answer' => 'Friends Forever', 'is_correct' => false],
                        ['answer' => 'Central Perk Anthem', 'is_correct' => false],
                        ['answer' => 'Smelly Cat', 'is_correct' => false],
                    ],
                ],

                [
                    'title' => "Qui est la meilleure amie de Rachel?",
                    'category_id' => 1,
                    'level_id' => 1,
                    'sous_theme_id' => 2,
                    'user_id' => 1,
                    'answers' => [
                        ['answer' => 'Phoebe', 'is_correct' => false],
                        ['answer' => 'Monica', 'is_correct' => false],
                        ['answer' => 'Joey', 'is_correct' => false],
                        ['answer' => 'Ross', 'is_correct' => true],
                    ],
                ],

                [
                    'title' => "Comment s'appelle le café où ils se retrouvent souvent?",
                    'category_id' => 1,
                    'level_id' => 1,
                    'sous_theme_id' => 2,
                    'user_id' => 1,
                    'answers' => [
                        ['answer' => 'Central Perk', 'is_correct' => true],
                        ['answer' => 'Coffee Central', 'is_correct' => false],
                        ['answer' => 'Perk Place', 'is_correct' => false],
                        ['answer' => 'Friends Café', 'is_correct' => false],
                    ],
                ],

                [
                    'title' => "Quel est le nom du singe de Ross?",
                    'category_id' => 1,
                    'level_id' => 1,
                    'sous_theme_id' => 2,
                    'user_id' => 1,
                    'answers' => [
                        ['answer' => 'George', 'is_correct' => false],
                        ['answer' => 'Joey', 'is_correct' => false],
                        ['answer' => 'Marcel', 'is_correct' => true],
                        ['answer' => 'Bob', 'is_correct' => false],
                    ],
                ],

                [
                    'title' => "Quelle est la peur irrationnelle de Monica?",
                    'category_id' => 1,
                    'level_id' => 1,
                    'sous_theme_id' => 2,
                    'user_id' => 1,
                    'answers' => [
                        ['answer' => 'Peur des clowns', 'is_correct' => false],
                        ['answer' => 'Peur des hauteurs', 'is_correct' => false],
                        ['answer' => 'Peur du noir', 'is_correct' => false],
                        ['answer' => 'Peur des oiseaux', 'is_correct' => true],
                    ],
                    // ... Ajoutez d'autres questions avec leurs réponses
                ],
                [
                    'title' => "Quel acteur joue le rôle de Ross dans la série?",
                    'category_id' => 1,
                    'level_id' => 2,
                    'sous_theme_id' => 2,
                    'user_id' => 1,
                    'answers' => [
                        ['answer' => 'Matt LeBlanc', 'is_correct' => false],
                        ['answer' => 'David Schwimmer', 'is_correct' => true],
                        ['answer' => 'Matthew Perry', 'is_correct' => false],
                        ['answer' => 'Courteney Cox', 'is_correct' => false],
                    ],
                ],

                [
                    'title' => "Quelle est la célèbre réplique de Joey pour draguer les femmes?",
                    'category_id' => 1,
                    'level_id' => 2,
                    'sous_theme_id' => 2,
                    'user_id' => 1,
                    'answers' => [
                        ['answer' => 'How you doin\'?', 'is_correct' => true],
                        ['answer' => 'Hey, baby!', 'is_correct' => false],
                        ['answer' => 'What\'s up, girl?', 'is_correct' => false],
                        ['answer' => 'Nice to meet you.', 'is_correct' => false],
                    ],
                ],

                [
                    'title' => "Quel est le nom du personnage fictif de la série préféré de Joey?",
                    'category_id' => 1,
                    'level_id' => 2,
                    'sous_theme_id' => 2,
                    'user_id' => 1,
                    'answers' => [
                        ['answer' => 'Chandler Bing', 'is_correct' => false],
                        ['answer' => 'Hugsy', 'is_correct' => true],
                        ['answer' => 'Marcel', 'is_correct' => false],
                        ['answer' => 'Geller the Gelinator', 'is_correct' => false],
                    ],
                ],

                [
                    'title' => "Dans quel épisode Ross prononce-t-il accidentellement le nom de Rachel pendant son mariage?",
                    'category_id' => 1,
                    'level_id' => 2,
                    'sous_theme_id' => 2,
                    'user_id' => 1,
                    'answers' => [
                        ['answer' => 'The One with the Prom Video', 'is_correct' => false],
                        ['answer' => 'The One Where No One\'s Ready', 'is_correct' => false],
                        ['answer' => 'The One with Ross\'s Wedding', 'is_correct' => true],
                        ['answer' => 'The Last One', 'is_correct' => false],
                    ],
                ],

                [
                    'title' => "Quel est le nom du personnage de Brad Pitt dans la série?",
                    'category_id' => 1,
                    'level_id' => 2,
                    'sous_theme_id' => 2,
                    'user_id' => 1,
                    'answers' => [
                        ['answer' => 'Doug', 'is_correct' => false],
                        ['answer' => 'Will', 'is_correct' => true],
                        ['answer' => 'Mark', 'is_correct' => false],
                        ['answer' => 'Steve', 'is_correct' => false],
                    ],
                ],

                [
                    'title' => "Qui est le créateur de la série \"Friends\"?",
                    'category_id' => 1,
                    'level_id' => 2,
                    'sous_theme_id' => 2,
                    'user_id' => 1,
                    'answers' => [
                        ['answer' => 'David Crane', 'is_correct' => true],
                        ['answer' => 'Kevin S. Bright', 'is_correct' => false],
                        ['answer' => 'Marta Kauffman', 'is_correct' => true],
                        ['answer' => 'Paulo Horto', 'is_correct' => false],
                    ],
                ],

                [
                    'title' => "Quelle est la devise de Joey pour partager de la nourriture?",
                    'category_id' => 1,
                    'level_id' => 2,
                    'sous_theme_id' => 2,
                    'user_id' => 1,
                    'answers' => [
                        ['answer' => 'Sharing is caring!', 'is_correct' => false],
                        ['answer' => 'Food is love.', 'is_correct' => false],
                        ['answer' => 'Joey doesn\'t share food!', 'is_correct' => true],
                        ['answer' => 'Let\'s all have a bite.', 'is_correct' => false],
                    ],
                ],

                [
                    'title' => "Quel est le nom du café où Rachel travaille au début de la série?",
                    'category_id' => 1,
                    'level_id' => 2,
                    'sous_theme_id' => 2,
                    'user_id' => 1,
                    'answers' => [
                        ['answer' => 'Central Perk', 'is_correct' => false],
                        ['answer' => 'Starbucks', 'is_correct' => false],
                        ['answer' => 'Central Coffee House', 'is_correct' => false],
                        ['answer' => 'Java Joes', 'is_correct' => true],
                    ],
                ],

                [
                    'title' => "Qui est le pire cauchemar de Chandler lorsqu'il s'agit de mariage?",
                    'category_id' => 1,
                    'level_id' => 2,
                    'sous_theme_id' => 2,
                    'user_id' => 1,
                    'answers' => [
                        ['answer' => 'Janice', 'is_correct' => false],
                        ['answer' => 'Monica', 'is_correct' => false],
                        ['answer' => 'Commitment', 'is_correct' => true],
                        ['answer' => 'Wedding vows', 'is_correct' => false],
                    ],
                ],

                [
                    'title' => "Quel est le nom de l'actrice qui joue le rôle de Phoebe?",
                    'category_id' => 1,
                    'level_id' => 2,
                    'sous_theme_id' => 2,
                    'user_id' => 1,
                    'answers' => [
                        ['answer' => 'Jennifer Aniston', 'is_correct' => false],
                        ['answer' => 'Courteney Cox', 'is_correct' => false],
                        ['answer' => 'Lisa Kudrow', 'is_correct' => true],
                        ['answer' => 'Maggie Wheeler', 'is_correct' => false],
                    ],
                ],
                [
                    'title' => "Quel acteur joue le rôle de Ross dans la série?",
                    'category_id' => 1,
                    'level_id' => 3,
                    'sous_theme_id' => 2,
                    'user_id' => 1,
                    'answers' => [
                        ['answer' => 'Matt LeBlanc', 'is_correct' => false],
                        ['answer' => 'David Schwimmer', 'is_correct' => true],
                        ['answer' => 'Matthew Perry', 'is_correct' => false],
                        ['answer' => 'Courteney Cox', 'is_correct' => false],
                    ],
                ],
                [
                    'title' => "Quelle est la célèbre réplique de Joey pour draguer les femmes?",
                    'category_id' => 1,
                    'level_id' => 3,
                    'sous_theme_id' => 2,
                    'user_id' => 1,
                    'answers' => [
                        ['answer' => "How you doin'?", 'is_correct' => true],
                        ['answer' => 'Hey, baby!', 'is_correct' => false],
                        ['answer' => "What's up, girl?", 'is_correct' => false],
                        ['answer' => 'Nice to meet you.', 'is_correct' => false],
                    ],
                ],
                [
                    'title' => "Quel est le nom du personnage fictif de la série préféré de Joey?",
                    'category_id' => 1,
                    'level_id' => 3,
                    'sous_theme_id' => 2,
                    'user_id' => 1,
                    'answers' => [
                        ['answer' => 'Chandler Bing', 'is_correct' => false],
                        ['answer' => 'Hugsy', 'is_correct' => true],
                        ['answer' => 'Marcel', 'is_correct' => false],
                        ['answer' => 'Geller the Gelinator', 'is_correct' => false],
                    ],
                ],
                [
                    'title' => "Dans quel épisode Ross prononce-t-il accidentellement le nom de Rachel pendant son mariage?",
                    'category_id' => 1,
                    'level_id' => 3,
                    'sous_theme_id' => 2,
                    'user_id' => 1,
                    'answers' => [
                        ['answer' => 'The One with All the Thanksgivings', 'is_correct' => false],
                        ['answer' => 'The One with Ross\'s Wedding', 'is_correct' => false],
                        ['answer' => 'The One with the Prom Video', 'is_correct' => false],
                        ['answer' => 'The One with Ross\'s Wedding: Part 2', 'is_correct' => true],
                    ],
                ],
                [
                    'title' => "Quel est le nom du personnage de Brad Pitt dans la série?",
                    'category_id' => 1,
                    'level_id' => 3,
                    'sous_theme_id' => 2,
                    'user_id' => 1,
                    'answers' => [
                        ['answer' => 'Tom', 'is_correct' => false],
                        ['answer' => 'Will', 'is_correct' => false],
                        ['answer' => 'Mike', 'is_correct' => false],
                        ['answer' => 'Will Colbert', 'is_correct' => true],
                    ],
                ],
                [
                    'title' => "Qui est le créateur de la série 'Friends'?",
                    'category_id' => 1,
                    'level_id' => 3,
                    'sous_theme_id' => 2,
                    'user_id' => 1,
                    'answers' => [
                        ['answer' => 'David Crane', 'is_correct' => false],
                        ['answer' => 'Marta Kauffman', 'is_correct' => false],
                        ['answer' => 'David Schwimmer', 'is_correct' => false],
                        ['answer' => 'David Crane et Marta Kauffman', 'is_correct' => true],
                    ],
                ],
                [
                    'title' => "Quelle est la devise de Joey pour partager de la nourriture?",
                    'category_id' => 1,
                    'level_id' => 3,
                    'sous_theme_id' => 2,
                    'user_id' => 1,
                    'answers' => [
                        ['answer' => 'Tous pour un, un pour tous', 'is_correct' => false],
                        ['answer' => 'Pas de partage, pas de souci', 'is_correct' => false],
                        ['answer' => 'Si tu manges, je mange', 'is_correct' => false],
                        ['answer' => 'Joey ne partage pas la nourriture!', 'is_correct' => true],
                    ],
                ],
                [
                    'title' => "Quel est le nom du café où Rachel travaille au début de la série?",
                    'category_id' => 1,
                    'level_id' => 3,
                    'sous_theme_id' => 2,
                    'user_id' => 1,
                    'answers' => [
                        ['answer' => 'Central Perk', 'is_correct' => true],
                        ['answer' => 'Starbucks', 'is_correct' => false],
                        ['answer' => 'Central Cafe', 'is_correct' => false],
                        ['answer' => 'Perk Place', 'is_correct' => false],
                    ],
                ],
                [
                    'title' => "Qui est le pire cauchemar de Chandler lorsqu'il s'agit de mariage?",
                    'category_id' => 1,
                    'level_id' => 3,
                    'sous_theme_id' => 2,
                    'user_id' => 1,
                    'answers' => [
                        ['answer' => 'Les animaux', 'is_correct' => false],
                        ['answer' => 'La danse', 'is_correct' => false],
                        ['answer' => 'Les photos', 'is_correct' => false],
                        ['answer' => 'Michael Flatley, Lord of the Dance', 'is_correct' => true],
                    ],
                ],
                [
                    'title' => "Quel est le nom de l'actrice qui joue le rôle de Phoebe?",
                    'category_id' => 1,
                    'level_id' => 3,
                    'sous_theme_id' => 2,
                    'user_id' => 1,
                    'answers' => [
                        ['answer' => 'Jennifer Aniston', 'is_correct' => false],
                        ['answer' => 'Courteney Cox', 'is_correct' => false],
                        ['answer' => 'Lisa Kudrow', 'is_correct' => true],
                        ['answer' => 'Maggie Wheeler', 'is_correct' => false],
                    ],
                ],
                [
                    'title' => "Dans combien de saisons 'Friends' a-t-elle été diffusée?",
                    'category_id' => 1,
                    'level_id' => 4,
                    'sous_theme_id' => 2,
                    'user_id' => 1,
                    'answers' => [
                        ['answer' => '8', 'is_correct' => false],
                        ['answer' => '9', 'is_correct' => false],
                        ['answer' => '10', 'is_correct' => true],
                        ['answer' => '12', 'is_correct' => false],
                    ],
                ],
                [
                    'title' => "Quelle est la signification du tatouage de Phoebe?",
                    'category_id' => 1,
                    'level_id' => 4,
                    'sous_theme_id' => 2,
                    'user_id' => 1,
                    'answers' => [
                        ['answer' => 'Un symbole de paix', 'is_correct' => false],
                        ['answer' => 'Un logo d\'entreprise', 'is_correct' => true],
                        ['answer' => 'Un hommage à sa grand-mère', 'is_correct' => false],
                        ['answer' => 'Un dessin aléatoire', 'is_correct' => false],
                    ],
                ],
                [
                    'title' => "Quelle est la marque du canapé que Ross et Chandler portent jusqu'à l'appartement?",
                    'category_id' => 1,
                    'level_id' => 4,
                    'sous_theme_id' => 2,
                    'user_id' => 1,
                    'answers' => [
                        ['answer' => 'Ikea', 'is_correct' => false],
                        ['answer' => 'La-Z-Boy', 'is_correct' => false],
                        ['answer' => 'Pottery Barn', 'is_correct' => true],
                        ['answer' => 'Ashley Furniture', 'is_correct' => false],
                    ],
                ],
                [
                    'title' => "Quelle est la véritable raison pour laquelle Monica et Chandler décident d'adopter un enfant?",
                    'category_id' => 1,
                    'level_id' => 4,
                    'sous_theme_id' => 2,
                    'user_id' => 1,
                    'answers' => [
                        ['answer' => 'Problèmes de fertilité de Monica', 'is_correct' => false],
                        ['answer' => 'Refus d\'adopter un chien', 'is_correct' => true],
                        ['answer' => 'Pression de la famille', 'is_correct' => false],
                        ['answer' => 'Décision spontanée', 'is_correct' => false],
                    ],
                ],
                [
                    'title' => "Quel est le nom de l'acteur invité qui joue le père de Ross et Monica?",
                    'category_id' => 1,
                    'level_id' => 4,
                    'sous_theme_id' => 2,
                    'user_id' => 1,
                    'answers' => [
                        ['answer' => 'Bruce Willis', 'is_correct' => false],
                        ['answer' => 'Tom Selleck', 'is_correct' => false],
                        ['answer' => 'John Stamos', 'is_correct' => false],
                        ['answer' => 'Elliott Gould', 'is_correct' => true],
                    ],
                ],
                [
                    'title' => "Quelle est la théorie populaire sur les personnages de 'Friends' concernant la série 'Mad About You'?",
                    'category_id' => 1,
                    'level_id' => 4,
                    'sous_theme_id' => 2,
                    'user_id' => 1,
                    'answers' => [
                        ['answer' => 'Les personnages de \'Friends\' sont inspirés par ceux de \'Mad About You\'', 'is_correct' => true],
                        ['answer' => 'Les personnages de \'Mad About You\' sont inspirés par ceux de \'Friends\'', 'is_correct' => false],
                        ['answer' => 'Les deux séries partagent le même univers fictionnel', 'is_correct' => false],
                        ['answer' => 'Il n\'y a aucune connexion entre les deux séries', 'is_correct' => false],
                    ],
                ],
                [
                    'title' => "Qui est la personne qui fait le plus de caméos dans la série?",
                    'category_id' => 1,
                    'level_id' => 4,
                    'sous_theme_id' => 2,
                    'user_id' => 1,
                    'answers' => [
                        ['answer' => 'Brad Pitt', 'is_correct' => false],
                        ['answer' => 'Tom Selleck', 'is_correct' => true],
                        ['answer' => 'Bruce Willis', 'is_correct' => false],
                        ['answer' => 'Jon Favreau', 'is_correct' => false],
                    ],
                ],
                [
                    'title' => "Quel est le nom du personnage que Phoebe prétend être pour aider Joey à surmonter ses peurs?",
                    'category_id' => 1,
                    'level_id' => 4,
                    'sous_theme_id' => 2,
                    'user_id' => 1,
                    'answers' => [
                        ['answer' => 'Regina Phalange', 'is_correct' => true],
                        ['answer' => 'Princesse Consuela Banana-Hammock', 'is_correct' => false],
                        ['answer' => 'Anita Mentions Légales', 'is_correct' => false],
                        ['answer' => 'Crap Bag', 'is_correct' => false],
                    ],
                ],
                [
                    'title' => "Quel est le titre du dernier épisode de la série?",
                    'category_id' => 1,
                    'level_id' => 4,
                    'sous_theme_id' => 2,
                    'user_id' => 1,
                    'answers' => [
                        ['answer' => 'The Last One', 'is_correct' => true],
                        ['answer' => 'The End of an Era', 'is_correct' => false],
                        ['answer' => 'Goodbye, Friends', 'is_correct' => false],
                        ['answer' => 'Farewell, Central Perk', 'is_correct' => false],
                    ],
                ],
                [
                    'title' => "Quel est le nom du livre que Joey a mis dans le congélateur?",
                    'category_id' => 1,
                    'level_id' => 4,
                    'sous_theme_id' => 2,
                    'user_id' => 1,
                    'answers' => [
                        ['answer' => 'Little Women', 'is_correct' => false],
                        ['answer' => 'The Shining', 'is_correct' => true],
                        ['answer' => 'Pride and Prejudice', 'is_correct' => false],
                        ['answer' => 'Moby-Dick', 'is_correct' => false],
                    ],
                ],
                [
                    'title' => "Qui a chanté la chanson du générique de 'Friends'?",
                    'category_id' => 1,
                    'level_id' => 2,
                    'sous_theme_id' => 2,
                    'user_id' => 1,
                    'answers' => [
                        ['answer' => 'The Rembrandts', 'is_correct' => true],
                        ['answer' => 'The Beatles', 'is_correct' => false],
                        ['answer' => 'Coldplay', 'is_correct' => false],
                        ['answer' => 'U2', 'is_correct' => false],
                    ],
                ],
                [
                    'title' => "Où se déroule principalement l'action de la série?",
                    'category_id' => 1,
                    'level_id' => 2,
                    'sous_theme_id' => 2,
                    'user_id' => 1,
                    'answers' => [
                        ['answer' => 'New York', 'is_correct' => true],
                        ['answer' => 'Los Angeles', 'is_correct' => false],
                        ['answer' => 'Chicago', 'is_correct' => false],
                        ['answer' => 'London', 'is_correct' => false],
                    ],
                ],
                [
                    'title' => "Quel est le premier mot de Ben, le fils de Ross?",
                    'category_id' => 1,
                    'level_id' => 2,
                    'sous_theme_id' => 2,
                    'user_id' => 1,
                    'answers' => [
                        ['answer' => 'Hi', 'is_correct' => true],
                        ['answer' => 'Dada', 'is_correct' => false],
                        ['answer' => 'Bye', 'is_correct' => false],
                        ['answer' => 'Mama', 'is_correct' => false],
                    ],
                ],
                [
                    'title' => "Quel est le plat préféré de Joey?",
                    'category_id' => 1,
                    'level_id' => 2,
                    'sous_theme_id' => 2,
                    'user_id' => 1,
                    'answers' => [
                        ['answer' => 'Pizza', 'is_correct' => true],
                        ['answer' => 'Burger', 'is_correct' => false],
                        ['answer' => 'Pasta', 'is_correct' => false],
                        ['answer' => 'Ice Cream', 'is_correct' => false],
                    ],
                ],
                [
                    'title' => "Quel est le nom de la danse de Ross qui est devenue célèbre?",
                    'category_id' => 1,
                    'level_id' => 2,
                    'sous_theme_id' => 2,
                    'user_id' => 1,
                    'answers' => [
                        ['answer' => 'The Routine', 'is_correct' => true],
                        ['answer' => 'The Cha-Cha Slide', 'is_correct' => false],
                        ['answer' => 'The Macarena', 'is_correct' => false],
                        ['answer' => 'The Moonwalk', 'is_correct' => false],
                    ],
                ],
                [
                    'title' => "Quel est le nom du personnage joué par Jon Favreau dans la série?",
                    'category_id' => 1,
                    'level_id' => 2,
                    'sous_theme_id' => 2,
                    'user_id' => 1,
                    'answers' => [
                        ['answer' => 'Pete Becker', 'is_correct' => true],
                        ['answer' => 'Richard Burke', 'is_correct' => false],
                        ['answer' => 'Barry Farber', 'is_correct' => false],
                        ['answer' => 'David the Scientist Guy', 'is_correct' => false],
                    ],
                ],
                [
                    'title' => "Quel est le nom de la sœur de Phoebe qui apparaît occasionnellement dans la série?",
                    'category_id' => 1,
                    'level_id' => 2,
                    'sous_theme_id' => 2,
                    'user_id' => 1,
                    'answers' => [
                        ['answer' => 'Ursula Buffay', 'is_correct' => true],
                        ['answer' => 'Amy Green', 'is_correct' => false],
                        ['answer' => 'Jill Green', 'is_correct' => false],
                        ['answer' => 'Janice Litman', 'is_correct' => false],
                    ],
                ],
                [
                    'title' => "Dans quel État américain Monica, Ross, Rachel, Chandler, Joey, et Phoebe ont-ils grandi?",
                    'category_id' => 1,
                    'level_id' => 2,
                    'sous_theme_id' => 2,
                    'user_id' => 1,
                    'answers' => [
                        ['answer' => 'New York', 'is_correct' => true],
                        ['answer' => 'California', 'is_correct' => false],
                        ['answer' => 'Texas', 'is_correct' => false],
                        ['answer' => 'Florida', 'is_correct' => false],
                    ],
                ],
                [
                    'title' => "Quel est le nom de la femme qui donne naissance au fils de Monica et Chandler?",
                    'category_id' => 1,
                    'level_id' => 2,
                    'sous_theme_id' => 2,
                    'user_id' => 1,
                    'answers' => [
                        ['answer' => 'Erica', 'is_correct' => true],
                        ['answer' => 'Emily', 'is_correct' => false],
                        ['answer' => 'Estelle', 'is_correct' => false],
                        ['answer' => 'Evelyn', 'is_correct' => false],
                    ],
                ],
                [
                    'title' => "Quel est le nom de la pièce secrète de Monica et Chandler dans leur nouvel appartement?",
                    'category_id' => 1,
                    'level_id' => 2,
                    'sous_theme_id' => 2,
                    'user_id' => 1,
                    'answers' => [
                        ['answer' => 'La Chambre de l\'Hilarité', 'is_correct' => true],
                        ['answer' => 'Le Refuge des Amoureux', 'is_correct' => false],
                        ['answer' => 'Le Sanctuaire du Rire', 'is_correct' => false],
                        ['answer' => 'Le Coin Câlin', 'is_correct' => false],
                    ],
                ],
                [
                    'title' => "Quel est le nom du père de Ross et Monica?",
                    'category_id' => 1,
                    'level_id' => 1,
                    'sous_theme_id' => 2,
                    'user_id' => 1,
                    'answers' => [
                        ['answer' => 'Jack Geller', 'is_correct' => true],
                        ['answer' => 'Richard Geller', 'is_correct' => false],
                        ['answer' => 'Charles Bing', 'is_correct' => false],
                        ['answer' => 'Frank Buffay Sr.', 'is_correct' => false],
                    ],
                ],
                [
                    'title' => "Quelle est la profession de Rachel au début de la série?",
                    'category_id' => 1,
                    'level_id' => 1,
                    'sous_theme_id' => 2,
                    'user_id' => 1,
                    'answers' => [
                        ['answer' => 'Serveuse', 'is_correct' => true],
                        ['answer' => 'Styliste', 'is_correct' => false],
                        ['answer' => 'Avocate', 'is_correct' => false],
                        ['answer' => 'Journaliste', 'is_correct' => false],
                    ],
                ],
                [
                    'title' => "Quel est le nom de l'ex-femme de Ross?",
                    'category_id' => 1,
                    'level_id' => 1,
                    'sous_theme_id' => 2,
                    'user_id' => 1,
                    'answers' => [
                        ['answer' => 'Carol Willick', 'is_correct' => true],
                        ['answer' => 'Janice Litman', 'is_correct' => false],
                        ['answer' => 'Emily Waltham', 'is_correct' => false],
                        ['answer' => 'Mona', 'is_correct' => false],
                    ],
                ],
                [
                    'title' => "Comment s'appelle la sœur jumelle de Phoebe?",
                    'category_id' => 1,
                    'level_id' => 1,
                    'sous_theme_id' => 2,
                    'user_id' => 1,
                    'answers' => [
                        ['answer' => 'Ursula Buffay', 'is_correct' => true],
                        ['answer' => 'Lily Buffay', 'is_correct' => false],
                        ['answer' => 'Dana Buffay', 'is_correct' => false],
                        ['answer' => 'Cathy Buffay', 'is_correct' => false],
                    ],
                ],
                [
                    'title' => "Quel est le nom du personnage joué par Jon Favreau dans la série?",
                    'category_id' => 1,
                    'level_id' => 1,
                    'sous_theme_id' => 2,
                    'user_id' => 1,
                    'answers' => [
                        ['answer' => 'Pete Becker', 'is_correct' => true],
                        ['answer' => 'Richard Burke', 'is_correct' => false],
                        ['answer' => 'Barry Farber', 'is_correct' => false],
                        ['answer' => 'David the Scientist Guy', 'is_correct' => false],
                    ],
                ],
                [
                    'title' => "Qui est la première personne à découvrir la relation secrète entre Monica et Chandler?",
                    'category_id' => 1,
                    'level_id' => 1,
                    'sous_theme_id' => 2,
                    'user_id' => 1,
                    'answers' => [
                        ['answer' => 'Joey Tribbiani', 'is_correct' => true],
                        ['answer' => 'Phoebe Buffay', 'is_correct' => false],
                        ['answer' => 'Rachel Green', 'is_correct' => false],
                        ['answer' => 'Ross Geller', 'is_correct' => false],
                    ],
                ],
                [
                    'title' => "Quel est le prénom de la petite amie de Ross qui a une voix particulièrement aiguë?",
                    'category_id' => 1,
                    'level_id' => 1,
                    'sous_theme_id' => 2,
                    'user_id' => 1,
                    'answers' => [
                        ['answer' => 'Bonnie', 'is_correct' => true],
                        ['answer' => 'Emily', 'is_correct' => false],
                        ['answer' => 'Janice', 'is_correct' => false],
                        ['answer' => 'Chloe', 'is_correct' => false],
                    ],
                ],
                [
                    'title' => "Quel est le nom de la chanson que Ross déteste mais que les autres adorent?",
                    'category_id' => 1,
                    'level_id' => 1,
                    'sous_theme_id' => 2,
                    'user_id' => 1,
                    'answers' => [
                        ['answer' => 'Baby Got Back', 'is_correct' => true],
                        ['answer' => 'I Will Always Love You', 'is_correct' => false],
                        ['answer' => 'Wannabe', 'is_correct' => false],
                        ['answer' => 'Wonderwall', 'is_correct' => false],
                    ],
                ],
                [
                    'title' => "Qui est l'architecte de la maison où Monica et Chandler veulent emménager?",
                    'category_id' => 1,
                    'level_id' => 1,
                    'sous_theme_id' => 2,
                    'user_id' => 1,
                    'answers' => [
                        ['answer' => 'Gary', 'is_correct' => true],
                        ['answer' => 'Frank Jr.', 'is_correct' => false],
                        ['answer' => 'Richard', 'is_correct' => false],
                        ['answer' => 'Tag', 'is_correct' => false],
                    ],
                ],
                [
                    'title' => "Quel est le nom du personnage qui gagne une médaille d'or dans la compétition de gladiateurs?",
                    'category_id' => 1,
                    'level_id' => 1,
                    'sous_theme_id' => 2,
                    'user_id' => 1,
                    'answers' => [
                        ['answer' => 'Joey Tribbiani', 'is_correct' => true],
                        ['answer' => 'Chandler Bing', 'is_correct' => false],
                        ['answer' => 'Monica Geller', 'is_correct' => false],
                        ['answer' => 'Rachel Green', 'is_correct' => false],
                    ],
                ],
                [
                    'title' => "Quel est le surnom de Chandler dans la saison 4?",
                    'category_id' => 1,
                    'level_id' => 2,
                    'sous_theme_id' => 2,
                    'user_id' => 1,
                    'answers' => [
                        ['answer' => 'M. Toad', 'is_correct' => true],
                        ['answer' => 'Big Daddy', 'is_correct' => false],
                        ['answer' => 'Chan-Chan Man', 'is_correct' => false],
                        ['answer' => 'Bingster', 'is_correct' => false],
                    ],
                ],
                [
                    'title' => "Comment s'appelle la fille que Ross embrasse pendant un blackout?",
                    'category_id' => 1,
                    'level_id' => 2,
                    'sous_theme_id' => 2,
                    'user_id' => 1,
                    'answers' => [
                        ['answer' => 'Chloe', 'is_correct' => true],
                        ['answer' => 'Emily', 'is_correct' => false],
                        ['answer' => 'Janice', 'is_correct' => false],
                        ['answer' => 'Bonnie', 'is_correct' => false],
                    ],
                ],
                [
                    'title' => "Quel est le nom du psychologue que Phoebe rencontre pour aider ses amis?",
                    'category_id' => 1,
                    'level_id' => 2,
                    'sous_theme_id' => 2,
                    'user_id' => 1,
                    'answers' => [
                        ['answer' => 'Roger', 'is_correct' => true],
                        ['answer' => 'Duncan', 'is_correct' => false],
                        ['answer' => 'Stan', 'is_correct' => false],
                        ['answer' => 'Malcolm', 'is_correct' => false],
                    ],
                ],
                [
                    'title' => "Quel est le nom du personnage joué par Bruce Willis dans la série?",
                    'category_id' => 1,
                    'level_id' => 2,
                    'sous_theme_id' => 2,
                    'user_id' => 1,
                    'answers' => [
                        ['answer' => 'Paul Stevens', 'is_correct' => true],
                        ['answer' => 'Tommy', 'is_correct' => false],
                        ['answer' => 'Ross Geller', 'is_correct' => false],
                        ['answer' => 'Pete Becker', 'is_correct' => false],
                    ],
                ],
                [
                    'title' => "Quelle est la profession du petit ami de Phoebe, David?",
                    'category_id' => 1,
                    'level_id' => 2,
                    'sous_theme_id' => 2,
                    'user_id' => 1,
                    'answers' => [
                        ['answer' => 'Scientifique', 'is_correct' => true],
                        ['answer' => 'Acteur', 'is_correct' => false],
                        ['answer' => 'Médecin', 'is_correct' => false],
                        ['answer' => 'Avocat', 'is_correct' => false],
                    ],
                ],
                [
                    'title' => "Quel est le nom du producteur de télévision qui engage Joey pour son propre show?",
                    'category_id' => 1,
                    'level_id' => 2,
                    'sous_theme_id' => 2,
                    'user_id' => 1,
                    'answers' => [
                        ['answer' => 'Leonard Hayes', 'is_correct' => true],
                        ['answer' => 'Warren Beatty', 'is_correct' => false],
                        ['answer' => 'Roger Thompson', 'is_correct' => false],
                        ['answer' => 'Ryan Ridley', 'is_correct' => false],
                    ],
                ],
                [
                    'title' => "Quel est le plat spécial de Monica?",
                    'category_id' => 1,
                    'level_id' => 2,
                    'sous_theme_id' => 2,
                    'user_id' => 1,
                    'answers' => [
                        ['answer' => 'Macaroni au fromage', 'is_correct' => true],
                        ['answer' => 'Tarte aux pommes', 'is_correct' => false],
                        ['answer' => 'Poulet rôti', 'is_correct' => false],
                        ['answer' => 'Lasagnes', 'is_correct' => false],
                    ],
                ],


                [
                    'title' => "Dans quel épisode Ross et Rachel rompent-ils officiellement?",
                    'category_id' => 1,
                    'level_id' => 2,
                    'sous_theme_id' => 2,
                    'user_id' => 1,
                    'answers' => [
                        ['answer' => 'The One with the Morning After', 'is_correct' => true],
                        ['answer' => 'The One Where Old Yeller Dies', 'is_correct' => false],
                        ['answer' => 'The Last One', 'is_correct' => false],
                        ['answer' => 'The One with All the Thanksgivings', 'is_correct' => false],
                    ],
                ],
                [
                    'title' => "Quelle est la signification du cadre violet sur la porte de Monica et Chandler?",
                    'category_id' => 1,
                    'level_id' => 3,
                    'sous_theme_id' => 2,
                    'user_id' => 1,
                    'answers' => [
                        ['answer' => 'Cadeau de mariage', 'is_correct' => true],
                        ['answer' => 'Porte bonheur', 'is_correct' => false],
                        ['answer' => 'Décoration aléatoire', 'is_correct' => false],
                        ['answer' => 'Erreur de peinture', 'is_correct' => false],
                    ],
                ],
                [
                    'title' => "Quel est le nom du groupe de rock dans lequel jouait Phoebe?",
                    'category_id' => 1,
                    'level_id' => 3,
                    'sous_theme_id' => 2,
                    'user_id' => 1,
                    'answers' => [
                        ['answer' => 'Smelly Cat', 'is_correct' => true],
                        ['answer' => 'The Rembrandts', 'is_correct' => false],
                        ['answer' => 'No Way Jose', 'is_correct' => false],
                        ['answer' => 'Central Perk Trio', 'is_correct' => false],
                    ],
                ],
                [
                    'title' => "Quel est le nom de la mère porteuse de l'enfant de Monica et Chandler?",
                    'category_id' => 1,
                    'level_id' => 3,
                    'sous_theme_id' => 2,
                    'user_id' => 1,
                    'answers' => [
                        ['answer' => 'Erica', 'is_correct' => true],
                        ['answer' => 'Claudia', 'is_correct' => false],
                        ['answer' => 'Alice', 'is_correct' => false],
                        ['answer' => 'Joanna', 'is_correct' => false],
                    ],
                ],
                [
                    'title' => "Quelle est la première phrase complète de Janice, la petite amie de Chandler?",
                    'category_id' => 1,
                    'level_id' => 3,
                    'sous_theme_id' => 2,
                    'user_id' => 1,
                    'answers' => [
                        ['answer' => 'Oh... mon... Dieu!', 'is_correct' => true],
                        ['answer' => 'Tu es tellement drôle, Chandler!', 'is_correct' => false],
                        ['answer' => 'Je t\'aime, Chandler Bing!', 'is_correct' => false],
                        ['answer' => 'Salut, Chandler, ça va?', 'is_correct' => false],
                    ],
                ],
                [
                    'title' => "Dans quel épisode Chandler et Monica se rendent-ils compte qu'ils ne peuvent pas concevoir d'enfants naturellement?",
                    'category_id' => 1,
                    'level_id' => 3,
                    'sous_theme_id' => 2,
                    'user_id' => 1,
                    'answers' => [
                        ['answer' => 'The One with the Fertility Test', 'is_correct' => true],
                        ['answer' => 'The Last One', 'is_correct' => false],
                        ['answer' => 'The One with Monica and Chandler\'s Wedding', 'is_correct' => false],
                        ['answer' => 'The One with All the Thanksgivings', 'is_correct' => false],
                    ],
                ],
                [
                    'title' => "Quel est le nom du personnage que Ross joue au réveillon du Nouvel An?",
                    'category_id' => 1,
                    'level_id' => 3,
                    'sous_theme_id' => 2,
                    'user_id' => 1,
                    'answers' => [
                        ['answer' => 'Armstrong', 'is_correct' => true],
                        ['answer' => 'The Holiday Armadillo', 'is_correct' => false],
                        ['answer' => 'Santa Claus', 'is_correct' => false],
                        ['answer' => 'Superman', 'is_correct' => false],
                    ],
                ],
                [
                    'title' => "Quel est le nom de l'acteur qui joue Richard, l'ex-petit ami de Monica?",
                    'category_id' => 1,
                    'level_id' => 3,
                    'sous_theme_id' => 2,
                    'user_id' => 1,
                    'answers' => [
                        ['answer' => 'Tom Selleck', 'is_correct' => true],
                        ['answer' => 'Bruce Willis', 'is_correct' => false],
                        ['answer' => 'George Clooney', 'is_correct' => false],
                        ['answer' => 'Jon Favreau', 'is_correct' => false],
                    ],
                ],
                [
                    'title' => "Quel est le nom de la société pour laquelle Chandler travaille?",
                    'category_id' => 1,
                    'level_id' => 3,
                    'sous_theme_id' => 2,
                    'user_id' => 1,
                    'answers' => [
                        ['answer' => 'Morgan Stanley', 'is_correct' => true],
                        ['answer' => 'IBM', 'is_correct' => false],
                        ['answer' => 'Microsoft', 'is_correct' => false],
                        ['answer' => 'Wentworth', 'is_correct' => false],
                    ],
                ],
                [
                    'title' => "Quel est le prénom de la sœur de Rachel?",
                    'category_id' => 1,
                    'level_id' => 3,
                    'sous_theme_id' => 2,
                    'user_id' => 1,
                    'answers' => [
                        ['answer' => 'Jill', 'is_correct' => true],
                        ['answer' => 'Amy', 'is_correct' => false],
                        ['answer' => 'Emily', 'is_correct' => false],
                        ['answer' => 'Janice', 'is_correct' => false],
                    ],
                ],
                [
                    'title' => "Quel est le titre de la chanson interprétée par Phoebe dans le Central Perk?",
                    'category_id' => 1,
                    'level_id' => 3,
                    'sous_theme_id' => 2,
                    'user_id' => 1,
                    'answers' => [
                        ['answer' => 'Smelly Cat', 'is_correct' => true],
                        ['answer' => 'I\'ll Be There for You', 'is_correct' => false],
                        ['answer' => 'Wonderful Tonight', 'is_correct' => false],
                        ['answer' => 'Creep', 'is_correct' => false],
                    ],
                ],
                [
                    'title' => "Qui est l'auteur de la chanson 'Smelly Cat'?",
                    'category_id' => 1,
                    'level_id' => 3,
                    'sous_theme_id' => 2,
                    'user_id' => 1,
                    'answers' => [
                        ['answer' => 'Phoebe Buffay', 'is_correct' => true],
                        ['answer' => 'Paul Rudd', 'is_correct' => false],
                        ['answer' => 'Ross Geller', 'is_correct' => false],
                        ['answer' => 'Monica Geller', 'is_correct' => false],
                    ],
                ],
                [
                    'title' => "Quelle est la phobie de Rachel?",
                    'category_id' => 1,
                    'level_id' => 3,
                    'sous_theme_id' => 2,
                    'user_id' => 1,
                    'answers' => [
                        ['answer' => 'Peur des animaux', 'is_correct' => true],
                        ['answer' => 'Peur des hauteurs', 'is_correct' => false],
                        ['answer' => 'Peur des araignées', 'is_correct' => false],
                        ['answer' => 'Peur du noir', 'is_correct' => false],
                    ],
                ],
                [
                    'title' => "Quel acteur célèbre joue le rôle du 'mariage' de Phoebe dans un épisode?",
                    'category_id' => 1,
                    'level_id' => 3,
                    'sous_theme_id' => 2,
                    'user_id' => 1,
                    'answers' => [
                        ['answer' => 'Sean Penn', 'is_correct' => true],
                        ['answer' => 'Brad Pitt', 'is_correct' => false],
                        ['answer' => 'Tom Hanks', 'is_correct' => false],
                        ['answer' => 'George Clooney', 'is_correct' => false],
                    ],
                ],
                [
                    'title' => "Quel est le nom du personnage joué par Jennifer Coolidge, la colocataire de Phoebe?",
                    'category_id' => 1,
                    'level_id' => 3,
                    'sous_theme_id' => 2,
                    'user_id' => 1,
                    'answers' => [
                        ['answer' => 'Amanda', 'is_correct' => true],
                        ['answer' => 'Janice', 'is_correct' => false],
                        ['answer' => 'Emily', 'is_correct' => false],
                        ['answer' => 'Estelle', 'is_correct' => false],
                    ],
                ],
                [
                    'title' => "Quel est le nom du personnage interprété par Sean Penn dans la série?",
                    'category_id' => 1,
                    'level_id' => 3,
                    'sous_theme_id' => 2,
                    'user_id' => 1,
                    'answers' => [
                        ['answer' => 'Eric', 'is_correct' => true],
                        ['answer' => 'Gary', 'is_correct' => false],
                        ['answer' => 'Charlie', 'is_correct' => false],
                        ['answer' => 'Frank', 'is_correct' => false],
                    ],
                ],
                [
                    'title' => "Quelle est la marque de la machine à café dans le bureau de Chandler et Rachel?",
                    'category_id' => 1,
                    'level_id' => 3,
                    'sous_theme_id' => 2,
                    'user_id' => 1,
                    'answers' => [
                        ['answer' => 'Moccamaster', 'is_correct' => true],
                        ['answer' => 'Keurig', 'is_correct' => false],
                        ['answer' => 'Nespresso', 'is_correct' => false],
                        ['answer' => 'Breville', 'is_correct' => false],
                    ],
                ],
                [
                    'title' => "Quel est le nom du restaurant où Monica travaille comme chef?",
                    'category_id' => 1,
                    'level_id' => 3,
                    'sous_theme_id' => 2,
                    'user_id' => 1,
                    'answers' => [
                        ['answer' => 'Javu', 'is_correct' => true],
                        ['answer' => 'Central Perk', 'is_correct' => false],
                        ['answer' => 'Allesandro\'s', 'is_correct' => false],
                        ['answer' => 'Mama\'s Little Bakery', 'is_correct' => false],
                    ],
                ],
                [
                    'title' => "Quel est le prénom du fils adoptif de Monica et Chandler?",
                    'category_id' => 1,
                    'level_id' => 3,
                    'sous_theme_id' => 2,
                    'user_id' => 1,
                    'answers' => [
                        ['answer' => 'Jack', 'is_correct' => true],
                        ['answer' => 'Ben', 'is_correct' => false],
                        ['answer' => 'James', 'is_correct' => false],
                        ['answer' => 'David', 'is_correct' => false],
                    ],
                ],
                [
                    'title' => "Quelle est la première ligne de la chanson du générique de 'Friends'?",
                    'category_id' => 1,
                    'level_id' => 3,
                    'sous_theme_id' => 2,
                    'user_id' => 1,
                    'answers' => [
                        ['answer' => 'I\'ll be there for you', 'is_correct' => true],
                        ['answer' => 'So no one told you life was gonna be this way', 'is_correct' => false],
                        ['answer' => 'Your job\'s a joke, you\'re broke, your love life\'s D.O.A.', 'is_correct' => false],
                        ['answer' => 'It\'s like you\'re always stuck in second gear', 'is_correct' => false],
                    ],
                ],
                [
                    'title' => "Quel est le nom du réalisateur de la série 'Friends'?",
                    'category_id' => 1,
                    'level_id' => 3,
                    'sous_theme_id' => 2,
                    'user_id' => 1,
                    'answers' => [
                        ['answer' => 'Kevin S. Bright', 'is_correct' => true],
                        ['answer' => 'David Crane', 'is_correct' => false],
                        ['answer' => 'Marta Kauffman', 'is_correct' => false],
                        ['answer' => 'James Burrows', 'is_correct' => false],
                    ],
                ],
                [
                    'title' => "Qui a remporté le titre de Rookie de l'Année en 2020?",
                    'category_id' => 1,
                    'level_id' => 1,
                    'sous_theme_id' => 3,
                    'user_id' => 1,
                    'answers' => [
                        ['answer' => 'Zion Williamson', 'is_correct' => false],
                        ['answer' => 'Ja Morant', 'is_correct' => true],
                        ['answer' => 'Rui Hachimura', 'is_correct' => false],
                        ['answer' => 'Tyler Herro', 'is_correct' => false],
                    ],
                ],

                [
                    'title' => "Quel joueur de la NBA est également connu sous le surnom 'The Unicorn'?",
                    'category_id' => 1,
                    'level_id' => 1,
                    'sous_theme_id' => 3,
                    'user_id' => 1,
                    'answers' => [
                        ['answer' => 'LeBron James', 'is_correct' => false],
                        ['answer' => 'Kevin Durant', 'is_correct' => true],
                        ['answer' => 'Kawhi Leonard', 'is_correct' => false],
                        ['answer' => 'Giannis Antetokounmpo', 'is_correct' => false],
                    ],
                ],

                [
                    'title' => "Combien d'équipes participent aux séries éliminatoires de la NBA?",
                    'category_id' => 1,
                    'level_id' => 1,
                    'sous_theme_id' => 3,
                    'user_id' => 1,
                    'answers' => [
                        ['answer' => '16', 'is_correct' => true],
                        ['answer' => '12', 'is_correct' => false],
                        ['answer' => '20', 'is_correct' => false],
                        ['answer' => '24', 'is_correct' => false],
                    ],
                ],

                [
                    'title' => "Quel joueur est souvent appelé 'The King'?",
                    'category_id' => 1,
                    'level_id' => 1,
                    'sous_theme_id' => 3,
                    'user_id' => 1,
                    'answers' => [
                        ['answer' => 'LeBron James', 'is_correct' => true],
                        ['answer' => 'Kevin Durant', 'is_correct' => false],
                        ['answer' => 'Kawhi Leonard', 'is_correct' => false],
                        ['answer' => 'Stephen Curry', 'is_correct' => false],
                    ],
                ],

                [
                    'title' => "Quelle équipe de la NBA est basée à Philadelphie?",
                    'category_id' => 1,
                    'level_id' => 1,
                    'sous_theme_id' => 3,
                    'user_id' => 1,
                    'answers' => [
                        ['answer' => 'Miami Heat', 'is_correct' => false],
                        ['answer' => 'Los Angeles Lakers', 'is_correct' => false],
                        ['answer' => 'Philadelphia 76ers', 'is_correct' => true],
                        ['answer' => 'Boston Celtics', 'is_correct' => false],
                    ],
                ],

                [
                    'title' => "Qui détient le record du plus grand nombre de tirs à trois points réussis en une seule saison régulière?",
                    'category_id' => 1,
                    'level_id' => 1,
                    'sous_theme_id' => 3,
                    'user_id' => 1,
                    'answers' => [
                        ['answer' => 'Stephen Curry', 'is_correct' => true],
                        ['answer' => 'Klay Thompson', 'is_correct' => false],
                        ['answer' => 'Ray Allen', 'is_correct' => false],
                        ['answer' => 'James Harden', 'is_correct' => false],
                    ],
                ],

                [
                    'title' => "Combien de fois Stephen Curry a-t-il remporté le titre de MVP de la saison régulière?",
                    'category_id' => 1,
                    'level_id' => 1,
                    'sous_theme_id' => 3,
                    'user_id' => 1,
                    'answers' => [
                        ['answer' => '1', 'is_correct' => false],
                        ['answer' => '2', 'is_correct' => true],
                        ['answer' => '3', 'is_correct' => false],
                        ['answer' => '0', 'is_correct' => false],
                    ],
                ],

                [
                    'title' => "Quel joueur a été choisi en deuxième position lors de la draft NBA en 2017?",
                    'category_id' => 1,
                    'level_id' => 1,
                    'sous_theme_id' => 3,
                    'user_id' => 1,
                    'answers' => [
                        ['answer' => 'Lonzo Ball', 'is_correct' => false],
                        ['answer' => 'Markelle Fultz', 'is_correct' => true],
                        ['answer' => 'De\'Aaron Fox', 'is_correct' => false],
                        ['answer' => 'Josh Jackson', 'is_correct' => false],
                    ],
                ],

                [
                    'title' => "Quelle équipe a remporté le premier match de la NBA en 1946?",
                    'category_id' => 1,
                    'level_id' => 1,
                    'sous_theme_id' => 3,
                    'user_id' => 1,
                    'answers' => [
                        ['answer' => 'New York Knicks', 'is_correct' => false],
                        ['answer' => 'Chicago Stags', 'is_correct' => false],
                        ['answer' => 'Boston Celtics', 'is_correct' => false],
                        ['answer' => 'Toronto Huskies', 'is_correct' => true],
                    ],
                ],

                [
                    'title' => "Combien de fois les Bulls de Chicago ont-ils remporté le championnat dans les années 1990?",
                    'category_id' => 1,
                    'level_id' => 1,
                    'sous_theme_id' => 3,
                    'user_id' => 1,
                    'answers' => [
                        ['answer' => '3', 'is_correct' => false],
                        ['answer' => '5', 'is_correct' => false],
                        ['answer' => '6', 'is_correct' => true],
                        ['answer' => '2', 'is_correct' => false],
                    ],
                ],

                [
                    'title' => "Quelle équipe a remporté le plus de championnats NBA?",
                    'category_id' => 1,
                    'level_id' => 1,
                    'sous_theme_id' => 3,
                    'user_id' => 1,
                    'answers' => [
                        ['answer' => 'Los Angeles Lakers', 'is_correct' => true],
                        ['answer' => 'Chicago Bulls', 'is_correct' => false],
                        ['answer' => 'Boston Celtics', 'is_correct' => false],
                        ['answer' => 'Golden State Warriors', 'is_correct' => false],
                    ],
                ],

                [
                    'title' => "Qui est le meilleur marqueur de tous les temps en NBA?",
                    'category_id' => 1,
                    'level_id' => 1,
                    'sous_theme_id' => 3,
                    'user_id' => 1,
                    'answers' => [
                        ['answer' => 'LeBron James', 'is_correct' => false],
                        ['answer' => 'Kareem Abdul-Jabbar', 'is_correct' => true],
                        ['answer' => 'Kobe Bryant', 'is_correct' => false],
                        ['answer' => 'Michael Jordan', 'is_correct' => false],
                    ],
                ],

                [
                    'title' => "Quel joueur est surnommé 'The Greek Freak'?",
                    'category_id' => 1,
                    'level_id' => 1,
                    'sous_theme_id' => 3,
                    'user_id' => 1,
                    'answers' => [
                        ['answer' => 'Joel Embiid', 'is_correct' => false],
                        ['answer' => 'Giannis Antetokounmpo', 'is_correct' => true],
                        ['answer' => 'Luka Dončić', 'is_correct' => false],
                        ['answer' => 'Nikola Jokić', 'is_correct' => false],
                    ],
                ],
                [
                    'title' => "Combien de temps dure un quart-temps dans un match de la NBA?",
                    'category_id' => 1,
                    'level_id' => 1,
                    'sous_theme_id' => 3,
                    'user_id' => 1,
                    'answers' => [
                        ['answer' => '8 minutes', 'is_correct' => false],
                        ['answer' => '10 minutes', 'is_correct' => false],
                        ['answer' => '12 minutes', 'is_correct' => true],
                        ['answer' => '15 minutes', 'is_correct' => false],
                    ],
                ],

                [
                    'title' => "Qui a remporté le MVP de la saison régulière en 2021?",
                    'category_id' => 1,
                    'level_id' => 1,
                    'sous_theme_id' => 3,
                    'user_id' => 1,
                    'answers' => [
                        ['answer' => 'LeBron James', 'is_correct' => false],
                        ['answer' => 'Kevin Durant', 'is_correct' => false],
                        ['answer' => 'Giannis Antetokounmpo', 'is_correct' => true],
                        ['answer' => 'Stephen Curry', 'is_correct' => false],
                    ],
                ],

                [
                    'title' => "Quelle équipe de la NBA est basée à Boston?",
                    'category_id' => 1,
                    'level_id' => 1,
                    'sous_theme_id' => 3,
                    'user_id' => 1,
                    'answers' => [
                        ['answer' => 'Los Angeles Lakers', 'is_correct' => false],
                        ['answer' => 'Chicago Bulls', 'is_correct' => false],
                        ['answer' => 'Boston Celtics', 'is_correct' => true],
                        ['answer' => 'Miami Heat', 'is_correct' => false],
                    ],
                ],

                [
                    'title' => "Quel joueur est souvent associé au terme 'The Process'?",
                    'category_id' => 1,
                    'level_id' => 1,
                    'sous_theme_id' => 3,
                    'user_id' => 1,
                    'answers' => [
                        ['answer' => 'Joel Embiid', 'is_correct' => true],
                        ['answer' => 'Ben Simmons', 'is_correct' => false],
                        ['answer' => 'Jimmy Butler', 'is_correct' => false],
                        ['answer' => 'Tobias Harris', 'is_correct' => false],
                    ],
                ],

                [
                    'title' => "Combien de joueurs composent une équipe de la NBA sur le terrain à un moment donné?",
                    'category_id' => 1,
                    'level_id' => 1,
                    'sous_theme_id' => 3,
                    'user_id' => 1,
                    'answers' => [
                        ['answer' => '5', 'is_correct' => true],
                        ['answer' => '6', 'is_correct' => false],
                        ['answer' => '7', 'is_correct' => false],
                        ['answer' => '8', 'is_correct' => false],
                    ],
                ],

                [
                    'title' => "Qui détient le record du plus grand nombre de points marqués en un seul match de la NBA?",
                    'category_id' => 1,
                    'level_id' => 1,
                    'sous_theme_id' => 3,
                    'user_id' => 1,
                    'answers' => [
                        ['answer' => 'Kobe Bryant', 'is_correct' => false],
                        ['answer' => 'Wilt Chamberlain', 'is_correct' => true],
                        ['answer' => 'Michael Jordan', 'is_correct' => false],
                        ['answer' => 'James Harden', 'is_correct' => false],
                    ],
                ],

                [
                    'title' => "Quel joueur est surnommé 'The Brow'?",
                    'category_id' => 1,
                    'level_id' => 1,
                    'sous_theme_id' => 3,
                    'user_id' => 1,
                    'answers' => [
                        ['answer' => 'Anthony Davis', 'is_correct' => true],
                        ['answer' => 'DeMarcus Cousins', 'is_correct' => false],
                        ['answer' => 'Kawhi Leonard', 'is_correct' => false],
                        ['answer' => 'Chris Paul', 'is_correct' => false],
                    ],
                ],

                [
                    'title' => "Quelle équipe a remporté le championnat NBA le plus récemment avant la rédaction de cette question?",
                    'category_id' => 1,
                    'level_id' => 1,
                    'sous_theme_id' => 3,
                    'user_id' => 1,
                    'answers' => [
                        ['answer' => 'Los Angeles Lakers', 'is_correct' => false],
                        ['answer' => 'Miami Heat', 'is_correct' => false],
                        ['answer' => 'Toronto Raptors', 'is_correct' => true],
                        ['answer' => 'Golden State Warriors', 'is_correct' => false],
                    ],
                ],

                [
                    'title' => "Quel joueur a été surnommé 'The Answer'?",
                    'category_id' => 1,
                    'level_id' => 1,
                    'sous_theme_id' => 3,
                    'user_id' => 1,
                    'answers' => [
                        ['answer' => 'Allen Iverson', 'is_correct' => true],
                        ['answer' => 'Dwyane Wade', 'is_correct' => false],
                        ['answer' => 'Ray Allen', 'is_correct' => false],
                        ['answer' => 'Steve Nash', 'is_correct' => false],
                    ],
                ],

                [
                    'title' => "Combien de franchises de la NBA sont basées en Floride?",
                    'category_id' => 1,
                    'level_id' => 1,
                    'sous_theme_id' => 3,
                    'user_id' => 1,
                    'answers' => [
                        ['answer' => '1', 'is_correct' => false],
                        ['answer' => '2', 'is_correct' => true],
                        ['answer' => '3', 'is_correct' => false],
                        ['answer' => '0', 'is_correct' => false],
                    ],
                ],

                [
                    'title' => "Qui détient le record du plus grand nombre de paniers à trois points en carrière?",
                    'category_id' => 1,
                    'level_id' => 1,
                    'sous_theme_id' => 3,
                    'user_id' => 1,
                    'answers' => [
                        ['answer' => 'Klay Thompson', 'is_correct' => false],
                        ['answer' => 'Ray Allen', 'is_correct' => true],
                        ['answer' => 'Stephen Curry', 'is_correct' => false],
                        ['answer' => 'Reggie Miller', 'is_correct' => false],
                    ],
                ],

                [
                    'title' => "Quelle équipe a remporté le plus grand nombre de titres de la NBA dans les années 1980?",
                    'category_id' => 1,
                    'level_id' => 1,
                    'sous_theme_id' => 3,
                    'user_id' => 1,
                    'answers' => [
                        ['answer' => 'Los Angeles Lakers', 'is_correct' => true],
                        ['answer' => 'Boston Celtics', 'is_correct' => false],
                        ['answer' => 'Detroit Pistons', 'is_correct' => false],
                        ['answer' => 'Chicago Bulls', 'is_correct' => false],
                    ],
                ],

                [
                    'title' => "Qui est le seul joueur à avoir marqué 100 points dans un match de la NBA?",
                    'category_id' => 1,
                    'level_id' => 1,
                    'sous_theme_id' => 3,
                    'user_id' => 1,
                    'answers' => [
                        ['answer' => 'Wilt Chamberlain', 'is_correct' => true],
                        ['answer' => 'Kobe Bryant', 'is_correct' => false],
                        ['answer' => 'Michael Jordan', 'is_correct' => false],
                        ['answer' => 'LeBron James', 'is_correct' => false],
                    ],
                ],
            ],
            [
                'title' => "Quel joueur a été le premier choix de la draft NBA en 2020?",
                'category_id' => 1,
                'level_id' => 1,
                'sous_theme_id' => 3,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'LaMelo Ball', 'is_correct' => false],
                    ['answer' => 'Anthony Edwards', 'is_correct' => true],
                    ['answer' => 'James Wiseman', 'is_correct' => false],
                    ['answer' => 'Obi Toppin', 'is_correct' => false],
                ],
            ],

            [
                'title' => "Combien de fois LeBron James a-t-il remporté le titre de MVP des Finales NBA?",
                'category_id' => 1,
                'level_id' => 1,
                'sous_theme_id' => 3,
                'user_id' => 1,
                'answers' => [
                    ['answer' => '3', 'is_correct' => false],
                    ['answer' => '4', 'is_correct' => true],
                    ['answer' => '2', 'is_correct' => false],
                    ['answer' => '1', 'is_correct' => false],
                ],
            ],

            [
                'title' => "Quel joueur est souvent associé au terme 'Splash Brothers'?",
                'category_id' => 1,
                'level_id' => 1,
                'sous_theme_id' => 3,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'LeBron James', 'is_correct' => false],
                    ['answer' => 'Kevin Durant', 'is_correct' => false],
                    ['answer' => 'Stephen Curry', 'is_correct' => true],
                    ['answer' => 'James Harden', 'is_correct' => false],
                ],
            ],

            [
                'title' => "Quelle équipe de la NBA est basée à Toronto?",
                'category_id' => 1,
                'level_id' => 1,
                'sous_theme_id' => 3,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Los Angeles Lakers', 'is_correct' => false],
                    ['answer' => 'Boston Celtics', 'is_correct' => false],
                    ['answer' => 'Toronto Raptors', 'is_correct' => true],
                    ['answer' => 'Golden State Warriors', 'is_correct' => false],
                ],
            ],

            [
                'title' => "Qui détient le record du plus grand nombre de rebonds en carrière en saison régulière?",
                'category_id' => 1,
                'level_id' => 1,
                'sous_theme_id' => 3,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Dennis Rodman', 'is_correct' => false],
                    ['answer' => 'Shaquille O\'Neal', 'is_correct' => false],
                    ['answer' => 'Hakeem Olajuwon', 'is_correct' => false],
                    ['answer' => 'Kareem Abdul-Jabbar', 'is_correct' => true],
                ],
            ],

            [
                'title' => "Quel entraîneur de la NBA est également surnommé 'Pop'?",
                'category_id' => 1,
                'level_id' => 1,
                'sous_theme_id' => 3,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Erik Spoelstra', 'is_correct' => false],
                    ['answer' => 'Steve Kerr', 'is_correct' => false],
                    ['answer' => 'Doc Rivers', 'is_correct' => false],
                    ['answer' => 'Gregg Popovich', 'is_correct' => true],
                ],
            ],

            [
                'title' => "Combien de fois Shaquille O'Neal a-t-il remporté le titre de MVP de la saison régulière?",
                'category_id' => 1,
                'level_id' => 1,
                'sous_theme_id' => 3,
                'user_id' => 1,
                'answers' => [
                    ['answer' => '1', 'is_correct' => false],
                    ['answer' => '2', 'is_correct' => false],
                    ['answer' => '3', 'is_correct' => false],
                    ['answer' => 'Aucun', 'is_correct' => true],
                ],
            ],

            [
                'title' => "Qui est le seul joueur à avoir remporté le titre de MVP de la saison régulière avec les Bulls de Chicago autre que Michael Jordan?",
                'category_id' => 1,
                'level_id' => 1,
                'sous_theme_id' => 3,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Scottie Pippen', 'is_correct' => true],
                    ['answer' => 'Dennis Rodman', 'is_correct' => false],
                    ['answer' => 'Horace Grant', 'is_correct' => false],
                    ['answer' => 'Steve Kerr', 'is_correct' => false],
                ],
            ],

            [
                'title' => "Quel joueur a remporté le plus grand nombre de trophées de Défenseur de l'année?",
                'category_id' => 1,
                'level_id' => 1,
                'sous_theme_id' => 3,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Dwight Howard', 'is_correct' => false],
                    ['answer' => 'Rudy Gobert', 'is_correct' => true],
                    ['answer' => 'Kawhi Leonard', 'is_correct' => false],
                    ['answer' => 'Ben Wallace', 'is_correct' => false],
                ],
            ],
            [
                'title' => "Qui est le joueur actuel avec le plus grand nombre de triple-doubles en carrière?",
                'category_id' => 1,
                'level_id' => 2,
                'sous_theme_id' => 3,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'LeBron James', 'is_correct' => false],
                    ['answer' => 'Russell Westbrook', 'is_correct' => true],
                    ['answer' => 'James Harden', 'is_correct' => false],
                    ['answer' => 'Luka Dončić', 'is_correct' => false],
                ],
            ],

            [
                'title' => "Quelle équipe a connu la plus longue série de victoires consécutives en NBA?",
                'category_id' => 1,
                'level_id' => 2,
                'sous_theme_id' => 3,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Golden State Warriors', 'is_correct' => false],
                    ['answer' => 'Chicago Bulls', 'is_correct' => false],
                    ['answer' => 'Los Angeles Lakers', 'is_correct' => false],
                    ['answer' => 'Los Angeles Lakers de 1971-1972', 'is_correct' => true],
                ],
            ],

            [
                'title' => "Quel joueur a remporté le plus grand nombre de titres de NBA Finals MVP avec les Lakers de Los Angeles?",
                'category_id' => 1,
                'level_id' => 2,
                'sous_theme_id' => 3,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Magic Johnson', 'is_correct' => false],
                    ['answer' => 'Kareem Abdul-Jabbar', 'is_correct' => false],
                    ['answer' => 'Kobe Bryant', 'is_correct' => true],
                    ['answer' => 'Shaquille O\'Neal', 'is_correct' => false],
                ],
            ],

            [
                'title' => "Combien de points Michael Jordan a-t-il marqués dans son dernier match en NBA?",
                'category_id' => 1,
                'level_id' => 2,
                'sous_theme_id' => 3,
                'user_id' => 1,
                'answers' => [
                    ['answer' => '45', 'is_correct' => false],
                    ['answer' => '51', 'is_correct' => false],
                    ['answer' => '55', 'is_correct' => false],
                    ['answer' => '60', 'is_correct' => true],
                ],
            ],

            [
                'title' => "Qui a remporté le trophée de Joueur le Plus Amélioré (MIP) en 2021?",
                'category_id' => 1,
                'level_id' => 2,
                'sous_theme_id' => 3,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Zach LaVine', 'is_correct' => false],
                    ['answer' => 'Bam Adebayo', 'is_correct' => false],
                    ['answer' => 'Jerami Grant', 'is_correct' => true],
                    ['answer' => 'Christian Wood', 'is_correct' => false],
                ],
            ],

            [
                'title' => "Quel joueur est surnommé 'The Joker'?",
                'category_id' => 1,
                'level_id' => 2,
                'sous_theme_id' => 3,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Nikola Jokic', 'is_correct' => true],
                    ['answer' => 'Joel Embiid', 'is_correct' => false],
                    ['answer' => 'Kristaps Porziņģis', 'is_correct' => false],
                    ['answer' => 'Giannis Antetokounmpo', 'is_correct' => false],
                ],
            ],

            [
                'title' => "Combien de fois les Spurs de San Antonio ont-ils remporté le championnat NBA sous l'entraîneur Gregg Popovich?",
                'category_id' => 1,
                'level_id' => 2,
                'sous_theme_id' => 3,
                'user_id' => 1,
                'answers' => [
                    ['answer' => '4', 'is_correct' => true],
                    ['answer' => '5', 'is_correct' => false],
                    ['answer' => '3', 'is_correct' => false],
                    ['answer' => '6', 'is_correct' => false],
                ],
            ],

            [
                'title' => "Qui détient le record du plus grand nombre de contres en une seule saison?",
                'category_id' => 1,
                'level_id' => 2,
                'sous_theme_id' => 3,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Rudy Gobert', 'is_correct' => false],
                    ['answer' => 'Hakeem Olajuwon', 'is_correct' => true],
                    ['answer' => 'Dikembe Mutombo', 'is_correct' => false],
                    ['answer' => 'Shaquille O\'Neal', 'is_correct' => false],
                ],
            ],

            [
                'title' => "Quel joueur a remporté le premier Slam Dunk Contest de la NBA?",
                'category_id' => 1,
                'level_id' => 2,
                'sous_theme_id' => 3,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Dominique Wilkins', 'is_correct' => false],
                    ['answer' => 'Spud Webb', 'is_correct' => false],
                    ['answer' => 'Michael Jordan', 'is_correct' => true],
                    ['answer' => 'Clyde Drexler', 'is_correct' => false],
                ],
            ],

            [
                'title' => "Combien de fois les Miami Heat ont-ils remporté le championnat NBA?",
                'category_id' => 1,
                'level_id' => 2,
                'sous_theme_id' => 3,
                'user_id' => 1,
                'answers' => [
                    ['answer' => '1', 'is_correct' => false],
                    ['answer' => '2', 'is_correct' => true],
                    ['answer' => '3', 'is_correct' => false],
                    ['answer' => '0', 'is_correct' => false],
                ],
            ],

            [
                'title' => "Combien de titres NBA les Houston Rockets ont-ils remportés?",
                'category_id' => 1,
                'level_id' => 2,
                'sous_theme_id' => 3,
                'user_id' => 1,
                'answers' => [
                    ['answer' => '1', 'is_correct' => false],
                    ['answer' => '2', 'is_correct' => false],
                    ['answer' => '3', 'is_correct' => false],
                    ['answer' => '2', 'is_correct' => true],
                ],
            ],

            [
                'title' => "Qui est le seul joueur à avoir remporté le titre de Rookie de l'Année et le MVP de la saison régulière la même année?",
                'category_id' => 1,
                'level_id' => 2,
                'sous_theme_id' => 3,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'LeBron James', 'is_correct' => false],
                    ['answer' => 'Tim Duncan', 'is_correct' => false],
                    ['answer' => 'Wilt Chamberlain', 'is_correct' => false],
                    ['answer' => 'Derrick Rose', 'is_correct' => true],
                ],
            ],

            [
                'title' => "Quel joueur a été sélectionné en première position lors de la draft de la NBA en 2009?",
                'category_id' => 1,
                'level_id' => 2,
                'sous_theme_id' => 3,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Stephen Curry', 'is_correct' => false],
                    ['answer' => 'Blake Griffin', 'is_correct' => true],
                    ['answer' => 'James Harden', 'is_correct' => false],
                    ['answer' => 'John Wall', 'is_correct' => false],
                ],
            ],

            [
                'title' => "Combien de fois Kobe Bryant a-t-il été sélectionné dans l'équipe All-NBA au cours de sa carrière?",
                'category_id' => 1,
                'level_id' => 2,
                'sous_theme_id' => 3,
                'user_id' => 1,
                'answers' => [
                    ['answer' => '15', 'is_correct' => true],
                    ['answer' => '10', 'is_correct' => false],
                    ['answer' => '12', 'is_correct' => false],
                    ['answer' => '18', 'is_correct' => false],
                ],
            ],

            [
                'title' => "Quelle équipe a remporté le plus grand nombre de titres de division dans l'histoire de la NBA?",
                'category_id' => 1,
                'level_id' => 2,
                'sous_theme_id' => 3,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Boston Celtics', 'is_correct' => false],
                    ['answer' => 'Los Angeles Lakers', 'is_correct' => false],
                    ['answer' => 'Chicago Bulls', 'is_correct' => false],
                    ['answer' => 'San Antonio Spurs', 'is_correct' => true],
                ],
            ],

            [
                'title' => "Qui détient le record du plus grand nombre de triple-doubles en une seule saison?",
                'category_id' => 1,
                'level_id' => 2,
                'sous_theme_id' => 3,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Magic Johnson', 'is_correct' => false],
                    ['answer' => 'Russell Westbrook', 'is_correct' => false],
                    ['answer' => 'LeBron James', 'is_correct' => false],
                    ['answer' => 'Oscar Robertson', 'is_correct' => true],
                ],
            ],

            [
                'title' => "Combien de points Michael Jordan a-t-il marqués en moyenne par match au cours de sa carrière?",
                'category_id' => 1,
                'level_id' => 2,
                'sous_theme_id' => 3,
                'user_id' => 1,
                'answers' => [
                    ['answer' => '30.1', 'is_correct' => true],
                    ['answer' => '28.2', 'is_correct' => false],
                    ['answer' => '32.5', 'is_correct' => false],
                    ['answer' => '27.0', 'is_correct' => false],
                ],
            ],

            [
                'title' => "Quelle équipe a remporté le plus grand nombre de championnats NBA dans les années 1960?",
                'category_id' => 1,
                'level_id' => 2,
                'sous_theme_id' => 3,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Boston Celtics', 'is_correct' => true],
                    ['answer' => 'Los Angeles Lakers', 'is_correct' => false],
                    ['answer' => 'Chicago Bulls', 'is_correct' => false],
                    ['answer' => 'Philadelphia 76ers', 'is_correct' => false],
                ],
            ],
            [
                'title' => "Qui est le seul joueur à avoir remporté le MVP des Finales NBA avec trois équipes différentes?",
                'category_id' => 1,
                'level_id' => 2,
                'sous_theme_id' => 3,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'LeBron James', 'is_correct' => false],
                    ['answer' => 'Magic Johnson', 'is_correct' => false],
                    ['answer' => 'Kareem Abdul-Jabbar', 'is_correct' => true],
                    ['answer' => 'Larry Bird', 'is_correct' => false],
                ],
            ],

            [
                'title' => "Combien de points a marqué Kobe Bryant dans son dernier match en carrière?",
                'category_id' => 1,
                'level_id' => 2,
                'sous_theme_id' => 3,
                'user_id' => 1,
                'answers' => [
                    ['answer' => '50', 'is_correct' => false],
                    ['answer' => '61', 'is_correct' => false],
                    ['answer' => '81', 'is_correct' => true],
                    ['answer' => '101', 'is_correct' => false],
                ],
            ],

            [
                'title' => "Quel joueur a détenu le record du plus grand nombre de points marqués en une seule saison avant Wilt Chamberlain?",
                'category_id' => 1,
                'level_id' => 2,
                'sous_theme_id' => 3,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Michael Jordan', 'is_correct' => false],
                    ['answer' => 'Kobe Bryant', 'is_correct' => false],
                    ['answer' => 'Elgin Baylor', 'is_correct' => true],
                    ['answer' => 'Karl Malone', 'is_correct' => false],
                ],
            ],

            [
                'title' => "Qui est le seul joueur à avoir remporté le titre de MVP de la saison régulière avec les Warriors de Golden State?",
                'category_id' => 1,
                'level_id' => 2,
                'sous_theme_id' => 3,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Stephen Curry', 'is_correct' => true],
                    ['answer' => 'Kevin Durant', 'is_correct' => false],
                    ['answer' => 'Klay Thompson', 'is_correct' => false],
                    ['answer' => 'Draymond Green', 'is_correct' => false],
                ],
            ],

            [
                'title' => "Combien de fois Larry Bird a-t-il remporté le titre de MVP des Finales NBA?",
                'category_id' => 1,
                'level_id' => 2,
                'sous_theme_id' => 3,
                'user_id' => 1,
                'answers' => [
                    ['answer' => '1', 'is_correct' => false],
                    ['answer' => '2', 'is_correct' => false],
                    ['answer' => '3', 'is_correct' => true],
                    ['answer' => '4', 'is_correct' => false],
                ],
            ],

            [
                'title' => "Qui a remporté le NBA Finals MVP en 2019?",
                'category_id' => 1,
                'level_id' => 2,
                'sous_theme_id' => 3,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'LeBron James', 'is_correct' => false],
                    ['answer' => 'Kevin Durant', 'is_correct' => false],
                    ['answer' => 'Kawhi Leonard', 'is_correct' => true],
                    ['answer' => 'Stephen Curry', 'is_correct' => false],
                ],
            ],

            [
                'title' => "Quelle équipe détient le record du plus grand nombre de victoires en une saison régulière?",
                'category_id' => 1,
                'level_id' => 2,
                'sous_theme_id' => 3,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Chicago Bulls', 'is_correct' => false],
                    ['answer' => 'Los Angeles Lakers', 'is_correct' => false],
                    ['answer' => 'Golden State Warriors', 'is_correct' => true],
                    ['answer' => 'Boston Celtics', 'is_correct' => false],
                ],
            ],

            [
                'title' => "Quel joueur a remporté le plus grand nombre de titres de NBA Finals MVP?",
                'category_id' => 1,
                'level_id' => 2,
                'sous_theme_id' => 3,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Michael Jordan', 'is_correct' => false],
                    ['answer' => 'Kobe Bryant', 'is_correct' => false],
                    ['answer' => 'LeBron James', 'is_correct' => true],
                    ['answer' => 'Magic Johnson', 'is_correct' => false],
                ],
            ],

            [
                'title' => "Combien de points a marqué Wilt Chamberlain lors de son célèbre match où il a marqué 100 points?",
                'category_id' => 1,
                'level_id' => 2,
                'sous_theme_id' => 3,
                'user_id' => 1,
                'answers' => [
                    ['answer' => '81', 'is_correct' => false],
                    ['answer' => '90', 'is_correct' => false],
                    ['answer' => '100', 'is_correct' => true],
                    ['answer' => '110', 'is_correct' => false],
                ],
            ],

            [
                'title' => "Quel joueur a été choisi en première position lors de la draft de la NBA en 2003?",
                'category_id' => 1,
                'level_id' => 2,
                'sous_theme_id' => 3,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Chris Bosh', 'is_correct' => false],
                    ['answer' => 'Dwyane Wade', 'is_correct' => false],
                    ['answer' => 'Carmelo Anthony', 'is_correct' => false],
                    ['answer' => 'LeBron James', 'is_correct' => true],
                ],
            ],

            [
                'title' => "Combien de franchises NBA ont remporté au moins un championnat?",
                'category_id' => 1,
                'level_id' => 2,
                'sous_theme_id' => 3,
                'user_id' => 1,
                'answers' => [
                    ['answer' => '28', 'is_correct' => false],
                    ['answer' => '30', 'is_correct' => true],
                    ['answer' => '32', 'is_correct' => false],
                    ['answer' => '26', 'is_correct' => false],
                ],
            ],
            [
                'title' => "Qui détient le record du plus grand nombre de rebonds en carrière en saison régulière?",
                'category_id' => 1,
                'level_id' => 1,
                'sous_theme_id' => 3,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Dwight Howard', 'is_correct' => false],
                    ['answer' => 'Wilt Chamberlain', 'is_correct' => true],
                    ['answer' => 'Kareem Abdul-Jabbar', 'is_correct' => false],
                    ['answer' => 'Bill Russell', 'is_correct' => false],
                ],
            ],

            [
                'title' => "Quel joueur a été surnommé 'The Dream' et a remporté deux championnats NBA avec les Rockets de Houston?",
                'category_id' => 1,
                'level_id' => 1,
                'sous_theme_id' => 3,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Shaquille O\'Neal', 'is_correct' => false],
                    ['answer' => 'Hakeem Olajuwon', 'is_correct' => true],
                    ['answer' => 'David Robinson', 'is_correct' => false],
                    ['answer' => 'Tim Duncan', 'is_correct' => false],
                ],
            ],

            [
                'title' => "En quelle année Michael Jordan a-t-il pris sa retraite pour la première fois?",
                'category_id' => 1,
                'level_id' => 1,
                'sous_theme_id' => 3,
                'user_id' => 1,
                'answers' => [
                    ['answer' => '1996', 'is_correct' => false],
                    ['answer' => '1999', 'is_correct' => false],
                    ['answer' => '2003', 'is_correct' => false],
                    ['answer' => '1993', 'is_correct' => true],
                ],
            ],

            [
                'title' => "Quelle équipe a remporté le premier championnat de la NBA?",
                'category_id' => 1,
                'level_id' => 1,
                'sous_theme_id' => 3,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Boston Celtics', 'is_correct' => false],
                    ['answer' => 'Los Angeles Lakers', 'is_correct' => false],
                    ['answer' => 'Chicago Bulls', 'is_correct' => false],
                    ['answer' => 'Philadelphia Warriors', 'is_correct' => true],
                ],
            ],

            [
                'title' => "Qui a remporté le trophée de Joueur le Plus Amélioré (MIP) en 2020?",
                'category_id' => 1,
                'level_id' => 1,
                'sous_theme_id' => 3,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Bam Adebayo', 'is_correct' => true],
                    ['answer' => 'Brandon Ingram', 'is_correct' => false],
                    ['answer' => 'Luka Dončić', 'is_correct' => false],
                    ['answer' => 'Pascal Siakam', 'is_correct' => false],
                ],
            ],

            [
                'title' => "Combien de fois LeBron James a-t-il remporté le titre de MVP de la saison régulière?",
                'category_id' => 1,
                'level_id' => 1,
                'sous_theme_id' => 3,
                'user_id' => 1,
                'answers' => [
                    ['answer' => '3', 'is_correct' => false],
                    ['answer' => '4', 'is_correct' => false],
                    ['answer' => '5', 'is_correct' => true],
                    ['answer' => '6', 'is_correct' => false],
                ],
            ],
            [
                'title' => "Quel joueur a remporté le plus grand nombre de trophées de Défenseur de l'année?",
                'category_id' => 1,
                'level_id' => 3,
                'sous_theme_id' => 3,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Dwight Howard', 'is_correct' => false],
                    ['answer' => 'Kawhi Leonard', 'is_correct' => true],
                    ['answer' => 'Rudy Gobert', 'is_correct' => false],
                    ['answer' => 'Ben Wallace', 'is_correct' => false],
                ],
            ],

            [
                'title' => "Quel joueur de la NBA détient le record du plus grand nombre de triple-doubles en carrière?",
                'category_id' => 1,
                'level_id' => 3,
                'sous_theme_id' => 3,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Magic Johnson', 'is_correct' => false],
                    ['answer' => 'LeBron James', 'is_correct' => false],
                    ['answer' => 'Russell Westbrook', 'is_correct' => true],
                    ['answer' => 'Oscar Robertson', 'is_correct' => false],
                ],
            ],

            [
                'title' => "Combien de titres NBA Michael Jordan a-t-il remportés avec les Chicago Bulls?",
                'category_id' => 1,
                'level_id' => 3,
                'sous_theme_id' => 3,
                'user_id' => 1,
                'answers' => [
                    ['answer' => '4', 'is_correct' => false],
                    ['answer' => '5', 'is_correct' => false],
                    ['answer' => '6', 'is_correct' => true],
                    ['answer' => '7', 'is_correct' => false],
                ],
            ],

            [
                'title' => "Qui détient le record du plus grand nombre de paniers à trois points marqués en une seule saison?",
                'category_id' => 1,
                'level_id' => 3,
                'sous_theme_id' => 3,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Stephen Curry', 'is_correct' => true],
                    ['answer' => 'Ray Allen', 'is_correct' => false],
                    ['answer' => 'Klay Thompson', 'is_correct' => false],
                    ['answer' => 'Reggie Miller', 'is_correct' => false],
                ],
            ],

            [
                'title' => "Quelle équipe a remporté le premier championnat NBA après le changement de nom de la ligue?",
                'category_id' => 1,
                'level_id' => 3,
                'sous_theme_id' => 3,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Los Angeles Lakers', 'is_correct' => false],
                    ['answer' => 'Golden State Warriors', 'is_correct' => false],
                    ['answer' => 'San Antonio Spurs', 'is_correct' => false],
                    ['answer' => 'Miami Heat', 'is_correct' => true],
                ],
            ],

            [
                'title' => "Combien de fois Kobe Bryant a-t-il remporté le titre de MVP des Finales NBA?",
                'category_id' => 1,
                'level_id' => 3,
                'sous_theme_id' => 3,
                'user_id' => 1,
                'answers' => [
                    ['answer' => '2', 'is_correct' => false],
                    ['answer' => '3', 'is_correct' => false],
                    ['answer' => '4', 'is_correct' => true],
                    ['answer' => '5', 'is_correct' => false],
                ],
            ],

            [
                'title' => "Quel joueur a remporté le plus grand nombre de titres de meilleur marqueur de la saison?",
                'category_id' => 1,
                'level_id' => 3,
                'sous_theme_id' => 3,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Kareem Abdul-Jabbar', 'is_correct' => true],
                    ['answer' => 'LeBron James', 'is_correct' => false],
                    ['answer' => 'Kevin Durant', 'is_correct' => false],
                    ['answer' => 'Michael Jordan', 'is_correct' => false],
                ],
            ],

            [
                'title' => "En quelle année la NBA a-t-elle introduit la règle des 24 secondes pour les possessions offensives?",
                'category_id' => 1,
                'level_id' => 3,
                'sous_theme_id' => 3,
                'user_id' => 1,
                'answers' => [
                    ['answer' => '1954', 'is_correct' => true],
                    ['answer' => '1962', 'is_correct' => false],
                    ['answer' => '1978', 'is_correct' => false],
                    ['answer' => '1986', 'is_correct' => false],
                ],
            ],

            [
                'title' => "Qui détient le record du plus grand nombre de passes décisives en une seule saison?",
                'category_id' => 1,
                'level_id' => 3,
                'sous_theme_id' => 3,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Magic Johnson', 'is_correct' => false],
                    ['answer' => 'John Stockton', 'is_correct' => true],
                    ['answer' => 'Chris Paul', 'is_correct' => false],
                    ['answer' => 'Steve Nash', 'is_correct' => false],
                ],
            ],
            [
                'title' => "Quel joueur a été surnommé 'The Mailman' et a joué la majeure partie de sa carrière avec le Jazz de l'Utah?",
                'category_id' => 1,
                'level_id' => 3,
                'sous_theme_id' => 3,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Shaquille O\'Neal', 'is_correct' => false],
                    ['answer' => 'Karl Malone', 'is_correct' => true],
                    ['answer' => 'Tim Duncan', 'is_correct' => false],
                    ['answer' => 'Hakeem Olajuwon', 'is_correct' => false],
                ],
            ],

            [
                'title' => "Combien de fois Bill Russell a-t-il remporté le MVP des Finales NBA au cours de sa carrière?",
                'category_id' => 1,
                'level_id' => 3,
                'sous_theme_id' => 3,
                'user_id' => 1,
                'answers' => [
                    ['answer' => '7', 'is_correct' => false],
                    ['answer' => '9', 'is_correct' => false],
                    ['answer' => '11', 'is_correct' => true],
                    ['answer' => '13', 'is_correct' => false],
                ],
            ],

            [
                'title' => "Quel joueur a remporté le plus grand nombre de titres de MVP de la saison régulière?",
                'category_id' => 1,
                'level_id' => 3,
                'sous_theme_id' => 3,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'LeBron James', 'is_correct' => false],
                    ['answer' => 'Michael Jordan', 'is_correct' => false],
                    ['answer' => 'Bill Russell', 'is_correct' => false],
                    ['answer' => 'Kareem Abdul-Jabbar', 'is_correct' => true],
                ],
            ],

            [
                'title' => "Qui détient le record du plus grand nombre de points marqués en une seule saison en moyenne par match?",
                'category_id' => 1,
                'level_id' => 3,
                'sous_theme_id' => 3,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Wilt Chamberlain', 'is_correct' => false],
                    ['answer' => 'Elgin Baylor', 'is_correct' => false],
                    ['answer' => 'Kobe Bryant', 'is_correct' => false],
                    ['answer' => 'James Harden', 'is_correct' => true],
                ],
            ],

            [
                'title' => "Combien de fois Michael Jordan a-t-il été sélectionné dans l'équipe All-NBA au cours de sa carrière?",
                'category_id' => 1,
                'level_id' => 3,
                'sous_theme_id' => 3,
                'user_id' => 1,
                'answers' => [
                    ['answer' => '10', 'is_correct' => false],
                    ['answer' => '11', 'is_correct' => false],
                    ['answer' => '12', 'is_correct' => true],
                    ['answer' => '13', 'is_correct' => false],
                ],
            ],

            [
                'title' => "Quel joueur a remporté le plus grand nombre de titres de MVP de la saison régulière consécutifs?",
                'category_id' => 1,
                'level_id' => 3,
                'sous_theme_id' => 3,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Magic Johnson', 'is_correct' => false],
                    ['answer' => 'Larry Bird', 'is_correct' => false],
                    ['answer' => 'Karl Malone', 'is_correct' => false],
                    ['answer' => 'Bill Russell', 'is_correct' => true],
                ],
            ],

            [
                'title' => "Qui détient le record du plus grand nombre de tirs à trois points réussis en une seule saison?",
                'category_id' => 1,
                'level_id' => 3,
                'sous_theme_id' => 3,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Stephen Curry', 'is_correct' => false],
                    ['answer' => 'Ray Allen', 'is_correct' => false],
                    ['answer' => 'Klay Thompson', 'is_correct' => true],
                    ['answer' => 'Reggie Miller', 'is_correct' => false],
                ],
            ],

            [
                'title' => "Combien de fois Karl Malone a-t-il mené la NBA en points par match au cours de sa carrière?",
                'category_id' => 1,
                'level_id' => 3,
                'sous_theme_id' => 3,
                'user_id' => 1,
                'answers' => [
                    ['answer' => '1', 'is_correct' => false],
                    ['answer' => '2', 'is_correct' => false],
                    ['answer' => '3', 'is_correct' => true],
                    ['answer' => '4', 'is_correct' => false],
                ],
            ],

            [
                'title' => "Quelle équipe a remporté le plus grand nombre de titres de la division Nord-Ouest?",
                'category_id' => 1,
                'level_id' => 3,
                'sous_theme_id' => 3,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Denver Nuggets', 'is_correct' => false],
                    ['answer' => 'Utah Jazz', 'is_correct' => false],
                    ['answer' => 'Portland Trail Blazers', 'is_correct' => true],
                    ['answer' => 'Minnesota Timberwolves', 'is_correct' => false],
                ],
            ],

            [
                'title' => "Qui détient le record du plus grand nombre de points marqués en une seule mi-temps de playoffs?",
                'category_id' => 1,
                'level_id' => 3,
                'sous_theme_id' => 3,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Michael Jordan', 'is_correct' => false],
                    ['answer' => 'Kobe Bryant', 'is_correct' => true],
                    ['answer' => 'LeBron James', 'is_correct' => false],
                    ['answer' => 'Wilt Chamberlain', 'is_correct' => false],
                ],
            ],

            [
                'title' => "Combien de fois Shaquille O'Neal a-t-il remporté le titre de MVP de la saison régulière?",
                'category_id' => 1,
                'level_id' => 3,
                'sous_theme_id' => 3,
                'user_id' => 1,
                'answers' => [
                    ['answer' => '0', 'is_correct' => true],
                    ['answer' => '1', 'is_correct' => false],
                    ['answer' => '2', 'is_correct' => false],
                    ['answer' => '3', 'is_correct' => false],
                ],
            ],

            [
                'title' => "Quel joueur a remporté le plus grand nombre de titres de MVP des Finales NBA consécutifs?",
                'category_id' => 1,
                'level_id' => 3,
                'sous_theme_id' => 3,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Michael Jordan', 'is_correct' => false],
                    ['answer' => 'LeBron James', 'is_correct' => false],
                    ['answer' => 'Magic Johnson', 'is_correct' => false],
                    ['answer' => 'Larry Bird', 'is_correct' => true],
                ],
            ],

            [
                'title' => "Combien de fois Russell Westbrook a-t-il mené la NBA en triple-doubles en une saison?",
                'category_id' => 1,
                'level_id' => 3,
                'sous_theme_id' => 3,
                'user_id' => 1,
                'answers' => [
                    ['answer' => '1', 'is_correct' => false],
                    ['answer' => '2', 'is_correct' => false],
                    ['answer' => '3', 'is_correct' => false],
                    ['answer' => '4', 'is_correct' => true],
                ],
            ],

            [
                'title' => "Qui détient le record du plus grand nombre de points marqués en un seul quart-temps?",
                'category_id' => 1,
                'level_id' => 3,
                'sous_theme_id' => 3,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Klay Thompson', 'is_correct' => false],
                    ['answer' => 'Kobe Bryant', 'is_correct' => false],
                    ['answer' => 'Wilt Chamberlain', 'is_correct' => false],
                    ['answer' => 'George Gervin', 'is_correct' => true],
                ],
            ],


            [
                'title' => "Combien de fois Michael Jordan a-t-il remporté le titre de MVP des Finales NBA?",
                'category_id' => 1,
                'level_id' => 3,
                'sous_theme_id' => 3,
                'user_id' => 1,
                'answers' => [
                    ['answer' => '3', 'is_correct' => false],
                    ['answer' => '4', 'is_correct' => false],
                    ['answer' => '5', 'is_correct' => false],
                    ['answer' => '6', 'is_correct' => true],
                ],
            ],

            [
                'title' => "Quel joueur a remporté le plus grand nombre de titres de MVP de la saison régulière en carrière?",
                'category_id' => 1,
                'level_id' => 3,
                'sous_theme_id' => 3,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'LeBron James', 'is_correct' => false],
                    ['answer' => 'Kareem Abdul-Jabbar', 'is_correct' => false],
                    ['answer' => 'Michael Jordan', 'is_correct' => false],
                    ['answer' => 'Bill Russell', 'is_correct' => true],
                ],
            ],
            [
                'title' => "Combien de fois LeBron James a-t-il mené la NBA en points par match en saison régulière?",
                'category_id' => 1,
                'level_id' => 3,
                'sous_theme_id' => 3,
                'user_id' => 1,
                'answers' => [
                    ['answer' => '1', 'is_correct' => false],
                    ['answer' => '2', 'is_correct' => true],
                    ['answer' => '3', 'is_correct' => false],
                    ['answer' => '4', 'is_correct' => false],
                ],
            ],

            [
                'title' => "Qui détient le record du plus grand nombre de rebonds en carrière en playoffs NBA?",
                'category_id' => 1,
                'level_id' => 3,
                'sous_theme_id' => 3,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Tim Duncan', 'is_correct' => false],
                    ['answer' => 'Wilt Chamberlain', 'is_correct' => false],
                    ['answer' => 'Shaquille O\'Neal', 'is_correct' => false],
                    ['answer' => 'Bill Russell', 'is_correct' => true],
                ],
            ],

            [
                'title' => "Combien de fois Larry Bird a-t-il remporté le titre de MVP des Finales NBA?",
                'category_id' => 1,
                'level_id' => 3,
                'sous_theme_id' => 3,
                'user_id' => 1,
                'answers' => [
                    ['answer' => '1', 'is_correct' => false],
                    ['answer' => '2', 'is_correct' => false],
                    ['answer' => '3', 'is_correct' => true],
                    ['answer' => '4', 'is_correct' => false],
                ],
            ],

            [
                'title' => "Quelle équipe a remporté le plus grand nombre de titres de la division Atlantique?",
                'category_id' => 1,
                'level_id' => 3,
                'sous_theme_id' => 3,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Boston Celtics', 'is_correct' => true],
                    ['answer' => 'Toronto Raptors', 'is_correct' => false],
                    ['answer' => 'Philadelphia 76ers', 'is_correct' => false],
                    ['answer' => 'New York Knicks', 'is_correct' => false],
                ],
            ],

            [
                'title' => "Qui détient le record du plus grand nombre de points marqués en un seul quart-temps de playoffs?",
                'category_id' => 1,
                'level_id' => 3,
                'sous_theme_id' => 3,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Michael Jordan', 'is_correct' => false],
                    ['answer' => 'Kobe Bryant', 'is_correct' => true],
                    ['answer' => 'LeBron James', 'is_correct' => false],
                    ['answer' => 'Wilt Chamberlain', 'is_correct' => false],
                ],
            ],

            [
                'title' => "Combien de fois Kareem Abdul-Jabbar a-t-il remporté le titre de MVP de la saison régulière?",
                'category_id' => 1,
                'level_id' => 3,
                'sous_theme_id' => 3,
                'user_id' => 1,
                'answers' => [
                    ['answer' => '5', 'is_correct' => false],
                    ['answer' => '6', 'is_correct' => false],
                    ['answer' => '7', 'is_correct' => true],
                    ['answer' => '8', 'is_correct' => false],
                ],
            ],

            [
                'title' => "Quel joueur a remporté le plus grand nombre de titres de Défenseur de l'année en NBA?",
                'category_id' => 1,
                'level_id' => 3,
                'sous_theme_id' => 3,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Dwight Howard', 'is_correct' => false],
                    ['answer' => 'Rudy Gobert', 'is_correct' => false],
                    ['answer' => 'Ben Wallace', 'is_correct' => true],
                    ['answer' => 'Kawhi Leonard', 'is_correct' => false],
                ],
            ],

            [
                'title' => "Combien de fois Kevin Durant a-t-il remporté le titre de meilleur marqueur de la saison régulière?",
                'category_id' => 1,
                'level_id' => 3,
                'sous_theme_id' => 3,
                'user_id' => 1,
                'answers' => [
                    ['answer' => '3', 'is_correct' => false],
                    ['answer' => '4', 'is_correct' => true],
                    ['answer' => '5', 'is_correct' => false],
                    ['answer' => '6', 'is_correct' => false],
                ],
            ],

            [
                'title' => "Qui détient le record du plus grand nombre de points marqués en un seul match de playoffs?",
                'category_id' => 1,
                'level_id' => 3,
                'sous_theme_id' => 3,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'LeBron James', 'is_correct' => false],
                    ['answer' => 'Michael Jordan', 'is_correct' => false],
                    ['answer' => 'Kobe Bryant', 'is_correct' => false],
                    ['answer' => 'Allen Iverson', 'is_correct' => true],
                ],
            ],

            [
                'title' => "Combien de fois Kobe Bryant a-t-il mené la NBA en points par match en saison régulière?",
                'category_id' => 1,
                'level_id' => 3,
                'sous_theme_id' => 3,
                'user_id' => 1,
                'answers' => [
                    ['answer' => '1', 'is_correct' => false],
                    ['answer' => '2', 'is_correct' => false],
                    ['answer' => '3', 'is_correct' => true],
                    ['answer' => '4', 'is_correct' => false],
                ],
            ],
            [
                'title' => "Qui est le protagoniste principal de la trilogie originale?",
                'category_id' => 1,
                'level_id' => 1,
                'sous_theme_id' => 1,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Han Solo', 'is_correct' => false],
                    ['answer' => 'Princess Leia', 'is_correct' => false],
                    ['answer' => 'Luke Skywalker', 'is_correct' => true],
                    ['answer' => 'Yoda', 'is_correct' => false],
                ],
            ],

            [
                'title' => "Quel droïde accompagne Luke Skywalker tout au long de son aventure?",
                'category_id' => 1,
                'level_id' => 1,
                'sous_theme_id' => 1,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'R2-D2', 'is_correct' => true],
                    ['answer' => 'C-3PO', 'is_correct' => false],
                    ['answer' => 'BB-8', 'is_correct' => false],
                    ['answer' => 'Dark Vador', 'is_correct' => false],
                ],
            ],

            [
                'title' => "Quelle planète désertique sert de lieu de résidence à Anakin Skywalker?",
                'category_id' => 1,
                'level_id' => 1,
                'sous_theme_id' => 1,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Hoth', 'is_correct' => false],
                    ['answer' => 'Tatooine', 'is_correct' => true],
                    ['answer' => 'Endor', 'is_correct' => false],
                    ['answer' => 'Naboo', 'is_correct' => false],
                ],
            ],

            [
                'title' => "Comment s'appelle le mentor de Luke Skywalker dans la trilogie originale?",
                'category_id' => 1,
                'level_id' => 1,
                'sous_theme_id' => 1,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Yoda', 'is_correct' => false],
                    ['answer' => 'Obi-Wan Kenobi', 'is_correct' => true],
                    ['answer' => 'Mace Windu', 'is_correct' => false],
                    ['answer' => 'Dark Vador', 'is_correct' => false],
                ],
            ],

            [
                'title' => "Quel est le nom du vaisseau spatial piloté par Han Solo?",
                'category_id' => 1,
                'level_id' => 1,
                'sous_theme_id' => 1,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Millennium Falcon', 'is_correct' => true],
                    ['answer' => 'X-wing', 'is_correct' => false],
                    ['answer' => 'Star Destroyer', 'is_correct' => false],
                    ['answer' => 'Slave I', 'is_correct' => false],
                ],
            ],

            [
                'title' => "Qui est le maître Jedi qui entraîne Obi-Wan Kenobi?",
                'category_id' => 1,
                'level_id' => 1,
                'sous_theme_id' => 1,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Yoda', 'is_correct' => false],
                    ['answer' => 'Mace Windu', 'is_correct' => false],
                    ['answer' => 'Qui-Gon Jinn', 'is_correct' => true],
                    ['answer' => 'Dark Vador', 'is_correct' => false],
                ],
            ],

            [
                'title' => "Quelle créature verte de petite taille parle de manière singulière?",
                'category_id' => 1,
                'level_id' => 1,
                'sous_theme_id' => 1,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Jabba the Hutt', 'is_correct' => false],
                    ['answer' => 'Chewbacca', 'is_correct' => false],
                    ['answer' => 'Yoda', 'is_correct' => true],
                    ['answer' => 'Ewok', 'is_correct' => false],
                ],
            ],

            [
                'title' => "Quel côté de la Force représente Darth Vader initialement?",
                'category_id' => 1,
                'level_id' => 1,
                'sous_theme_id' => 1,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Côté obscur', 'is_correct' => true],
                    ['answer' => 'Côté lumineux', 'is_correct' => false],
                    ['answer' => 'Neutre', 'is_correct' => false],
                    ['answer' => 'Gris', 'is_correct' => false],
                ],
            ],
            [
                'title' => "Quel est le nom de la princesse de la planète Alderaan?",
                'category_id' => 1,
                'level_id' => 1,
                'sous_theme_id' => 1,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Leia Organa', 'is_correct' => true],
                    ['answer' => 'Padmé Amidala', 'is_correct' => false],
                    ['answer' => 'Mon Mothma', 'is_correct' => false],
                    ['answer' => 'Ahsoka Tano', 'is_correct' => false],
                ],
            ],

            [
                'title' => "Quelle organisation criminelle Jabba the Hutt dirige-t-il?",
                'category_id' => 1,
                'level_id' => 1,
                'sous_theme_id' => 1,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Les Hutts', 'is_correct' => false],
                    ['answer' => 'L\'Échange', 'is_correct' => false],
                    ['answer' => 'La Pègre', 'is_correct' => true],
                    ['answer' => 'Les Mandaloriens', 'is_correct' => false],
                ],
            ],

            [
                'title' => "Qui est le bras droit de l'Empereur dans la trilogie originale?",
                'category_id' => 1,
                'level_id' => 1,
                'sous_theme_id' => 1,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Dark Vador', 'is_correct' => true],
                    ['answer' => 'Grand Moff Tarkin', 'is_correct' => false],
                    ['answer' => 'Comte Dooku', 'is_correct' => false],
                    ['answer' => 'Général Grievous', 'is_correct' => false],
                ],
            ],

            [
                'title' => "Comment s'appelle le Wookiee qui est le copilote du Faucon Millenium?",
                'category_id' => 1,
                'level_id' => 1,
                'sous_theme_id' => 1,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Chewbacca', 'is_correct' => true],
                    ['answer' => 'Tarfful', 'is_correct' => false],
                    ['answer' => 'Zaalbar', 'is_correct' => false],
                    ['answer' => 'Plo Koon', 'is_correct' => false],
                ],
            ],

            [
                'title' => "Quel personnage porte un masque respiratoire en forme de sablier?",
                'category_id' => 1,
                'level_id' => 1,
                'sous_theme_id' => 1,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Darth Vader', 'is_correct' => false],
                    ['answer' => 'Kylo Ren', 'is_correct' => false],
                    ['answer' => 'Boba Fett', 'is_correct' => true],
                    ['answer' => 'IG-88', 'is_correct' => false],
                ],
            ],

            [
                'title' => "Quelle station spatiale massive est détruite à la fin de l'épisode IV?",
                'category_id' => 1,
                'level_id' => 1,
                'sous_theme_id' => 1,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Étoile de la Mort', 'is_correct' => true],
                    ['answer' => 'Base Starkiller', 'is_correct' => false],
                    ['answer' => 'Station Tantive IV', 'is_correct' => false],
                    ['answer' => 'Station Spatiale Corellienne', 'is_correct' => false],
                ],
            ],

            [
                'title' => "Quel Jedi est surnommé 'le Maître Yoda'?",
                'category_id' => 1,
                'level_id' => 1,
                'sous_theme_id' => 1,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Qui-Gon Jinn', 'is_correct' => false],
                    ['answer' => 'Obi-Wan Kenobi', 'is_correct' => false],
                    ['answer' => 'Yoda', 'is_correct' => true],
                    ['answer' => 'Mace Windu', 'is_correct' => false],
                ],
            ],
            [
                'title' => "Quel est le nom de famille d'Anakin Skywalker avant sa transformation?",
                'category_id' => 1,
                'level_id' => 1,
                'sous_theme_id' => 1,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Kenobi', 'is_correct' => false],
                    ['answer' => 'Solo', 'is_correct' => false],
                    ['answer' => 'Skywalker', 'is_correct' => false],
                    ['answer' => 'Vador', 'is_correct' => true],
                ],
            ],

            [
                'title' => "Quel est le nom de la course de contrebandiers dans l'épisode I?",
                'category_id' => 1,
                'level_id' => 1,
                'sous_theme_id' => 1,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Podrace de Tatooine', 'is_correct' => true],
                    ['answer' => 'Speeder Sprint', 'is_correct' => false],
                    ['answer' => 'Hyperlane Rally', 'is_correct' => false],
                    ['answer' => 'Stellar Drift', 'is_correct' => false],
                ],
            ],

            [
                'title' => "Qui est le père de Luke Skywalker?",
                'category_id' => 1,
                'level_id' => 1,
                'sous_theme_id' => 1,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Han Solo', 'is_correct' => false],
                    ['answer' => 'Obi-Wan Kenobi', 'is_correct' => false],
                    ['answer' => 'Anakin Skywalker', 'is_correct' => true],
                    ['answer' => 'Yoda', 'is_correct' => false],
                ],
            ],

            [
                'title' => "Quel type de créature est Chewbacca?",
                'category_id' => 1,
                'level_id' => 1,
                'sous_theme_id' => 1,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Wookiee', 'is_correct' => true],
                    ['answer' => 'Ewok', 'is_correct' => false],
                    ['answer' => 'Trandoshan', 'is_correct' => false],
                    ['answer' => 'Mon Calamari', 'is_correct' => false],
                ],
            ],

            [
                'title' => "Comment s'appelle le désert de glace dans l'épisode V?",
                'category_id' => 1,
                'level_id' => 1,
                'sous_theme_id' => 1,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Désert de Hoth', 'is_correct' => true],
                    ['answer' => 'Désert de Tatooine', 'is_correct' => false],
                    ['answer' => 'Désert de Jakku', 'is_correct' => false],
                    ['answer' => 'Désert de Geonosis', 'is_correct' => false],
                ],
            ],
            [
                'title' => "Quel est le nom du chasseur de primes qui capture Han Solo dans l'épisode V?",
                'category_id' => 1,
                'level_id' => 2,
                'sous_theme_id' => 1,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Boba Fett', 'is_correct' => true],
                    ['answer' => 'Dengar', 'is_correct' => false],
                    ['answer' => 'IG-88', 'is_correct' => false],
                    ['answer' => 'Zuckuss', 'is_correct' => false],
                ],
            ],

            [
                'title' => "De quelle espèce est le chasseur de primes Bossk?",
                'category_id' => 1,
                'level_id' => 2,
                'sous_theme_id' => 1,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Trandoshan', 'is_correct' => true],
                    ['answer' => 'Rodian', 'is_correct' => false],
                    ['answer' => 'Bothan', 'is_correct' => false],
                    ['answer' => 'Mon Calamari', 'is_correct' => false],
                ],
            ],

            [
                'title' => "Qui est le commandant suprême des forces droïdes dans la prélogie?",
                'category_id' => 1,
                'level_id' => 2,
                'sous_theme_id' => 1,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Général Grievous', 'is_correct' => false],
                    ['answer' => 'Count Dooku', 'is_correct' => false],
                    ['answer' => 'Dark Vador', 'is_correct' => false],
                    ['answer' => 'Général Veers', 'is_correct' => true],
                ],
            ],

            [
                'title' => "Quel Jedi est le Padawan d'Anakin Skywalker?",
                'category_id' => 1,
                'level_id' => 2,
                'sous_theme_id' => 1,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Mace Windu', 'is_correct' => false],
                    ['answer' => 'Obi-Wan Kenobi', 'is_correct' => true],
                    ['answer' => 'Qui-Gon Jinn', 'is_correct' => false],
                    ['answer' => 'Yoda', 'is_correct' => false],
                ],
            ],

            [
                'title' => "Comment s'appelle la planète natale de Chewbacca?",
                'category_id' => 1,
                'level_id' => 2,
                'sous_theme_id' => 1,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Kashyyyk', 'is_correct' => true],
                    ['answer' => 'Endor', 'is_correct' => false],
                    ['answer' => 'Tatooine', 'is_correct' => false],
                    ['answer' => 'Dagobah', 'is_correct' => false],
                ],
            ],

            [
                'title' => "Qui est le contrebandier qui se sacrifie dans l'épisode VI?",
                'category_id' => 1,
                'level_id' => 2,
                'sous_theme_id' => 1,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Lando Calrissian', 'is_correct' => false],
                    ['answer' => 'Han Solo', 'is_correct' => false],
                    ['answer' => 'Chewbacca', 'is_correct' => false],
                    ['answer' => 'Nien Nunb', 'is_correct' => true],
                ],
            ],

            [
                'title' => "Quel est le nom du vaisseau spatial utilisé par les Sith dans la prélogie?",
                'category_id' => 1,
                'level_id' => 2,
                'sous_theme_id' => 1,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Slave I', 'is_correct' => false],
                    ['answer' => 'Imperator', 'is_correct' => false],
                    ['answer' => 'Executor', 'is_correct' => false],
                    ['answer' => 'Infiltrateur Sith', 'is_correct' => true],
                ],
            ],
            [
                'title' => "Quelle est la planète d'origine de Mace Windu?",
                'category_id' => 1,
                'level_id' => 2,
                'sous_theme_id' => 1,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Coruscant', 'is_correct' => false],
                    ['answer' => 'Tatooine', 'is_correct' => false],
                    ['answer' => 'Naboo', 'is_correct' => false],
                    ['answer' => 'Haruun Kal', 'is_correct' => true],
                ],
            ],

            [
                'title' => "Quel Sith se fait passer pour un sénateur dans l'épisode I?",
                'category_id' => 1,
                'level_id' => 2,
                'sous_theme_id' => 1,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Dark Vador', 'is_correct' => false],
                    ['answer' => 'Dark Maul', 'is_correct' => false],
                    ['answer' => 'Dark Tyranus (Count Dooku)', 'is_correct' => false],
                    ['answer' => 'Dark Sidious', 'is_correct' => true],
                ],
            ],

            [
                'title' => "Qui interprète le rôle de Han Solo dans la trilogie originale?",
                'category_id' => 1,
                'level_id' => 2,
                'sous_theme_id' => 1,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Mark Hamill', 'is_correct' => false],
                    ['answer' => 'Carrie Fisher', 'is_correct' => false],
                    ['answer' => 'Harrison Ford', 'is_correct' => true],
                    ['answer' => 'Peter Mayhew', 'is_correct' => false],
                ],
            ],

            [
                'title' => "Quelle est la race du chasseur de primes IG-88?",
                'category_id' => 1,
                'level_id' => 2,
                'sous_theme_id' => 1,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Rodian', 'is_correct' => false],
                    ['answer' => 'Trandoshan', 'is_correct' => false],
                    ['answer' => 'Droid', 'is_correct' => true],
                    ['answer' => 'Bothan', 'is_correct' => false],
                ],
            ],

            [
                'title' => "Quel Jedi est connu pour utiliser un double sabre laser rouge?",
                'category_id' => 1,
                'level_id' => 2,
                'sous_theme_id' => 1,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Qui-Gon Jinn', 'is_correct' => false],
                    ['answer' => 'Obi-Wan Kenobi', 'is_correct' => false],
                    ['answer' => 'Mace Windu', 'is_correct' => false],
                    ['answer' => 'Dark Maul', 'is_correct' => true],
                ],
            ],

            [
                'title' => "Quel est le nom du mentor de Han Solo dans sa jeunesse?",
                'category_id' => 1,
                'level_id' => 2,
                'sous_theme_id' => 1,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Lando Calrissian', 'is_correct' => false],
                    ['answer' => 'Chewbacca', 'is_correct' => false],
                    ['answer' => 'Qi\'ra', 'is_correct' => false],
                    ['answer' => 'Beckett', 'is_correct' => true],
                ],
            ],
            [
                'title' => "Qui dirige la Cité des Nuages dans l'épisode V?",
                'category_id' => 1,
                'level_id' => 2,
                'sous_theme_id' => 1,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Jabba the Hutt', 'is_correct' => false],
                    ['answer' => 'Boba Fett', 'is_correct' => false],
                    ['answer' => 'Lando Calrissian', 'is_correct' => true],
                    ['answer' => 'Dengar', 'is_correct' => false],
                ],
            ],

            [
                'title' => "Quel droïde accompagne Rey dans la trilogie de la postlogie?",
                'category_id' => 1,
                'level_id' => 2,
                'sous_theme_id' => 1,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'C-3PO', 'is_correct' => false],
                    ['answer' => 'R2-D2', 'is_correct' => false],
                    ['answer' => 'BB-8', 'is_correct' => true],
                    ['answer' => 'Chopper', 'is_correct' => false],
                ],
            ],

            [
                'title' => "Quelle planète est détruite par la super arme Starkiller dans l'épisode VII?",
                'category_id' => 1,
                'level_id' => 2,
                'sous_theme_id' => 1,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Tatooine', 'is_correct' => false],
                    ['answer' => 'Endor', 'is_correct' => false],
                    ['answer' => 'Jakku', 'is_correct' => false],
                    ['answer' => 'Hosnian Prime', 'is_correct' => true],
                ],
            ],

            [
                'title' => "Qui est le leader de la Résistance dans la postlogie?",
                'category_id' => 1,
                'level_id' => 2,
                'sous_theme_id' => 1,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Leia Organa', 'is_correct' => true],
                    ['answer' => 'Admiral Ackbar', 'is_correct' => false],
                    ['answer' => 'Mon Mothma', 'is_correct' => false],
                    ['answer' => 'Poe Dameron', 'is_correct' => false],
                ],
            ],

            [
                'title' => "Comment s'appelle la planète désertique dans l'épisode VII?",
                'category_id' => 1,
                'level_id' => 2,
                'sous_theme_id' => 1,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Tatooine', 'is_correct' => false],
                    ['answer' => 'Jakku', 'is_correct' => true],
                    ['answer' => 'Hoth', 'is_correct' => false],
                    ['answer' => 'Geonosis', 'is_correct' => false],
                ],
            ],

            [
                'title' => "Quel personnage dirige la Guilde des chasseurs de primes dans la série 'The Mandalorian'?",
                'category_id' => 1,
                'level_id' => 2,
                'sous_theme_id' => 1,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Boba Fett', 'is_correct' => false],
                    ['answer' => 'IG-88', 'is_correct' => false],
                    ['answer' => 'Greef Karga', 'is_correct' => true],
                    ['answer' => 'Cara Dune', 'is_correct' => false],
                ],
            ],

            [
                'title' => "Quel acteur joue le rôle de Kylo Ren dans la postlogie?",
                'category_id' => 1,
                'level_id' => 2,
                'sous_theme_id' => 1,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Daisy Ridley', 'is_correct' => false],
                    ['answer' => 'Adam Driver', 'is_correct' => true],
                    ['answer' => 'John Boyega', 'is_correct' => false],
                    ['answer' => 'Oscar Isaac', 'is_correct' => false],
                ],
            ],
            [
                'title' => "Quel est le nom du droïde astromécano qui accompagne Padmé Amidala dans la prélogie?",
                'category_id' => 1,
                'level_id' => 3,
                'sous_theme_id' => 1,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'R2-D2', 'is_correct' => false],
                    ['answer' => 'C-3PO', 'is_correct' => false],
                    ['answer' => 'BB-8', 'is_correct' => false],
                    ['answer' => 'R4-P17', 'is_correct' => true],
                ],
            ],

            [
                'title' => "Quel Sith est connu pour son double sabre laser à lame croisée?",
                'category_id' => 1,
                'level_id' => 3,
                'sous_theme_id' => 1,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Dark Sidious', 'is_correct' => false],
                    ['answer' => 'Dark Tyranus (Count Dooku)', 'is_correct' => false],
                    ['answer' => 'Dark Vader', 'is_correct' => false],
                    ['answer' => 'Dark Maul', 'is_correct' => true],
                ],
            ],

            [
                'title' => "Quelle est la véritable identité du chasseur de primes Mandalorien?",
                'category_id' => 1,
                'level_id' => 3,
                'sous_theme_id' => 1,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Jango Fett', 'is_correct' => false],
                    ['answer' => 'Boba Fett', 'is_correct' => false],
                    ['answer' => 'Din Djarin', 'is_correct' => true],
                    ['answer' => 'Cobb Vanth', 'is_correct' => false],
                ],
            ],

            [
                'title' => "Quel Jedi est le grand-père de Rey?",
                'category_id' => 1,
                'level_id' => 3,
                'sous_theme_id' => 1,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Obi-Wan Kenobi', 'is_correct' => false],
                    ['answer' => 'Qui-Gon Jinn', 'is_correct' => false],
                    ['answer' => 'Anakin Skywalker', 'is_correct' => true],
                    ['answer' => 'Yoda', 'is_correct' => false],
                ],
            ],

            [
                'title' => "Quel est le nom du droïde impérial qui torture Leia dans l'épisode IV?",
                'category_id' => 1,
                'level_id' => 3,
                'sous_theme_id' => 1,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'R2-D2', 'is_correct' => false],
                    ['answer' => 'IG-88', 'is_correct' => false],
                    ['answer' => 'C-3PO', 'is_correct' => false],
                    ['answer' => 'IT-O Interrogator', 'is_correct' => true],
                ],
            ],

            [
                'title' => "Quel est le nom du bataillon de clones dirigé par Cody dans la prélogie?",
                'category_id' => 1,
                'level_id' => 3,
                'sous_theme_id' => 1,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Bataillon 501', 'is_correct' => false],
                    ['answer' => 'Bataillon 212', 'is_correct' => false],
                    ['answer' => 'Bataillon 327', 'is_correct' => true],
                    ['answer' => 'Bataillon 1138', 'is_correct' => false],
                ],
            ],

            [
                'title' => "Qui est le concepteur du Faucon Millenium?",
                'category_id' => 1,
                'level_id' => 3,
                'sous_theme_id' => 1,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Watto', 'is_correct' => false],
                    ['answer' => 'Han Solo', 'is_correct' => false],
                    ['answer' => 'Lando Calrissian', 'is_correct' => false],
                    ['answer' => 'Nien Nunb', 'is_correct' => true],
                ],
            ],
            [
                'title' => "Quelle organisation dirigée par Saw Gerrera lutte contre l'Empire dans la prélogie?",
                'category_id' => 1,
                'level_id' => 3,
                'sous_theme_id' => 1,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'La Rébellion', 'is_correct' => false],
                    ['answer' => 'L\'Alliance Rebelle', 'is_correct' => false],
                    ['answer' => 'Les Partisans', 'is_correct' => true],
                    ['answer' => 'La Résistance', 'is_correct' => false],
                ],
            ],

            [
                'title' => "Quel est le nom du casino de Canto Bight dans l'épisode VIII?",
                'category_id' => 1,
                'level_id' => 3,
                'sous_theme_id' => 1,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Casino Royale', 'is_correct' => false],
                    ['answer' => 'Casino Imperial', 'is_correct' => false],
                    ['answer' => 'Casino Canto Bight', 'is_correct' => false],
                    ['answer' => 'Le Cercle des Croupiers', 'is_correct' => true],
                ],
            ],

            [
                'title' => "Quelle planète est le berceau des Jedi dans la prélogie?",
                'category_id' => 1,
                'level_id' => 3,
                'sous_theme_id' => 1,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Tatooine', 'is_correct' => false],
                    ['answer' => 'Coruscant', 'is_correct' => false],
                    ['answer' => 'Naboo', 'is_correct' => false],
                    ['answer' => 'Ilum', 'is_correct' => true],
                ],
            ],

            [
                'title' => "Quel personnage de la postlogie est également une ancienne Stormtrooper de l'Empire?",
                'category_id' => 1,
                'level_id' => 3,
                'sous_theme_id' => 1,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Poe Dameron', 'is_correct' => false],
                    ['answer' => 'Finn', 'is_correct' => true],
                    ['answer' => 'Kylo Ren', 'is_correct' => false],
                    ['answer' => 'Rey', 'is_correct' => false],
                ],
            ],

            [
                'title' => "Qui est le mentor de Qui-Gon Jinn?",
                'category_id' => 1,
                'level_id' => 3,
                'sous_theme_id' => 1,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Mace Windu', 'is_correct' => false],
                    ['answer' => 'Obi-Wan Kenobi', 'is_correct' => false],
                    ['answer' => 'Yoda', 'is_correct' => true],
                    ['answer' => 'Ki-Adi-Mundi', 'is_correct' => false],
                ],
            ],

            [
                'title' => "Quel est le nom de famille de la famille de sang royal sur Naboo?",
                'category_id' => 1,
                'level_id' => 3,
                'sous_theme_id' => 1,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Naberrie', 'is_correct' => false],
                    ['answer' => 'Skywalker', 'is_correct' => false],
                    ['answer' => 'Solo', 'is_correct' => false],
                    ['answer' => 'Amidala', 'is_correct' => true],
                ],
            ],
            [
                'title' => "Comment s'appelle le peuple guerrier sur la planète Mandalore?",
                'category_id' => 1,
                'level_id' => 3,
                'sous_theme_id' => 1,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Mandaloriens', 'is_correct' => true],
                    ['answer' => 'Sith', 'is_correct' => false],
                    ['answer' => 'Wookiees', 'is_correct' => false],
                    ['answer' => 'Ewoks', 'is_correct' => false],
                ],
            ],

            [
                'title' => "Quel Sith a manipulé Anakin Skywalker pour devenir Dark Vador?",
                'category_id' => 1,
                'level_id' => 3,
                'sous_theme_id' => 1,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Dark Tyranus (Count Dooku)', 'is_correct' => false],
                    ['answer' => 'Dark Maul', 'is_correct' => false],
                    ['answer' => 'Dark Sidious', 'is_correct' => true],
                    ['answer' => 'Dark Plagueis', 'is_correct' => false],
                ],
            ],

            [
                'title' => "Quelle organisation criminelle est dirigée par Dryden Vos dans 'Solo: A Star Wars Story'?",
                'category_id' => 1,
                'level_id' => 3,
                'sous_theme_id' => 1,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Les Hutts', 'is_correct' => false],
                    ['answer' => 'Les Pykes', 'is_correct' => false],
                    ['answer' => 'Les Crimson Dawn', 'is_correct' => true],
                    ['answer' => 'Les Guaviens', 'is_correct' => false],
                ],
            ],

            [
                'title' => "Qui est le créateur de l'armée droïde dans la prélogie?",
                'category_id' => 1,
                'level_id' => 3,
                'sous_theme_id' => 1,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Count Dooku', 'is_correct' => false],
                    ['answer' => 'Darth Vader', 'is_correct' => false],
                    ['answer' => 'Emperor Palpatine', 'is_correct' => true],
                    ['answer' => 'General Grievous', 'is_correct' => false],
                ],
            ],

            [
                'title' => "Quelle actrice joue le rôle de la vice-amirale Holdo dans l'épisode VIII?",
                'category_id' => 1,
                'level_id' => 3,
                'sous_theme_id' => 1,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Laura Dern', 'is_correct' => true],
                    ['answer' => 'Carrie Fisher', 'is_correct' => false],
                    ['answer' => 'Natalie Portman', 'is_correct' => false],
                    ['answer' => 'Felicity Jones', 'is_correct' => false],
                ],
            ],

            [
                'title' => "Quel est le nom du droïde impérial qui accompagne Krennic dans 'Rogue One'?",
                'category_id' => 1,
                'level_id' => 3,
                'sous_theme_id' => 1,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'IG-88', 'is_correct' => false],
                    ['answer' => 'K-2SO', 'is_correct' => true],
                    ['answer' => 'C-3PO', 'is_correct' => false],
                    ['answer' => 'R2-D2', 'is_correct' => false],
                ],
            ],

            [
                'title' => "Quelle est la planète natale de Poe Dameron dans la postlogie?",
                'category_id' => 1,
                'level_id' => 3,
                'sous_theme_id' => 1,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Jakku', 'is_correct' => false],
                    ['answer' => 'Tatooine', 'is_correct' => false],
                    ['answer' => 'Endor', 'is_correct' => false],
                    ['answer' => 'Yavin IV', 'is_correct' => true],
                ],
            ],
            [
                'title' => "Quelle planète désertique apparaît dans les deux trilogies, abritant des droïdes et Anakin Skywalker?",
                'category_id' => 1,
                'level_id' => 1,
                'sous_theme_id' => 1,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Endor', 'is_correct' => false],
                    ['answer' => 'Hoth', 'is_correct' => false],
                    ['answer' => 'Jakku', 'is_correct' => true],
                    ['answer' => 'Tatooine', 'is_correct' => false],
                ],
            ],

            [
                'title' => "Comment s'appelle le vaisseau spatial personnel de Dark Vador dans la trilogie originale?",
                'category_id' => 1,
                'level_id' => 1,
                'sous_theme_id' => 1,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'TIE Fighter', 'is_correct' => false],
                    ['answer' => 'Star Destroyer', 'is_correct' => false],
                    ['answer' => 'Imperial Shuttle', 'is_correct' => false],
                    ['answer' => 'TIE Advanced x1', 'is_correct' => true],
                ],
            ],

            [
                'title' => "Qui est le maître Jedi qui entraîne Anakin Skywalker dans la prélogie?",
                'category_id' => 1,
                'level_id' => 1,
                'sous_theme_id' => 1,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Yoda', 'is_correct' => false],
                    ['answer' => 'Mace Windu', 'is_correct' => false],
                    ['answer' => 'Qui-Gon Jinn', 'is_correct' => true],
                    ['answer' => 'Obi-Wan Kenobi', 'is_correct' => false],
                ],
            ],

            [
                'title' => "Quel contrebandier dirige la Cité des Nuages dans l'épisode V?",
                'category_id' => 1,
                'level_id' => 1,
                'sous_theme_id' => 1,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Han Solo', 'is_correct' => false],
                    ['answer' => 'Lando Calrissian', 'is_correct' => true],
                    ['answer' => 'Jabba the Hutt', 'is_correct' => false],
                    ['answer' => 'Chewbacca', 'is_correct' => false],
                ],
            ],

            [
                'title' => "Quel droïde accompagne Rey tout au long de la trilogie de la postlogie?",
                'category_id' => 1,
                'level_id' => 1,
                'sous_theme_id' => 1,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'C-3PO', 'is_correct' => false],
                    ['answer' => 'R2-D2', 'is_correct' => false],
                    ['answer' => 'BB-8', 'is_correct' => true],
                    ['answer' => 'K-2SO', 'is_correct' => false],
                ],
            ],

            [
                'title' => "Qui est le chef suprême du Premier Ordre dans la postlogie?",
                'category_id' => 1,
                'level_id' => 1,
                'sous_theme_id' => 1,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Snoke', 'is_correct' => true],
                    ['answer' => 'Kylo Ren', 'is_correct' => false],
                    ['answer' => 'General Hux', 'is_correct' => false],
                    ['answer' => 'Captain Phasma', 'is_correct' => false],
                ],
            ],

            [
                'title' => "Quel personnage emblématique est interprété par Harrison Ford dans la trilogie originale?",
                'category_id' => 1,
                'level_id' => 1,
                'sous_theme_id' => 1,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Obi-Wan Kenobi', 'is_correct' => false],
                    ['answer' => 'Darth Vader', 'is_correct' => false],
                    ['answer' => 'Han Solo', 'is_correct' => true],
                    ['answer' => 'Luke Skywalker', 'is_correct' => false],
                ],
            ],

            [
                'title' => "Quel Jedi est surnommé 'le Juste' et est également le maître d'Obi-Wan Kenobi?",
                'category_id' => 1,
                'level_id' => 1,
                'sous_theme_id' => 1,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Mace Windu', 'is_correct' => false],
                    ['answer' => 'Qui-Gon Jinn', 'is_correct' => true],
                    ['answer' => 'Yoda', 'is_correct' => false],
                    ['answer' => 'Ki-Adi-Mundi', 'is_correct' => false],
                ],
            ],

            [
                'title' => "Comment s'appelle le mentor de Luke Skywalker dans la postlogie?",
                'category_id' => 1,
                'level_id' => 1,
                'sous_theme_id' => 1,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Han Solo', 'is_correct' => false],
                    ['answer' => 'Leia Organa', 'is_correct' => false],
                    ['answer' => 'Obi-Wan Kenobi', 'is_correct' => false],
                    ['answer' => 'Rey', 'is_correct' => true],
                ],
            ],

            [
                'title' => "Quelle espèce est Yoda?",
                'category_id' => 1,
                'level_id' => 1,
                'sous_theme_id' => 1,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Wookiee', 'is_correct' => false],
                    ['answer' => 'Ewok', 'is_correct' => false],
                    ['answer' => 'Hutt', 'is_correct' => false],
                    ['answer' => 'Yoda est d\'une espèce inconnue', 'is_correct' => true],
                ],
            ],
            [
                'title' => "Quel personnage mandalorien reçoit l'ordre de tuer Grogu dans la série 'The Mandalorian'?",
                'category_id' => 1,
                'level_id' => 2,
                'sous_theme_id' => 1,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Boba Fett', 'is_correct' => false],
                    ['answer' => 'Bo-Katan Kryze', 'is_correct' => false],
                    ['answer' => 'Din Djarin (Le Mandalorien)', 'is_correct' => true],
                    ['answer' => 'Cara Dune', 'is_correct' => false],
                ],
            ],

            [
                'title' => "Qui est le leader de la Résistance dans l'épisode VII?",
                'category_id' => 1,
                'level_id' => 2,
                'sous_theme_id' => 1,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Han Solo', 'is_correct' => false],
                    ['answer' => 'Leia Organa', 'is_correct' => false],
                    ['answer' => 'Luke Skywalker', 'is_correct' => false],
                    ['answer' => 'General Leia Organa', 'is_correct' => true],
                ],
            ],

            [
                'title' => "Quelle planète est détruite par la première Étoile de la Mort dans l'épisode IV?",
                'category_id' => 1,
                'level_id' => 2,
                'sous_theme_id' => 1,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Hoth', 'is_correct' => false],
                    ['answer' => 'Endor', 'is_correct' => false],
                    ['answer' => 'Alderaan', 'is_correct' => true],
                    ['answer' => 'Tatooine', 'is_correct' => false],
                ],
            ],

            [
                'title' => "Comment s'appelle le droïde astromécano qui accompagne Obi-Wan Kenobi dans la prélogie?",
                'category_id' => 1,
                'level_id' => 2,
                'sous_theme_id' => 1,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'BB-8', 'is_correct' => false],
                    ['answer' => 'C-3PO', 'is_correct' => false],
                    ['answer' => 'R2-D2', 'is_correct' => true],
                    ['answer' => 'K-2SO', 'is_correct' => false],
                ],
            ],

            [
                'title' => "Qui est le créateur de l'armée de clones dans la prélogie?",
                'category_id' => 1,
                'level_id' => 2,
                'sous_theme_id' => 1,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Count Dooku', 'is_correct' => false],
                    ['answer' => 'Emperor Palpatine', 'is_correct' => false],
                    ['answer' => 'Jango Fett', 'is_correct' => true],
                    ['answer' => 'General Grievous', 'is_correct' => false],
                ],
            ],

            [
                'title' => "Quel Jedi perd sa main droite lors d'un duel au sabre laser dans l'épisode V?",
                'category_id' => 1,
                'level_id' => 2,
                'sous_theme_id' => 1,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Mace Windu', 'is_correct' => false],
                    ['answer' => 'Qui-Gon Jinn', 'is_correct' => false],
                    ['answer' => 'Obi-Wan Kenobi', 'is_correct' => false],
                    ['answer' => 'Luke Skywalker', 'is_correct' => true],
                ],
            ],

            [
                'title' => "Quel personnage de la postlogie est également une ancienne Stormtrooper de l'Empire?",
                'category_id' => 1,
                'level_id' => 2,
                'sous_theme_id' => 1,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Kylo Ren', 'is_correct' => false],
                    ['answer' => 'Poe Dameron', 'is_correct' => false],
                    ['answer' => 'Rey', 'is_correct' => true],
                    ['answer' => 'Finn', 'is_correct' => false],
                ],
            ],

            [
                'title' => "Comment s'appelle la planète océanique où se cache le peuple Gungan dans l'épisode I?",
                'category_id' => 1,
                'level_id' => 2,
                'sous_theme_id' => 1,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Naboo', 'is_correct' => true],
                    ['answer' => 'Mon Cala', 'is_correct' => false],
                    ['answer' => 'Kashyyyk', 'is_correct' => false],
                    ['answer' => 'Dagobah', 'is_correct' => false],
                ],
            ],

            [
                'title' => "Quel Jedi utilise un sabre laser violet dans la trilogie prélogique?",
                'category_id' => 1,
                'level_id' => 2,
                'sous_theme_id' => 1,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Mace Windu', 'is_correct' => true],
                    ['answer' => 'Qui-Gon Jinn', 'is_correct' => false],
                    ['answer' => 'Kit Fisto', 'is_correct' => false],
                    ['answer' => 'Aayla Secura', 'is_correct' => false],
                ],
            ],

            [
                'title' => "Quel chasseur de primes mandalorien apparaît dans 'The Clone Wars' et 'Rebels'?",
                'category_id' => 1,
                'level_id' => 2,
                'sous_theme_id' => 1,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Sabine Wren', 'is_correct' => true],
                    ['answer' => 'Cad Bane', 'is_correct' => false],
                    ['answer' => 'Jango Fett', 'is_correct' => false],
                    ['answer' => 'Aurra Sing', 'is_correct' => false],
                ],
            ],
            [
                'title' => "Quel Sith est responsable de la création du virus de l'ombre noire dans la série animée 'The Clone Wars'?",
                'category_id' => 1,
                'level_id' => 3,
                'sous_theme_id' => 1,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Darth Maul', 'is_correct' => false],
                    ['answer' => 'Darth Tyranus (Comte Dooku)', 'is_correct' => true],
                    ['answer' => 'Darth Sidious', 'is_correct' => false],
                    ['answer' => 'Darth Vader', 'is_correct' => false],
                ],
            ],

            [
                'title' => "Quel est le nom du vaisseau spatial commandé par General Grievous?",
                'category_id' => 1,
                'level_id' => 3,
                'sous_theme_id' => 1,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'The Devastator', 'is_correct' => false],
                    ['answer' => 'The Malevolence', 'is_correct' => true],
                    ['answer' => 'The Invisible Hand', 'is_correct' => false],
                    ['answer' => 'The Executor', 'is_correct' => false],
                ],
            ],

            [
                'title' => "Qui est le père de la pilote de chasse Ahsoka Tano?",
                'category_id' => 1,
                'level_id' => 3,
                'sous_theme_id' => 1,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Anakin Skywalker', 'is_correct' => false],
                    ['answer' => 'Obi-Wan Kenobi', 'is_correct' => false],
                    ['answer' => 'Mace Windu', 'is_correct' => false],
                    ['answer' => 'Bail Organa', 'is_correct' => true],
                ],
            ],

            [
                'title' => "Quel ancien Jedi devient le leader du Mouvement de résistance après la chute de l'Empire?",
                'category_id' => 1,
                'level_id' => 3,
                'sous_theme_id' => 1,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Quinlan Vos', 'is_correct' => false],
                    ['answer' => 'Ahsoka Tano', 'is_correct' => false],
                    ['answer' => 'Kanan Jarrus', 'is_correct' => false],
                    ['answer' => 'Luke Skywalker', 'is_correct' => true],
                ],
            ],

            [
                'title' => "Quel Jedi, bien que brièvement, succède à Mace Windu comme maître de l'ordre Jedi?",
                'category_id' => 1,
                'level_id' => 3,
                'sous_theme_id' => 1,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Qui-Gon Jinn', 'is_correct' => false],
                    ['answer' => 'Plo Koon', 'is_correct' => true],
                    ['answer' => 'Kit Fisto', 'is_correct' => false],
                    ['answer' => 'Aayla Secura', 'is_correct' => false],
                ],
            ],

            [
                'title' => "Comment s'appelle la planète natale de Maz Kanata?",
                'category_id' => 1,
                'level_id' => 3,
                'sous_theme_id' => 1,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Takodana', 'is_correct' => true],
                    ['answer' => 'Dathomir', 'is_correct' => false],
                    ['answer' => 'Jakku', 'is_correct' => false],
                    ['answer' => 'Endor', 'is_correct' => false],
                ],
            ],

            [
                'title' => "Quel est le nom du groupe extrémiste sur Jedha dans 'Rogue One'?",
                'category_id' => 1,
                'level_id' => 3,
                'sous_theme_id' => 1,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Les Rebelles', 'is_correct' => false],
                    ['answer' => 'La Résistance', 'is_correct' => false],
                    ['answer' => 'Les Partisans', 'is_correct' => true],
                    ['answer' => 'L\'Empire', 'is_correct' => false],
                ],
            ],

            [
                'title' => "Quel Sith est tué par Mace Windu lors du combat dans le bureau du Chancelier dans la prélogie?",
                'category_id' => 1,
                'level_id' => 3,
                'sous_theme_id' => 1,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Darth Maul', 'is_correct' => false],
                    ['answer' => 'Darth Tyranus (Comte Dooku)', 'is_correct' => false],
                    ['answer' => 'Darth Sidious', 'is_correct' => true],
                    ['answer' => 'Darth Vader', 'is_correct' => false],
                ],
            ],

            [
                'title' => "Comment s'appelle le réseau criminel dirigé par Dryden Vos dans 'Solo: A Star Wars Story'?",
                'category_id' => 1,
                'level_id' => 3,
                'sous_theme_id' => 1,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Le Crimson Dawn', 'is_correct' => true],
                    ['answer' => 'Les Hutts', 'is_correct' => false],
                    ['answer' => 'Les Pykes', 'is_correct' => false],
                    ['answer' => 'Les Épices Noires', 'is_correct' => false],
                ],
            ],

            [
                'title' => "Quel Sith est responsable de la création de l'armée droïde dans la prélogie?",
                'category_id' => 1,
                'level_id' => 3,
                'sous_theme_id' => 1,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Darth Sidious', 'is_correct' => true],
                    ['answer' => 'Darth Tyranus (Comte Dooku)', 'is_correct' => false],
                    ['answer' => 'Darth Maul', 'is_correct' => false],
                    ['answer' => 'Darth Vader', 'is_correct' => false],
                ],
            ],
        ];

        foreach ($questionsData as $questionData) {
            $category = Category::where('id', $questionData['category_id'])->firstOrFail();
            $level = Level::find($questionData['level_id']);
            $sous_theme = SousTheme::where('id', $questionData['sous_theme_id'])->firstOrFail();
            $user = User::where('id', $questionData['user_id'])->firstOrFail();

            $createdQuestion = Question::create([
                'question' => $questionData['title'],
                'level_id' => $level->id,
                'category_id' => $category->id,
                'sous_theme_id' => $sous_theme->id,
                'user_id' => $user->id,
            ]);

            // Ajout manuel des réponses à la question
            foreach ($questionData['answers'] as $answer) {
                Answer::create([
                    'question_id' => $createdQuestion->id,
                    'answer' => $answer['answer'],
                    'is_correct' => $answer['is_correct'],
                ]);
            }
        }
    }
}

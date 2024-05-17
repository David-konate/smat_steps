<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Level;
use App\Models\Theme;
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
            //rapUS200
            [
                'title' => "Quel duo a sorti l'album 'Speakerboxxx/The Love Below' en 2003 ?",

                'level_id' => 1,
                'sous_theme_id' => 5,
                'theme_id' => 5,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Outkast', 'is_correct' => true],
                    ['answer' => 'Black Eyed Peas', 'is_correct' => false],
                    ['answer' => 'Wu-Tang Clan', 'is_correct' => false],
                    ['answer' => 'Run-D.M.C.', 'is_correct' => false],
                ],
            ],
            [
                'title' => "Quel rappeur est connu pour son single 'Hot in Herre' en 2002 ?",

                'level_id' => 1,
                'sous_theme_id' => 5,
                'theme_id' => 5,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Nelly', 'is_correct' => true],
                    ['answer' => 'Snoop Dogg', 'is_correct' => false],
                    ['answer' => 'Jay-Z', 'is_correct' => false],
                    ['answer' => '50 Cent', 'is_correct' => false],
                ],
            ],
            [
                'title' => "Qui est l'artiste derrière l'album 'The College Dropout' en 2004 ?",

                'level_id' => 1,
                'sous_theme_id' => 5,
                'theme_id' => 5,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Kanye West', 'is_correct' => true],
                    ['answer' => 'Eminem', 'is_correct' => false],
                    ['answer' => 'Drake', 'is_correct' => false],
                    ['answer' => 'Lil Wayne', 'is_correct' => false],
                ],
            ],
            [
                'title' => "Quelle chanson de 50 Cent a été un énorme succès en 2003 ?",

                'level_id' => 1,
                'sous_theme_id' => 5,
                'theme_id' => 5,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'In da Club', 'is_correct' => true],
                    ['answer' => 'Candy Shop', 'is_correct' => false],
                    ['answer' => '21 Questions', 'is_correct' => false],
                    ['answer' => 'P.I.M.P.', 'is_correct' => false],
                ],
            ],
            [
                'title' => "Quel est le vrai nom du rappeur Eminem ?",

                'level_id' => 1,
                'sous_theme_id' => 5,
                'theme_id' => 5,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Marshall Mathers', 'is_correct' => true],
                    ['answer' => 'Calvin Broadus', 'is_correct' => false],
                    ['answer' => 'Curtis Jackson', 'is_correct' => false],
                    ['answer' => 'Shawn Carter', 'is_correct' => false],
                ],
            ],
            [
                'title' => "Quel rappeur a sorti l'album 'Get Rich or Die Tryin'' en 2003 ?",

                'level_id' => 1,
                'sous_theme_id' => 5,
                'theme_id' => 5,
                'user_id' => 1,
                'answers' => [
                    ['answer' => '50 Cent', 'is_correct' => true],
                    ['answer' => 'Eminem', 'is_correct' => false],
                    ['answer' => 'Jay-Z', 'is_correct' => false],
                    ['answer' => 'Dr. Dre', 'is_correct' => false],
                ],
            ],
            [
                'title' => "Qui est souvent surnommé 'The King of Crunk' ?",

                'level_id' => 1,
                'sous_theme_id' => 5,
                'theme_id' => 5,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Lil Jon', 'is_correct' => true],
                    ['answer' => 'Nas', 'is_correct' => false],
                    ['answer' => 'Eminem', 'is_correct' => false],
                    ['answer' => 'Kanye West', 'is_correct' => false],
                ],
            ],
            [
                'title' => "Quel rappeur a été tué à Las Vegas en 1996 mais a continué à sortir des albums posthumes dans les années 2000 ?",

                'level_id' => 1,
                'sous_theme_id' => 5,
                'theme_id' => 5,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Tupac Shakur', 'is_correct' => true],
                    ['answer' => 'The Notorious B.I.G.', 'is_correct' => false],
                    ['answer' => 'Eazy-E', 'is_correct' => false],
                    ['answer' => 'Big L', 'is_correct' => false],
                ],
            ],
            [
                'title' => "Quel artiste a sorti l'album 'The Blueprint' en 2001 ?",

                'level_id' => 1,
                'sous_theme_id' => 5,
                'theme_id' => 5,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Jay-Z', 'is_correct' => true],
                    ['answer' => 'Nas', 'is_correct' => false],
                    ['answer' => 'Eminem', 'is_correct' => false],
                    ['answer' => 'Dr. Dre', 'is_correct' => false],
                ],
            ],
            [
                'title' => "Quel est le nom du premier single de Kanye West ?",

                'level_id' => 1,
                'sous_theme_id' => 5,
                'theme_id' => 5,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Through the Wire', 'is_correct' => true],
                    ['answer' => 'Stronger', 'is_correct' => false],
                    ['answer' => 'Jesus Walks', 'is_correct' => false],
                    ['answer' => 'Gold Digger', 'is_correct' => false],
                ],
            ],
            [
                'title' => "Quel rappeur a sorti l'album 'Encore' en 2004 ?",

                'level_id' => 1,
                'sous_theme_id' => 5,
                'theme_id' => 5,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Eminem', 'is_correct' => true],
                    ['answer' => '50 Cent', 'is_correct' => false],
                    ['answer' => 'Kanye West', 'is_correct' => false],
                    ['answer' => 'Dr. Dre', 'is_correct' => false],
                ],
            ],
            [
                'title' => "Quelle chanson de Ludacris a remporté le Grammy Award de la meilleure chanson rap en 2007 ?",

                'level_id' => 1,
                'sous_theme_id' => 5,
                'theme_id' => 5,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Money Maker', 'is_correct' => true],
                    ['answer' => 'Stand Up', 'is_correct' => false],
                    ['answer' => 'Rollout (My Business)', 'is_correct' => false],
                    ['answer' => 'Get Back', 'is_correct' => false],
                ],
            ],
            [
                'title' => "Quel groupe a sorti l'album 'Stankonia' en 2000 ?",

                'level_id' => 1,
                'sous_theme_id' => 5,
                'theme_id' => 5,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Outkast', 'is_correct' => true],
                    ['answer' => 'Wu-Tang Clan', 'is_correct' => false],
                    ['answer' => 'N.W.A', 'is_correct' => false],
                    ['answer' => 'Public Enemy', 'is_correct' => false],
                ],
            ],
            [
                'title' => "Quel est le nom du rappeur derrière l'album 'The Massacre' en 2005 ?",

                'level_id' => 1,
                'sous_theme_id' => 5,
                'theme_id' => 5,
                'user_id' => 1,
                'answers' => [
                    ['answer' => '50 Cent', 'is_correct' => true],
                    ['answer' => 'Eminem', 'is_correct' => false],
                    ['answer' => 'Kanye West', 'is_correct' => false],
                    ['answer' => 'Jay-Z', 'is_correct' => false],
                ],
            ],
            [
                'title' => "Quel rappeur est connu pour son single 'In Da Club' en 2003 ?",

                'level_id' => 1,
                'sous_theme_id' => 5,
                'theme_id' => 5,
                'user_id' => 1,
                'answers' => [
                    ['answer' => '50 Cent', 'is_correct' => true],
                    ['answer' => 'Eminem', 'is_correct' => false],
                    ['answer' => 'Jay-Z', 'is_correct' => false],
                    ['answer' => 'Dr. Dre', 'is_correct' => false],
                ],
            ],
            [
                'title' => "Quel artiste a sorti l'album 'The Eminem Show' en 2002 ?",

                'level_id' => 1,
                'sous_theme_id' => 5,
                'theme_id' => 5,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Eminem', 'is_correct' => true],
                    ['answer' => 'Dr. Dre', 'is_correct' => false],
                    ['answer' => '50 Cent', 'is_correct' => false],
                    ['answer' => 'Jay-Z', 'is_correct' => false],
                ],
            ],
            [
                'title' => "Qui est le leader du groupe OutKast ?",

                'level_id' => 1,
                'sous_theme_id' => 5,
                'theme_id' => 5,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'André 3000', 'is_correct' => true],
                    ['answer' => 'Big Boi', 'is_correct' => false],
                    ['answer' => 'Dr. Dre', 'is_correct' => false],
                    ['answer' => 'Snoop Dogg', 'is_correct' => false],
                ],
            ],
            [
                'title' => "Quel rappeur est également connu sous le nom de Hova ?",

                'level_id' => 1,
                'sous_theme_id' => 5,
                'theme_id' => 5,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Jay-Z', 'is_correct' => true],
                    ['answer' => 'Nas', 'is_correct' => false],
                    ['answer' => 'Kanye West', 'is_correct' => false],
                    ['answer' => 'Eminem', 'is_correct' => false],
                ],
            ],
            [
                'title' => "Quelle chanson de Kanye West a été un succès en 2004 ?",

                'level_id' => 1,
                'sous_theme_id' => 5,
                'theme_id' => 5,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Jesus Walks', 'is_correct' => true],
                    ['answer' => 'Gold Digger', 'is_correct' => false],
                    ['answer' => 'Stronger', 'is_correct' => false],
                    ['answer' => 'Through the Wire', 'is_correct' => false],
                ],
            ],
            [
                'title' => "Quel est le vrai nom du rappeur 50 Cent ?",

                'level_id' => 1,
                'sous_theme_id' => 5,
                'theme_id' => 5,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Curtis Jackson', 'is_correct' => true],
                    ['answer' => 'Marshall Mathers', 'is_correct' => false],
                    ['answer' => 'Andre Young', 'is_correct' => false],
                    ['answer' => 'Shawn Carter', 'is_correct' => false],
                ],
            ],
            [
                'title' => "Quel duo a sorti l'album 'Hell: The Sequel' en 2011 ?",

                'level_id' => 1,
                'sous_theme_id' => 5,
                'theme_id' => 5,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Bad Meets Evil', 'is_correct' => true],
                    ['answer' => 'Run the Jewels', 'is_correct' => false],
                    ['answer' => 'Mobb Deep', 'is_correct' => false],
                    ['answer' => 'Gang Starr', 'is_correct' => false],
                ],
            ],
            [
                'title' => "Quelle chanson de Jay-Z contient les paroles 'H.O.V.A.' ?",

                'level_id' => 1,
                'sous_theme_id' => 5,
                'theme_id' => 5,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Izzo', 'is_correct' => true],
                    ['answer' => '99 Problems', 'is_correct' => false],
                    ['answer' => 'Big Pimpin', 'is_correct' => false],
                    ['answer' => 'Empire State of Mind', 'is_correct' => false],
                ],
            ],
            [
                'title' => "Quel rappeur a sorti l'album 'The Documentary 2.5' en 2015 ?",

                'level_id' => 1,
                'sous_theme_id' => 5,
                'theme_id' => 5,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'The Game', 'is_correct' => true],
                    ['answer' => 'Kendrick Lamar', 'is_correct' => false],
                    ['answer' => 'Dr. Dre', 'is_correct' => false],
                    ['answer' => '50 Cent', 'is_correct' => false],
                ],
            ],
            [
                'title' => "Quelle chanson de Lil Wayne a été un hit en 2009 ?",

                'level_id' => 1,
                'sous_theme_id' => 5,
                'theme_id' => 5,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Lollipop', 'is_correct' => true],
                    ['answer' => 'A Milli', 'is_correct' => false],
                    ['answer' => '6 Foot 7 Foot', 'is_correct' => false],
                    ['answer' => 'How to Love', 'is_correct' => false],
                ],
            ],
            //save ok
            [
                'title' => "Quel artiste a sorti l'album 'Tha Carter III' en 2008 ?",

                'level_id' => 2,
                'sous_theme_id' => 5,
                'theme_id' => 5,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Lil Wayne', 'is_correct' => true],
                    ['answer' => 'Eminem', 'is_correct' => false],
                    ['answer' => 'Kanye West', 'is_correct' => false],
                    ['answer' => 'Jay-Z', 'is_correct' => false],
                ],
            ],
            [
                'title' => "Quel rappeur a sorti l'album 'Tha Carter II' en 2005 ?",

                'level_id' => 2,
                'sous_theme_id' => 5,
                'theme_id' => 5,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Lil Wayne', 'is_correct' => true],
                    ['answer' => 'Eminem', 'is_correct' => false],
                    ['answer' => 'Kanye West', 'is_correct' => false],
                    ['answer' => 'Jay-Z', 'is_correct' => false],
                ],
            ],
            [
                'title' => "Quel artiste a sorti l'album 'Graduation' en 2007 ?",

                'level_id' => 2,
                'sous_theme_id' => 5,
                'theme_id' => 5,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Kanye West', 'is_correct' => true],
                    ['answer' => 'Jay-Z', 'is_correct' => false],
                    ['answer' => 'Lil Wayne', 'is_correct' => false],
                    ['answer' => 'Eminem', 'is_correct' => false],
                ],
            ],
            [
                'title' => "Quelle chanson de Missy Elliott a été un succès en 2002 ?",

                'level_id' => 2,
                'sous_theme_id' => 5,
                'theme_id' => 5,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Work It', 'is_correct' => true],
                    ['answer' => 'Get Ur Freak On', 'is_correct' => false],
                    ['answer' => 'Lose Control', 'is_correct' => false],
                    ['answer' => 'Gossip Folks', 'is_correct' => false],
                ],
            ],
            [
                'title' => "Quel rappeur est également connu sous le nom de Slim Shady ?",

                'level_id' => 2,
                'sous_theme_id' => 5,
                'theme_id' => 5,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Eminem', 'is_correct' => true],
                    ['answer' => 'Jay-Z', 'is_correct' => false],
                    ['answer' => 'Lil Wayne', 'is_correct' => false],
                    ['answer' => 'Kanye West', 'is_correct' => false],
                ],
            ],
            [
                'title' => "Quel est le nom du groupe derrière la chanson 'Yeah!' en 2004 ?",

                'level_id' => 2,
                'sous_theme_id' => 5,
                'theme_id' => 5,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Usher featuring Lil Jon & Ludacris', 'is_correct' => true],
                    ['answer' => 'OutKast', 'is_correct' => false],
                    ['answer' => 'The Black Eyed Peas', 'is_correct' => false],
                    ['answer' => 'Nelly', 'is_correct' => false],
                ],
            ],
            [
                'title' => "Quel artiste a sorti l'album 'The Black Album' en 2003 ?",

                'level_id' => 2,
                'sous_theme_id' => 5,
                'theme_id' => 5,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Jay-Z', 'is_correct' => true],
                    ['answer' => 'Eminem', 'is_correct' => false],
                    ['answer' => 'Kanye West', 'is_correct' => false],
                    ['answer' => 'Nas', 'is_correct' => false],
                ],
            ],
            [
                'title' => "Quelle chanson de Jay-Z a été un énorme succès en 2001 ?",

                'level_id' => 2,
                'sous_theme_id' => 5,
                'theme_id' => 5,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Izzo (H.O.V.A.)', 'is_correct' => true],
                    ['answer' => '99 Problems', 'is_correct' => false],
                    ['answer' => 'Big Pimpin', 'is_correct' => false],
                    ['answer' => 'Hard Knock Life (Ghetto Anthem)', 'is_correct' => false],
                ],
            ],
            [
                'title' => "Quel rappeur a sorti l'album 'The Documentary' en 2005 ?",

                'level_id' => 2,
                'sous_theme_id' => 5,
                'theme_id' => 5,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'The Game', 'is_correct' => true],
                    ['answer' => 'Eminem', 'is_correct' => false],
                    ['answer' => '50 Cent', 'is_correct' => false],
                    ['answer' => 'Dr. Dre', 'is_correct' => false],
                ],
            ],
            [
                'title' => "Quelle chanson de Nelly a été un hit en 2001 ?",

                'level_id' => 2,
                'sous_theme_id' => 5,
                'theme_id' => 5,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Hot in Herre', 'is_correct' => true],
                    ['answer' => 'Dilemma', 'is_correct' => false],
                    ['answer' => 'Ride wit Me', 'is_correct' => false],
                    ['answer' => 'Country Grammar (Hot Shit)', 'is_correct' => false],
                ],
            ],
            [
                'title' => "Quel est le nom du duo de rappeurs constitué de Big Boi et André 3000 ?",

                'level_id' => 2,
                'sous_theme_id' => 5,
                'theme_id' => 5,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'OutKast', 'is_correct' => true],
                    ['answer' => 'Mobb Deep', 'is_correct' => false],
                    ['answer' => 'Wu-Tang Clan', 'is_correct' => false],
                    ['answer' => 'Run the Jewels', 'is_correct' => false],
                ],
            ],
            [
                'title' => "Quel rappeur a sorti l'album 'Straight Outta Cashville' en 2004 ?",

                'level_id' => 2,
                'sous_theme_id' => 5,
                'theme_id' => 5,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Young Buck', 'is_correct' => true],
                    ['answer' => 'Lil Wayne', 'is_correct' => false],
                    ['answer' => 'Eminem', 'is_correct' => false],
                    ['answer' => '50 Cent', 'is_correct' => false],
                ],
            ],
            [
                'title' => "Quel artiste a sorti l'album 'Food & Liquor' en 2006 ?",

                'level_id' => 2,
                'sous_theme_id' => 5,
                'theme_id' => 5,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Lupe Fiasco', 'is_correct' => true],
                    ['answer' => 'Kanye West', 'is_correct' => false],
                    ['answer' => 'Jay-Z', 'is_correct' => false],
                    ['answer' => 'T.I.', 'is_correct' => false],
                ],
            ],
            [
                'title' => "Quelle chanson de T.I. a été un succès en 2008 ?",

                'level_id' => 2,
                'sous_theme_id' => 5,
                'theme_id' => 5,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Whatever You Like', 'is_correct' => true],
                    ['answer' => 'Live Your Life', 'is_correct' => false],
                    ['answer' => 'Swagga Like Us', 'is_correct' => false],
                    ['answer' => 'Dead and Gone', 'is_correct' => false],
                ],
            ],
            [
                'title' => "Quel rappeur est connu pour sa chanson 'Lose Yourself' en 2002 ?",

                'level_id' => 2,
                'sous_theme_id' => 5,
                'theme_id' => 5,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Eminem', 'is_correct' => true],
                    ['answer' => '50 Cent', 'is_correct' => false],
                    ['answer' => 'Dr. Dre', 'is_correct' => false],
                    ['answer' => 'Jay-Z', 'is_correct' => false],
                ],
            ],
            [
                'title' => "Quel est le vrai nom du rappeur 50 Cent ?",

                'level_id' => 2,
                'sous_theme_id' => 5,
                'theme_id' => 5,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Curtis James Jackson III', 'is_correct' => true],
                    ['answer' => 'Andre Young', 'is_correct' => false],
                    ['answer' => 'Shawn Carter', 'is_correct' => false],
                    ['answer' => 'Kanye West', 'is_correct' => false],
                ],
            ],

            [
                'title' => "Quel rappeur a sorti l'album 'Late Registration' en 2005 ?",

                'level_id' => 3,
                'sous_theme_id' => 5,
                'theme_id' => 5,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Kanye West', 'is_correct' => true],
                    ['answer' => 'Jay-Z', 'is_correct' => false],
                    ['answer' => 'Eminem', 'is_correct' => false],
                    ['answer' => 'Lil Wayne', 'is_correct' => false],
                ],
            ],
            [
                'title' => "Quelle chanson de Kanye West a remporté le Grammy Award de la meilleure chanson rap en 2005 ?",

                'level_id' => 3,
                'sous_theme_id' => 5,
                'theme_id' => 5,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Jesus Walks', 'is_correct' => true],
                    ['answer' => 'Gold Digger', 'is_correct' => false],
                    ['answer' => 'Stronger', 'is_correct' => false],
                    ['answer' => 'Heartless', 'is_correct' => false],
                ],
            ],
            [
                'title' => "Quel artiste a sorti l'album 'The Documentary 2' en 2015 ?",

                'level_id' => 3,
                'sous_theme_id' => 5,
                'theme_id' => 5,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'The Game', 'is_correct' => true],
                    ['answer' => '50 Cent', 'is_correct' => false],
                    ['answer' => 'Kendrick Lamar', 'is_correct' => false],
                    ['answer' => 'Dr. Dre', 'is_correct' => false],
                ],
            ],
            [
                'title' => "Quel rappeur a sorti l'album 'Kingdom Come' en 2006 ?",

                'level_id' => 3,
                'sous_theme_id' => 5,
                'theme_id' => 5,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Jay-Z', 'is_correct' => true],
                    ['answer' => 'Nas', 'is_correct' => false],
                    ['answer' => 'Eminem', 'is_correct' => false],
                    ['answer' => 'T.I.', 'is_correct' => false],
                ],
            ],
            [
                'title' => "Quel est le nom du label fondé par Jay-Z en 1995 ?",

                'level_id' => 3,
                'sous_theme_id' => 5,
                'theme_id' => 5,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Roc-A-Fella Records', 'is_correct' => true],
                    ['answer' => 'Bad Boy Records', 'is_correct' => false],
                    ['answer' => 'Def Jam Recordings', 'is_correct' => false],
                    ['answer' => 'Death Row Records', 'is_correct' => false],
                ],
            ],
            [
                'title' => "Quel rappeur a sorti l'album 'The Massacre' en 2005 ?",

                'level_id' => 3,
                'sous_theme_id' => 5,
                'theme_id' => 5,
                'user_id' => 1,
                'answers' => [
                    ['answer' => '50 Cent', 'is_correct' => true],
                    ['answer' => 'Jay-Z', 'is_correct' => false],
                    ['answer' => 'Eminem', 'is_correct' => false],
                    ['answer' => 'Nas', 'is_correct' => false],
                ],
            ],
            [
                'title' => "Quelle chanson de OutKast a remporté le Grammy Award de la meilleure chanson rap en 2004 ?",

                'level_id' => 3,
                'sous_theme_id' => 5,
                'theme_id' => 5,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Hey Ya!', 'is_correct' => true],
                    ['answer' => 'Roses', 'is_correct' => false],
                    ['answer' => 'Ms. Jackson', 'is_correct' => false],
                    ['answer' => 'B.O.B. (Bombs Over Baghdad)', 'is_correct' => false],
                ],
            ],
            [
                'title' => "Quel est le vrai nom du rappeur T.I. ?",

                'level_id' => 3,
                'sous_theme_id' => 5,
                'theme_id' => 5,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Clifford Joseph Harris Jr.', 'is_correct' => true],
                    ['answer' => 'Dwayne Michael Carter Jr.', 'is_correct' => false],
                    ['answer' => 'Marshall Bruce Mathers III', 'is_correct' => false],
                    ['answer' => 'Andre Romelle Young', 'is_correct' => false],
                ],
            ],
            [
                'title' => "Quel rappeur a sorti l'album 'The Carter III' en 2008 ?",

                'level_id' => 3,
                'sous_theme_id' => 5,
                'theme_id' => 5,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Lil Wayne', 'is_correct' => true],
                    ['answer' => 'Jay-Z', 'is_correct' => false],
                    ['answer' => 'Kanye West', 'is_correct' => false],
                    ['answer' => 'Drake', 'is_correct' => false],
                ],
            ],
            [
                'title' => "Quelle chanson de Lil Wayne a été un succès en 2008 ?",

                'level_id' => 3,
                'sous_theme_id' => 5,
                'theme_id' => 5,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Lollipop', 'is_correct' => true],
                    ['answer' => 'A Milli', 'is_correct' => false],
                    ['answer' => 'Got Money', 'is_correct' => false],
                    ['answer' => 'Mrs. Officer', 'is_correct' => false],
                ],
            ],
            [
                'title' => "Quel artiste a sorti l'album 'The Blueprint 2: The Gift & The Curse' en 2002 ?",

                'level_id' => 3,
                'sous_theme_id' => 5,
                'theme_id' => 5,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Jay-Z', 'is_correct' => true],
                    ['answer' => 'Nas', 'is_correct' => false],
                    ['answer' => 'Eminem', 'is_correct' => false],
                    ['answer' => 'Kanye West', 'is_correct' => false],
                ],
            ],
            [
                'title' => "Quel est le nom du groupe de rap fondé par Dr. Dre ?",

                'level_id' => 3,
                'sous_theme_id' => 5,
                'theme_id' => 5,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'N.W.A. (Niggaz Wit Attitudes)', 'is_correct' => true],
                    ['answer' => 'Wu-Tang Clan', 'is_correct' => false],
                    ['answer' => 'OutKast', 'is_correct' => false],
                    ['answer' => 'Public Enemy', 'is_correct' => false],
                ],
            ],
            [
                'title' => "Quel rappeur a sorti l'album 'Trilla' en 2008 ?",

                'level_id' => 3,
                'sous_theme_id' => 5,
                'theme_id' => 5,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Rick Ross', 'is_correct' => true],
                    ['answer' => 'T.I.', 'is_correct' => false],
                    ['answer' => 'Lil Wayne', 'is_correct' => false],
                    ['answer' => '50 Cent', 'is_correct' => false],
                ],
            ],
            [
                'title' => "Quelle chanson de Kanye West contient les paroles 'I wanna scream so loud for you, 'cause I'm so proud of you' ?",

                'level_id' => 3,
                'sous_theme_id' => 5,
                'theme_id' => 5,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Hey Mama', 'is_correct' => true],
                    ['answer' => 'Stronger', 'is_correct' => false],
                    ['answer' => 'Gold Digger', 'is_correct' => false],
                    ['answer' => 'Heartless', 'is_correct' => false],
                ],
            ],
            [
                'title' => "Quel est le vrai nom du rappeur Ludacris ?",

                'level_id' => 3,
                'sous_theme_id' => 5,
                'theme_id' => 5,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Christopher Brian Bridges', 'is_correct' => true],
                    ['answer' => 'Clifford Joseph Harris Jr.', 'is_correct' => false],
                    ['answer' => 'Marshall Bruce Mathers III', 'is_correct' => false],
                    ['answer' => 'Andre Romelle Young', 'is_correct' => false],
                ],
            ],
            [
                'title' => "Quel rappeur a sorti l'album 'Release Therapy' en 2006 ?",

                'level_id' => 3,
                'sous_theme_id' => 5,
                'theme_id' => 5,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Ludacris', 'is_correct' => false],
                    ['answer' => 'T.I.', 'is_correct' => false],
                    ['answer' => 'Kanye West', 'is_correct' => false],
                    ['answer' => 'Lil Wayne', 'is_correct' => true],
                ],
            ],
            [
                'title' => "Quelle chanson de Jay-Z contient les paroles 'I got 99 problems but a b**** ain't one' ?",

                'level_id' => 3,
                'sous_theme_id' => 5,
                'theme_id' => 5,
                'user_id' => 1,
                'answers' => [
                    ['answer' => '99 Problems', 'is_correct' => true],
                    ['answer' => 'Empire State of Mind', 'is_correct' => false],
                    ['answer' => 'Big Pimpin', 'is_correct' => false],
                    ['answer' => 'Hard Knock Life (Ghetto Anthem)', 'is_correct' => false],
                ],
            ],
            [
                'title' => "Quel est le nom du duo de rappeurs constitué de Lloyd Banks et Tony Yayo ?",

                'level_id' => 3,
                'sous_theme_id' => 5,
                'theme_id' => 5,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'G-Unit', 'is_correct' => true],
                    ['answer' => 'OutKast', 'is_correct' => false],
                    ['answer' => 'Mobb Deep', 'is_correct' => false],
                    ['answer' => 'Wu-Tang Clan', 'is_correct' => false],
                ],
            ],
            [
                'title' => "Quel rappeur est également connu sous le nom de 'Mr. Carter' ?",

                'level_id' => 3,
                'sous_theme_id' => 5,
                'theme_id' => 5,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Lil Wayne', 'is_correct' => true],
                    ['answer' => 'Jay-Z', 'is_correct' => false],
                    ['answer' => 'Drake', 'is_correct' => false],
                    ['answer' => 'T.I.', 'is_correct' => false],
                ],
            ],
            [
                'title' => "Quelle chanson de 2Pac a été un succès posthume en 2002 ?",

                'level_id' => 3,
                'sous_theme_id' => 5,
                'theme_id' => 5,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Changes', 'is_correct' => true],
                    ['answer' => 'California Love', 'is_correct' => false],
                    ['answer' => 'Dear Mama', 'is_correct' => false],
                    ['answer' => 'Hit \'Em Up', 'is_correct' => false],
                ],
            ],
            [
                'title' => "Quel est le nom du groupe derrière l'album 'The Eminem Show' en 2002 ?",

                'level_id' => 3,
                'sous_theme_id' => 5,
                'theme_id' => 5,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'D12', 'is_correct' => false],
                    ['answer' => 'Bad Meets Evil', 'is_correct' => false],
                    ['answer' => 'Slaughterhouse', 'is_correct' => false],
                    ['answer' => 'OutKast', 'is_correct' => true],
                ],
            ],
            [
                'title' => "Quelle chanson de Common a été nominée pour un Oscar en 2007 ?",

                'level_id' => 3,
                'sous_theme_id' => 5,
                'theme_id' => 5,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Glory', 'is_correct' => false],
                    ['answer' => 'The Light', 'is_correct' => false],
                    ['answer' => 'Love of My Life (An Ode to Hip-Hop)', 'is_correct' => false],
                    ['answer' => 'It\'s Hard Out Here for a Pimp', 'is_correct' => true],
                ],
            ],
            [
                'title' => "Quel rappeur a sorti l'album 'Lupe Fiasco's The Cool' en 2007 ?",

                'level_id' => 3,
                'sous_theme_id' => 5,
                'theme_id' => 5,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Kanye West', 'is_correct' => false],
                    ['answer' => 'Common', 'is_correct' => false],
                    ['answer' => 'Lil Wayne', 'is_correct' => false],
                    ['answer' => 'Lupe Fiasco', 'is_correct' => true],
                ],
            ],
            [
                'title' => "Quelle chanson de Lil Jon & The East Side Boyz a été un hit en 2004 ?",

                'level_id' => 3,
                'sous_theme_id' => 5,
                'theme_id' => 5,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Get Low', 'is_correct' => true],
                    ['answer' => 'Yeah!', 'is_correct' => false],
                    ['answer' => 'Lean Back', 'is_correct' => false],
                    ['answer' => 'Crazy in Love', 'is_correct' => false],
                ],
            ],
            [
                'title' => "Quel est le nom du producteur derrière l'album 'The College Dropout' de Kanye West ?",

                'level_id' => 3,
                'sous_theme_id' => 5,
                'theme_id' => 5,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Dr. Dre', 'is_correct' => false],
                    ['answer' => 'Timbaland', 'is_correct' => false],
                    ['answer' => 'Pharrell Williams', 'is_correct' => false],
                    ['answer' => 'Kanye West', 'is_correct' => true],
                ],
            ],
            [
                'title' => "Quelle chanson de 50 Cent contient les paroles 'Go, go, go, go, go, go, go, go, go, go, shawty' ?",

                'level_id' => 3,
                'sous_theme_id' => 5,
                'theme_id' => 5,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'In Da Club', 'is_correct' => false],
                    ['answer' => 'P.I.M.P.', 'is_correct' => false],
                    ['answer' => 'Candy Shop', 'is_correct' => false],
                    ['answer' => 'Disco Inferno', 'is_correct' => true],
                ],
            ],
            [
                'title' => "Quel rappeur a sorti l'album 'Finding Forever' en 2007 ?",

                'level_id' => 3,
                'sous_theme_id' => 5,
                'theme_id' => 5,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Kanye West', 'is_correct' => false],
                    ['answer' => 'Common', 'is_correct' => true],
                    ['answer' => 'Nas', 'is_correct' => false],
                    ['answer' => 'Talib Kweli', 'is_correct' => false],
                ],
            ],
            [
                'title' => "Quelle chanson de Nas a été un succès en 2002 ?",

                'level_id' => 3,
                'sous_theme_id' => 5,
                'theme_id' => 5,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'One Mic', 'is_correct' => false],
                    ['answer' => 'N.Y. State of Mind', 'is_correct' => false],
                    ['answer' => 'I Can', 'is_correct' => true],
                    ['answer' => 'Ether', 'is_correct' => false],
                ],
            ],
            [
                'title' => "Quel est le nom du groupe de rap fondé par Eminem ?",

                'level_id' => 3,
                'sous_theme_id' => 5,
                'theme_id' => 5,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'OutKast', 'is_correct' => false],
                    ['answer' => 'Bad Meets Evil', 'is_correct' => false],
                    ['answer' => 'D12', 'is_correct' => true],
                    ['answer' => 'Mobb Deep', 'is_correct' => false],
                ],
            ],
            [
                'title' => "Quelle chanson de Dr. Dre a été un succès en 2001 ?",

                'level_id' => 3,
                'sous_theme_id' => 5,
                'theme_id' => 5,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Still D.R.E.', 'is_correct' => true],
                    ['answer' => 'The Next Episode', 'is_correct' => false],
                    ['answer' => 'Forgot About Dre', 'is_correct' => false],
                    ['answer' => 'Nuthin\' but a "G" Thang', 'is_correct' => false],
                ],
            ],
            //rp fr 2010
            [
                'title' => "Quel rappeur français a sorti l'album 'La fête est finie' en 2017 ?",

                'level_id' => 1,
                'sous_theme_id' => 6,
                'theme_id' => 5,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Orelsan', 'is_correct' => true],
                    ['answer' => 'Maître Gims', 'is_correct' => false],
                    ['answer' => 'Nekfeu', 'is_correct' => false],
                    ['answer' => 'PNL', 'is_correct' => false],
                ],
            ],
            [
                'title' => "Qui est le fondateur du groupe IAM ?",

                'level_id' => 1,
                'sous_theme_id' => 6,
                'theme_id' => 5,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Akhenaton', 'is_correct' => true],
                    ['answer' => 'Shurik\'n', 'is_correct' => false],
                    ['answer' => 'Kheops', 'is_correct' => false],
                    ['answer' => 'Faf Larage', 'is_correct' => false],
                ],
            ],
            [
                'title' => "Quel rappeur a popularisé le terme 'Wesh' dans ses chansons ?",

                'level_id' => 1,
                'sous_theme_id' => 6,
                'theme_id' => 5,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Rohff', 'is_correct' => false],
                    ['answer' => 'Booba', 'is_correct' => true],
                    ['answer' => 'La Fouine', 'is_correct' => false],
                    ['answer' => 'Soprano', 'is_correct' => false],
                ],
            ],
            [
                'title' => "Quelle chanson de Maître Gims a été un succès international en 2013 ?",

                'level_id' => 1,
                'sous_theme_id' => 6,
                'theme_id' => 5,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Bella', 'is_correct' => true],
                    ['answer' => 'Sapés comme jamais', 'is_correct' => false],
                    ['answer' => 'J`\'me tire', 'is_correct' => false],
                    ['answer' => 'Est-ce que tu m\'aimes?', 'is_correct' => false],
                ],
            ],
            [
                'title' => "De quel quartier de Paris est originaire le rappeur Nekfeu ?",

                'level_id' => 1,
                'sous_theme_id' => 6,
                'theme_id' => 5,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Montmartre', 'is_correct' => false],
                    ['answer' => 'Belleville', 'is_correct' => true],
                    ['answer' => 'Le Marais', 'is_correct' => false],
                    ['answer' => 'Le 18e arrondissement', 'is_correct' => false],
                ],
            ],
            [
                'title' => "Quel est le titre du premier album solo de PNL, sorti en 2015 ?",

                'level_id' => 1,
                'sous_theme_id' => 6,
                'theme_id' => 5,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Dans la légende', 'is_correct' => false],
                    ['answer' => 'Deux frères', 'is_correct' => false],
                    ['answer' => 'Que la famille', 'is_correct' => false],
                    ['answer' => 'Le monde Chico', 'is_correct' => true],
                ],
            ],
            [
                'title' => "Quelle rappeuse française a remporté le Prix Constantin en 2018 ?",

                'level_id' => 1,
                'sous_theme_id' => 6,
                'theme_id' => 5,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Lous and the Yakuza', 'is_correct' => false],
                    ['answer' => 'Aya Nakamura', 'is_correct' => false],
                    ['answer' => 'Chilla', 'is_correct' => true],
                    ['answer' => 'Angèle', 'is_correct' => false],
                ],
            ],
            [
                'title' => "Qui a été surnommé 'Le Duc de Boulogne' dans le monde du rap français ?",

                'level_id' => 1,
                'sous_theme_id' => 6,
                'theme_id' => 5,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Booba', 'is_correct' => true],
                    ['answer' => 'Niska', 'is_correct' => false],
                    ['answer' => 'Kaaris', 'is_correct' => false],
                    ['answer' => 'Rohff', 'is_correct' => false],
                ],
            ],
            [
                'title' => "Quel est le groupe de rap français derrière les albums 'Fantasy' et 'Paradise' ?",

                'level_id' => 1,
                'sous_theme_id' => 6,
                'theme_id' => 5,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'PNL', 'is_correct' => true],
                    ['answer' => 'Sexion d\'Assaut', 'is_correct' => false],
                    ['answer' => '1995', 'is_correct' => false],
                    ['answer' => 'IAM', 'is_correct' => false],
                ],
            ],
            [
                'title' => "Quelle chanson de Jul a été un hit en 2016 avec son refrain 'Elle te balade, t'es à l'ouest, elle te vide de ton cash' ?",

                'level_id' => 1,
                'sous_theme_id' => 6,
                'theme_id' => 5,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Je ne me vois pas briller', 'is_correct' => false],
                    ['answer' => 'Fais le moonwalk', 'is_correct' => false],
                    ['answer' => 'Elle te balade', 'is_correct' => false],
                    ['answer' => 'Encore des paroles', 'is_correct' => true],
                ],
            ],
            [
                'title' => "De quelle ville vient le groupe de rap 1995 ?",

                'level_id' => 1,
                'sous_theme_id' => 6,
                'theme_id' => 5,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Lyon', 'is_correct' => false],
                    ['answer' => 'Marseille', 'is_correct' => false],
                    ['answer' => 'Paris', 'is_correct' => true],
                    ['answer' => 'Lille', 'is_correct' => false],
                ],
            ],

            [
                'title' => "Qui a été surnommé 'Le Duc de Boulogne' dans le monde du rap français ?",

                'level_id' => 1,
                'sous_theme_id' => 6,
                'theme_id' => 5,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Booba', 'is_correct' => true],
                    ['answer' => 'Niska', 'is_correct' => false],
                    ['answer' => 'Kaaris', 'is_correct' => false],
                    ['answer' => 'Rohff', 'is_correct' => false],
                ],
            ],
            [
                'title' => "Quel est le groupe de rap français derrière les albums 'Fantasy' et 'Paradise' ?",

                'level_id' => 1,
                'sous_theme_id' => 6,
                'theme_id' => 5,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'PNL', 'is_correct' => true],
                    ['answer' => 'Sexion d\'Assaut', 'is_correct' => false],
                    ['answer' => '1995', 'is_correct' => false],
                    ['answer' => 'IAM', 'is_correct' => false],
                ],
            ],
            [
                'title' => "Quelle chanson de Jul a été un hit en 2016 avec son refrain 'Elle te balade, t'es à l'ouest, elle te vide de ton cash' ?",

                'level_id' => 1,
                'sous_theme_id' => 6,
                'theme_id' => 5,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Je ne me vois pas briller', 'is_correct' => false],
                    ['answer' => 'Fais le moonwalk', 'is_correct' => false],
                    ['answer' => 'Elle te balade', 'is_correct' => false],
                    ['answer' => 'Encore des paroles', 'is_correct' => true],
                ],
            ],
            [
                'title' => "De quelle ville vient le groupe de rap 1995 ?",

                'level_id' => 1,
                'sous_theme_id' => 6,
                'theme_id' => 5,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Lyon', 'is_correct' => false],
                    ['answer' => 'Marseille', 'is_correct' => false],
                    ['answer' => 'Paris', 'is_correct' => true],
                    ['answer' => 'Lille', 'is_correct' => false],
                ],
            ],

            [
                'title' => "Qui est le membre féminin du groupe de rap Sexion d'Assaut ?",

                'level_id' => 1,
                'sous_theme_id' => 6,
                'theme_id' => 5,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Maska', 'is_correct' => false],
                    ['answer' => 'Lefa', 'is_correct' => false],
                    ['answer' => 'Maitre Gims', 'is_correct' => false],
                    ['answer' => 'Maître Gims', 'is_correct' => true],
                ],
            ],
            [
                'title' => "Quel est le titre de la chanson de Niska qui a popularisé la danse du 'Charo' ?",

                'level_id' => 1,
                'sous_theme_id' => 6,
                'theme_id' => 5,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Réseaux', 'is_correct' => true],
                    ['answer' => 'Commando', 'is_correct' => false],
                    ['answer' => 'Medicament', 'is_correct' => false],
                    ['answer' => 'Du lundi au lundi', 'is_correct' => false],
                ],
            ],
            [
                'title' => "Quel rappeur français est connu pour son album 'Feu' sorti en 2015 ?",

                'level_id' => 1,
                'sous_theme_id' => 6,
                'theme_id' => 5,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Nekfeu', 'is_correct' => true],
                    ['answer' => 'Soprano', 'is_correct' => false],
                    ['answer' => 'Booba', 'is_correct' => false],
                    ['answer' => 'Orelsan', 'is_correct' => false],
                ],
            ],
            [
                'title' => "De quel collectif de rap français le rappeur Gradur est-il membre ?",

                'level_id' => 1,
                'sous_theme_id' => 6,
                'theme_id' => 5,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'MMZ', 'is_correct' => false],
                    ['answer' => 'PSO Thug', 'is_correct' => false],
                    ['answer' => 'Sheguey Squaad', 'is_correct' => true],
                    ['answer' => 'TDBZ', 'is_correct' => false],
                ],
            ],
            [
                'title' => "Quel est le titre du premier album solo de SCH, sorti en 2015 ?",

                'level_id' => 1,
                'sous_theme_id' => 6,
                'theme_id' => 5,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'A7', 'is_correct' => false],
                    ['answer' => 'Anarchie', 'is_correct' => true],
                    ['answer' => 'JVLIVS', 'is_correct' => false],
                    ['answer' => 'Rooftop', 'is_correct' => false],
                ],
            ],
            [
                'title' => "Quel est le nom de scène du rappeur français Karim Zenoud ?",

                'level_id' => 1,
                'sous_theme_id' => 6,
                'theme_id' => 5,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Kaaris', 'is_correct' => true],
                    ['answer' => 'Nekfeu', 'is_correct' => false],
                    ['answer' => 'Soprano', 'is_correct' => false],
                    ['answer' => 'Rohff', 'is_correct' => false],
                ],
            ],
            [
                'title' => "Quel duo de rappeurs français a sorti l'album 'Le monde Chico' en 2015 ?",

                'level_id' => 1,
                'sous_theme_id' => 6,
                'theme_id' => 5,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'PNL', 'is_correct' => true],
                    ['answer' => 'Bigflo et Oli', 'is_correct' => false],
                    ['answer' => 'Lunatic', 'is_correct' => false],
                    ['answer' => '1995', 'is_correct' => false],
                ],
            ],
            [
                'title' => "Quel rappeur français a sorti l'album 'Y&W' en 2017 ?",

                'level_id' => 1,
                'sous_theme_id' => 6,
                'theme_id' => 5,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Ninho', 'is_correct' => true],
                    ['answer' => 'Damso', 'is_correct' => false],
                    ['answer' => 'Maître Gims', 'is_correct' => false],
                    ['answer' => 'PNL', 'is_correct' => false],
                ],
            ],
            [
                'title' => "De quel département français est originaire le rappeur Jul ?",

                'level_id' => 1,
                'sous_theme_id' => 6,
                'theme_id' => 5,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Bouches-du-Rhône', 'is_correct' => true],
                    ['answer' => 'Seine-Saint-Denis', 'is_correct' => false],
                    ['answer' => 'Nord', 'is_correct' => false],
                    ['answer' => 'Rhône', 'is_correct' => false],
                ],
            ],
            [
                'title' => "Quel est le nom de la marque de vêtements créée par le rappeur Booba ?",

                'level_id' => 1,
                'sous_theme_id' => 6,
                'theme_id' => 5,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Ünkut', 'is_correct' => true],
                    ['answer' => 'Distinct', 'is_correct' => false],
                    ['answer' => 'Krokmou', 'is_correct' => false],
                    ['answer' => 'Caiman', 'is_correct' => false],
                ],
            ],
            [
                'title' => "Quelle est la ville d'origine du rappeur Orelsan ?",

                'level_id' => 1,
                'sous_theme_id' => 6,
                'theme_id' => 5,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Caen', 'is_correct' => true],
                    ['answer' => 'Paris', 'is_correct' => false],
                    ['answer' => 'Lyon', 'is_correct' => false],
                    ['answer' => 'Marseille', 'is_correct' => false],
                ],
            ],
            [
                'title' => "Quel rappeur français a sorti l'album 'Zifukoro' en 2015 ?",

                'level_id' => 1,
                'sous_theme_id' => 6,
                'theme_id' => 5,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Nekfeu', 'is_correct' => false],
                    ['answer' => 'Booba', 'is_correct' => false],
                    ['answer' => 'Kaaris', 'is_correct' => false],
                    ['answer' => 'Gradur', 'is_correct' => true],
                ],
            ],
            [
                'title' => "Quelle est la ville d'origine du groupe de rap 1995 ?",

                'level_id' => 1,
                'sous_theme_id' => 6,
                'theme_id' => 5,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Paris', 'is_correct' => true],
                    ['answer' => 'Lyon', 'is_correct' => false],
                    ['answer' => 'Marseille', 'is_correct' => false],
                    ['answer' => 'Toulouse', 'is_correct' => false],
                ],
            ],
            [
                'title' => "Quel est le titre de la chanson de Damso qui a été un succès en 2017 avec son refrain 'Nwaar Is The New Black' ?",

                'level_id' => 1,
                'sous_theme_id' => 6,
                'theme_id' => 5,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Amnésie', 'is_correct' => false],
                    ['answer' => 'Mosaïque solitaire', 'is_correct' => false],
                    ['answer' => 'Σ. Morose', 'is_correct' => false],
                    ['answer' => 'BruxellesVie', 'is_correct' => true],
                ],
            ],
            [
                'title' => "Quel rappeur français a été en tête des ventes d'albums en 2019 avec 'Les étoiles vagabondes' ?",

                'level_id' => 2,
                'sous_theme_id' => 6,
                'theme_id' => 5,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Nekfeu', 'is_correct' => true],
                    ['answer' => 'Orelsan', 'is_correct' => false],
                    ['answer' => 'Booba', 'is_correct' => false],
                    ['answer' => 'Lomepal', 'is_correct' => false],
                ],
            ],
            [
                'title' => "Quel est le vrai nom du rappeur Orelsan ?",

                'level_id' => 2,
                'sous_theme_id' => 6,
                'theme_id' => 5,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Aurélien Cotentin', 'is_correct' => true],
                    ['answer' => 'Charles Orelsan', 'is_correct' => false],
                    ['answer' => 'Jean-Jacques Goldman', 'is_correct' => false],
                    ['answer' => 'Julien Correia', 'is_correct' => false],
                ],
            ],
            [
                'title' => "Quel est le titre du premier album studio de PNL, sorti en 2015 ?",

                'level_id' => 2,
                'sous_theme_id' => 6,
                'theme_id' => 5,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Dans la légende', 'is_correct' => false],
                    ['answer' => 'Le monde Chico', 'is_correct' => false],
                    ['answer' => 'Deux frères', 'is_correct' => false],
                    ['answer' => 'Que la famille', 'is_correct' => true],
                ],
            ],
            [
                'title' => "Quelle est la ville d'origine du groupe de rap NTM ?",

                'level_id' => 2,
                'sous_theme_id' => 6,
                'theme_id' => 5,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Marseille', 'is_correct' => false],
                    ['answer' => 'Toulouse', 'is_correct' => false],
                    ['answer' => 'Paris', 'is_correct' => true],
                    ['answer' => 'Lyon', 'is_correct' => false],
                ],
            ],
            [
                'title' => "Quel duo de rappeurs est connu pour les albums 'L'École du micro d'argent' et 'Sol Invictus' ?",

                'level_id' => 2,
                'sous_theme_id' => 6,
                'theme_id' => 5,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Sexion d\'Assaut', 'is_correct' => false],
                    ['answer' => 'IAM', 'is_correct' => true],
                    ['answer' => 'Suprême NTM', 'is_correct' => false],
                    ['answer' => 'Psy 4 de la rime', 'is_correct' => false],
                ],
            ],
            [
                'title' => "Quel est le nom de la tournée de concerts qui a suivi la sortie de l'album 'Je suis en vie' de Akhenaton en 2014 ?",

                'level_id' => 2,
                'sous_theme_id' => 6,
                'theme_id' => 5,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Planète Mars Tour', 'is_correct' => false],
                    ['answer' => 'Je suis en vie Tour', 'is_correct' => false],
                    ['answer' => 'Sol Invictus Tour', 'is_correct' => false],
                    ['answer' => 'Futur Tour', 'is_correct' => true],
                ],
            ],
            [
                'title' => "Quel rappeur français a sorti l'album 'L'Everest' en 2016 ?",

                'level_id' => 2,
                'sous_theme_id' => 6,
                'theme_id' => 5,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Lomepal', 'is_correct' => false],
                    ['answer' => 'Nekfeu', 'is_correct' => false],
                    ['answer' => 'Orelsan', 'is_correct' => false],
                    ['answer' => 'Soprano', 'is_correct' => true],
                ],
            ],
            [
                'title' => "Quelle rappeuse française a sorti l'album 'Souldier' en 2018 ?",

                'level_id' => 2,
                'sous_theme_id' => 6,
                'theme_id' => 5,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Aya Nakamura', 'is_correct' => false],
                    ['answer' => 'Diam\'s', 'is_correct' => false],
                    ['answer' => 'Shay', 'is_correct' => true],
                    ['answer' => 'Camélia Jordana', 'is_correct' => false],
                ],
            ],
            [
                'title' => "Quel est le titre du premier album solo de Black M, sorti en 2016 ?",

                'level_id' => 2,
                'sous_theme_id' => 6,
                'theme_id' => 5,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Eternel insatisfait', 'is_correct' => true],
                    ['answer' => 'Les yeux plus gros que le monde', 'is_correct' => false],
                    ['answer' => 'Le monde plus gros que mes yeux', 'is_correct' => false],
                    ['answer' => 'Les derniers seront les premiers', 'is_correct' => false],
                ],
            ],
            [
                'title' => "Quel est le nom du groupe formé par Youssoupha, Médine et Kery James ?",

                'level_id' => 2,
                'sous_theme_id' => 6,
                'theme_id' => 5,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'La Ligue', 'is_correct' => true],
                    ['answer' => 'La Mafia', 'is_correct' => false],
                    ['answer' => 'La Bande', 'is_correct' => false],
                    ['answer' => 'Le Trio', 'is_correct' => false],
                ],
            ],
            [
                'title' => "Quel rappeur français a sorti l'album 'Egomaniac' en 2016 ?",

                'level_id' => 2,
                'sous_theme_id' => 6,
                'theme_id' => 5,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Soprano', 'is_correct' => false],
                    ['answer' => 'Nekfeu', 'is_correct' => false],
                    ['answer' => 'Jul', 'is_correct' => false],
                    ['answer' => 'Lefa', 'is_correct' => true],
                ],
            ],
            [
                'title' => "Quel est le nom du label fondé par le rappeur Booba en 2004 ?",

                'level_id' => 1,
                'sous_theme_id' => 6,
                'theme_id' => 5,
                'user_id' => 1,
                'answers' => [
                    ['answer' => '92i', 'is_correct' => true],
                    ['answer' => 'Tallac Records', 'is_correct' => false],
                    ['answer' => 'Banlieue Sale', 'is_correct' => false],
                    ['answer' => '6e Continent', 'is_correct' => false],
                ],
            ],
            [
                'title' => "Quel est le titre de l'album posthume de Népal, sorti en 2019 ?",

                'level_id' => 1,
                'sous_theme_id' => 6,
                'theme_id' => 5,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Adios Bahamas', 'is_correct' => false],
                    ['answer' => 'Ciel et Terre', 'is_correct' => false],
                    ['answer' => 'Ailleurs', 'is_correct' => false],
                    ['answer' => 'Rééducation', 'is_correct' => true],
                ],
            ],
            [
                'title' => "Quel rappeur français a sorti l'album 'Ceinture noire' en 2018 ?",

                'level_id' => 1,
                'sous_theme_id' => 6,
                'theme_id' => 5,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Kaaris', 'is_correct' => false],
                    ['answer' => 'Soprano', 'is_correct' => false],
                    ['answer' => 'Maitre Gims', 'is_correct' => true],
                    ['answer' => 'PNL', 'is_correct' => false],
                ],
            ],
            [
                'title' => "Quelle chanson de Vald a été nominée aux Victoires de la Musique en 2017 ?",

                'level_id' => 1,
                'sous_theme_id' => 6,
                'theme_id' => 5,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Désaccordé', 'is_correct' => true],
                    ['answer' => 'Eurotrap', 'is_correct' => false],
                    ['answer' => 'Ma meilleure amie', 'is_correct' => false],
                    ['answer' => 'Vitrine', 'is_correct' => false],
                ],
            ],
            [
                'title' => "Quel rappeur français a sorti l'album 'Ceinture noire' en 2018 ?",

                'level_id' => 1,
                'sous_theme_id' => 6,
                'theme_id' => 5,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Kaaris', 'is_correct' => false],
                    ['answer' => 'Soprano', 'is_correct' => false],
                    ['answer' => 'Maitre Gims', 'is_correct' => true],
                    ['answer' => 'PNL', 'is_correct' => false],
                ],
            ],
            [
                'title' => "Quel est le vrai nom du rappeur Nekfeu ?",

                'level_id' => 1,
                'sous_theme_id' => 6,
                'theme_id' => 5,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Ken Samaras', 'is_correct' => true],
                    ['answer' => 'Aurélien Cotentin', 'is_correct' => false],
                    ['answer' => 'Corentin Lila', 'is_correct' => false],
                    ['answer' => 'Orelsan Cotentin', 'is_correct' => false],
                ],
            ],
            [
                'title' => "Quel est le titre du premier album studio de Maître Gims, sorti en 2013 ?",

                'level_id' => 1,
                'sous_theme_id' => 6,
                'theme_id' => 5,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Subliminal', 'is_correct' => true],
                    ['answer' => 'Mon cœur avait raison', 'is_correct' => false],
                    ['answer' => 'Ceinture noire', 'is_correct' => false],
                    ['answer' => 'Transcendance', 'is_correct' => false],
                ],
            ],
            [
                'title' => "Quelle est la ville d'origine du groupe de rap Sniper ?",

                'level_id' => 1,
                'sous_theme_id' => 6,
                'theme_id' => 5,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Marseille', 'is_correct' => false],
                    ['answer' => 'Lyon', 'is_correct' => false],
                    ['answer' => 'Paris', 'is_correct' => true],
                    ['answer' => 'Toulouse', 'is_correct' => false],
                ],
            ],
            [
                'title' => "Quel duo de rappeurs français est connu pour les albums 'Deux frères' et 'La vraie vie' ?",

                'level_id' => 1,
                'sous_theme_id' => 6,
                'theme_id' => 5,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'PNL', 'is_correct' => true],
                    ['answer' => 'Bigflo & Oli', 'is_correct' => false],
                    ['answer' => 'Sexion d\'Assaut', 'is_correct' => false],
                    ['answer' => 'Nekfeu & Alpha Wann', 'is_correct' => false],
                ],
            ],
            [
                'title' => "Quel est le nom de la tournée de concerts qui a suivi la sortie de l'album 'Dans ma paranoïa' de Jul en 2015 ?",

                'level_id' => 1,
                'sous_theme_id' => 6,
                'theme_id' => 5,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Je tourne en rond', 'is_correct' => false],
                    ['answer' => 'Dor et de platine', 'is_correct' => false],
                    ['answer' => 'Dans ma tête', 'is_correct' => false],
                    ['answer' => 'Je trouve pas le sommeil', 'is_correct' => true],
                ],
            ],
            [
                'title' => "Quel rappeur français a sorti l'album 'Commando' en 2017 ?",

                'level_id' => 1,
                'sous_theme_id' => 6,
                'theme_id' => 5,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Ninho', 'is_correct' => true],
                    ['answer' => 'Maître Gims', 'is_correct' => false],
                    ['answer' => 'Damso', 'is_correct' => false],
                    ['answer' => 'Nekfeu', 'is_correct' => false],
                ],
            ],
            [
                'title' => "Quelle rappeuse française est également connue sous le nom de Shaolin Shadow ?",

                'level_id' => 1,
                'sous_theme_id' => 6,
                'theme_id' => 5,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Diam\'s', 'is_correct' => false],
                    ['answer' => 'Kenyon', 'is_correct' => false],
                    ['answer' => 'Casey', 'is_correct' => true],
                    ['answer' => 'La Gale', 'is_correct' => false],
                ],
            ],
            [
                'title' => "Quel est le titre du premier album solo de Niska, sorti en 2017 ?",

                'level_id' => 1,
                'sous_theme_id' => 6,
                'theme_id' => 5,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Commando', 'is_correct' => false],
                    ['answer' => 'Charo Life', 'is_correct' => false],
                    ['answer' => 'Zifukoro', 'is_correct' => false],
                    ['answer' => 'Zifukoro', 'is_correct' => true],
                ],
            ],
            [
                'title' => "Quel est le nom du groupe formé par Soprano, Alonzo, Vincenzo, Sya Styles et DJ Djel ?",

                'level_id' => 1,
                'sous_theme_id' => 6,
                'theme_id' => 5,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Sexion d\'Assaut', 'is_correct' => false],
                    ['answer' => 'IAM', 'is_correct' => false],
                    ['answer' => 'Psy 4 de la Rime', 'is_correct' => true],
                    ['answer' => 'NTM', 'is_correct' => false],
                ],
            ],
            [
                'title' => "Quel rappeur français a sorti l'album 'Mentalité pirate' en 2016 ?",

                'level_id' => 1,
                'sous_theme_id' => 6,
                'theme_id' => 5,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Sofiane', 'is_correct' => true],
                    ['answer' => 'Lacrim', 'is_correct' => false],
                    ['answer' => 'Rohff', 'is_correct' => false],
                    ['answer' => 'Jul', 'is_correct' => false],
                ],
            ],
            [
                'title' => "Quel est le nom du label fondé par le rappeur MHD en 2016 ?",

                'level_id' => 1,
                'sous_theme_id' => 6,
                'theme_id' => 5,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Paname Music', 'is_correct' => false],
                    ['answer' => 'Afro Trap Records', 'is_correct' => true],
                    ['answer' => 'Afro B', 'is_correct' => false],
                    ['answer' => 'MHD Records', 'is_correct' => false],
                ],
            ],
            [
                'title' => "Quel est le titre de l'album de Lomepal sorti en 2018 ?",

                'level_id' => 1,
                'sous_theme_id' => 6,
                'theme_id' => 5,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'FLIP', 'is_correct' => true],
                    ['answer' => 'Majesté', 'is_correct' => false],
                    ['answer' => 'Palpal', 'is_correct' => false],
                    ['answer' => 'Tristesse', 'is_correct' => false],
                ],
            ],
            [
                'title' => "Quel rappeur français a sorti l'album 'Egomaniac' en 2016 ?",

                'level_id' => 1,
                'sous_theme_id' => 6,
                'theme_id' => 5,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Ninho', 'is_correct' => false],
                    ['answer' => 'Sofiane', 'is_correct' => false],
                    ['answer' => 'Lacrim', 'is_correct' => false],
                    ['answer' => 'Joke', 'is_correct' => true],
                ],
            ],
            [
                'title' => "Quelle chanson de Vald a été nominée aux Victoires de la Musique en 2018 avec son refrain 'Qu'est-ce qui fait mal aux chiens ?'",

                'level_id' => 1,
                'sous_theme_id' => 6,
                'theme_id' => 5,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Désaccordé', 'is_correct' => false],
                    ['answer' => 'Eurotrap', 'is_correct' => false],
                    ['answer' => 'Devient', 'is_correct' => false],
                    ['answer' => 'Dragon', 'is_correct' => true],
                ],
            ],
            //Zelda
            [
                'title' => "Quel est le nom du héros principal de la saga Zelda ?",

                'level_id' => 1,
                'sous_theme_id' => 7,
                'theme_id' => 6,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Zelda', 'is_correct' => false],
                    ['answer' => 'Ganondorf', 'is_correct' => false],
                    ['answer' => 'Link', 'is_correct' => true],
                    ['answer' => 'Epona', 'is_correct' => false],
                ],
            ],
            [
                'title' => "Qui est la princesse emblématique de la série ?",

                'level_id' => 1,
                'sous_theme_id' => 7,
                'theme_id' => 6,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Epona', 'is_correct' => false],
                    ['answer' => 'Zelda', 'is_correct' => true],
                    ['answer' => 'Navi', 'is_correct' => false],
                    ['answer' => 'Malon', 'is_correct' => false],
                ],
            ],
            [
                'title' => "Quel est le nom du royaume dans lequel se déroulent la plupart des jeux Zelda ?",

                'level_id' => 1,
                'sous_theme_id' => 7,
                'theme_id' => 6,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Mushroom Kingdom', 'is_correct' => false],
                    ['answer' => 'Hyrule', 'is_correct' => true],
                    ['answer' => 'Termina', 'is_correct' => false],
                    ['answer' => 'Kanto', 'is_correct' => false],
                ],
            ],
            [
                'title' => "Quel est l'objet récurrent que Link utilise pour se défendre ?",

                'level_id' => 1,
                'sous_theme_id' => 7,
                'theme_id' => 6,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Arc', 'is_correct' => false],
                    ['answer' => 'Épée', 'is_correct' => true],
                    ['answer' => 'Boomerang', 'is_correct' => false],
                    ['answer' => 'Bombes', 'is_correct' => false],
                ],
            ],
            [
                'title' => "Quel est le nom de l'antagoniste principal dans de nombreux jeux Zelda ?",

                'level_id' => 1,
                'sous_theme_id' => 7,
                'theme_id' => 6,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Ganon', 'is_correct' => true],
                    ['answer' => 'Ganondorf', 'is_correct' => false],
                    ['answer' => 'Vaati', 'is_correct' => false],
                    ['answer' => 'Zant', 'is_correct' => false],
                ],
            ],
            [
                'title' => "Quel est le nom du premier jeu de la série, sorti sur la console NES ?",

                'level_id' => 1,
                'sous_theme_id' => 7,
                'theme_id' => 6,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'The Legend of Zelda: A Link to the Past', 'is_correct' => false],
                    ['answer' => 'The Legend of Zelda: Ocarina of Time', 'is_correct' => false],
                    ['answer' => 'The Legend of Zelda', 'is_correct' => true],
                    ['answer' => 'The Legend of Zelda: Breath of the Wild', 'is_correct' => false],
                ],
            ],
            [
                'title' => "Quel est le nom du village où Link commence souvent son aventure ?",

                'level_id' => 1,
                'sous_theme_id' => 7,
                'theme_id' => 6,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Kakariko Village', 'is_correct' => false],
                    ['answer' => 'Outset Island', 'is_correct' => false],
                    ['answer' => 'Skyloft', 'is_correct' => false],
                    ['answer' => 'Kokiri Village', 'is_correct' => true],
                ],
            ],
            [
                'title' => "Quel est le nom du célèbre instrument musical que Link utilise dans 'The Legend of Zelda: Ocarina of Time' ?",

                'level_id' => 1,
                'sous_theme_id' => 7,
                'theme_id' => 6,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Flûte de Pan', 'is_correct' => false],
                    ['answer' => 'Harpe de Vent', 'is_correct' => false],
                    ['answer' => 'Ocarina', 'is_correct' => true],
                    ['answer' => 'Trompette', 'is_correct' => false],
                ],
            ],
            [
                'title' => "Quel est le nom du compagnon féminin de Link dans 'The Legend of Zelda: Twilight Princess' ?",

                'level_id' => 1,
                'sous_theme_id' => 7,
                'theme_id' => 6,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Navi', 'is_correct' => false],
                    ['answer' => 'Fi', 'is_correct' => false],
                    ['answer' => 'Midna', 'is_correct' => true],
                    ['answer' => 'Tatl', 'is_correct' => false],
                ],
            ],
            [
                'title' => "Quelle est la devise récurrente de la série Zelda ?",

                'level_id' => 1,
                'sous_theme_id' => 7,
                'theme_id' => 6,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'La force est en vous', 'is_correct' => false],
                    ['answer' => 'Courage, sagesse, force', 'is_correct' => false],
                    ['answer' => 'Coeur vaillant', 'is_correct' => false],
                    ['answer' => 'Courage, sagesse, pouvoir', 'is_correct' => true],
                ],
            ],
            [
                'title' => "Quel est le nom du méchant sorcier qui apparaît dans 'The Legend of Zelda: A Link to the Past' ?",

                'level_id' => 1,
                'sous_theme_id' => 7,
                'theme_id' => 6,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Ganon', 'is_correct' => true],
                    ['answer' => 'Agahnim', 'is_correct' => false],
                    ['answer' => 'Vaati', 'is_correct' => false],
                    ['answer' => 'Zant', 'is_correct' => false],
                ],
            ],
            [
                'title' => "Quel est le nom de la monture de Link dans 'The Legend of Zelda: Twilight Princess' ?",

                'level_id' => 1,
                'sous_theme_id' => 7,
                'theme_id' => 6,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Epona', 'is_correct' => true],
                    ['answer' => 'Roc', 'is_correct' => false],
                    ['answer' => 'Volveroc', 'is_correct' => false],
                    ['answer' => 'Wolf Link', 'is_correct' => false],
                ],
            ],
            [
                'title' => "Quel est le nom de la princesse de la tribu Zora dans 'The Legend of Zelda: Ocarina of Time' ?",

                'level_id' => 1,
                'sous_theme_id' => 7,
                'theme_id' => 6,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Ruto', 'is_correct' => true],
                    ['answer' => 'Nabooru', 'is_correct' => false],
                    ['answer' => 'Saria', 'is_correct' => false],
                    ['answer' => 'Malon', 'is_correct' => false],
                ],
            ],
            [
                'title' => "Quel est le nom du personnage qui donne souvent des conseils à Link sous forme de texte dans 'The Legend of Zelda: Ocarina of Time' ?",

                'level_id' => 1,
                'sous_theme_id' => 7,
                'theme_id' => 6,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Navi', 'is_correct' => false],
                    ['answer' => 'Tatl', 'is_correct' => false],
                    ['answer' => 'Tael', 'is_correct' => false],
                    ['answer' => 'Kaepora Gaebora', 'is_correct' => true],
                ],
            ],
            [
                'title' => "Quel est le nom du premier donjon dans 'The Legend of Zelda: Link's Awakening' sur Game Boy ?",

                'level_id' => 1,
                'sous_theme_id' => 7,
                'theme_id' => 6,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Le Donjon de l\'Aigle', 'is_correct' => false],
                    ['answer' => 'Le Donjon de l\'Épée', 'is_correct' => false],
                    ['answer' => 'Le Donjon du Héros', 'is_correct' => false],
                    ['answer' => 'Le Donjon du Rêve', 'is_correct' => true],
                ],
            ],
            [
                'title' => "Quel est le nom de l'ocarina magique que Link utilise dans 'The Legend of Zelda: Ocarina ****' ?",

                'level_id' => 1,
                'sous_theme_id' => 7,
                'theme_id' => 6,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'L\'Ocarina du Temps', 'is_correct' => false],
                    ['answer' => 'L\'Ocarina de la Forêt', 'is_correct' => false],
                    ['answer' => 'L\'Ocarina du Courage', 'is_correct' => false],
                    ['answer' => 'L\'Ocarina du Temps', 'is_correct' => true],
                ],
            ],
            [
                'title' => "Dans 'The Legend of Zelda: Breath of the Wild', quelle est la principale menace qui a dévasté le royaume d'Hyrule avant le début du jeu ?",

                'level_id' => 1,
                'sous_theme_id' => 7,
                'theme_id' => 6,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Ganondorf', 'is_correct' => false],
                    ['answer' => 'Les Yigas', 'is_correct' => false],
                    ['answer' => 'Les Lynels', 'is_correct' => false],
                    ['answer' => 'La Calamité Ganon', 'is_correct' => true],
                ],
            ],
            [
                'title' => "Qui est le marchand ambulant récurrent dans la série Zelda, souvent représenté par un squelette ?",

                'level_id' => 1,
                'sous_theme_id' => 7,
                'theme_id' => 6,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Beedle', 'is_correct' => true],
                    ['answer' => 'Tingle', 'is_correct' => false],
                    ['answer' => 'Kilton', 'is_correct' => false],
                    ['answer' => 'Guru-Guru', 'is_correct' => false],
                ],
            ],
            [
                'title' => "Quel est le nom du temple dans 'The Legend of Zelda: Majora's Mask' où Link doit réveiller les quatre géants pour sauver Termina ?",

                'level_id' => 1,
                'sous_theme_id' => 7,
                'theme_id' => 6,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Le Temple de la Forêt', 'is_correct' => false],
                    ['answer' => 'Le Temple du Feu', 'is_correct' => false],
                    ['answer' => 'Le Temple de l\'Eau', 'is_correct' => false],
                    ['answer' => 'Le Temple du Grand Ordre', 'is_correct' => true],
                ],
            ],
            [
                'title' => "Dans 'The Legend of Zelda: The Wind Waker', quel est le nom de la déesse des sables, gardienne du désert Gerudo ?",

                'level_id' => 1,
                'sous_theme_id' => 7,
                'theme_id' => 6,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Farore', 'is_correct' => false],
                    ['answer' => 'Din', 'is_correct' => false],
                    ['answer' => 'Nayru', 'is_correct' => false],
                    ['answer' => 'Aeris', 'is_correct' => true],
                ],
            ],
            [
                'title' => "Quel est le nom du village où Link grandit dans \'The Legend of Zelda: A Link to the Past\' ?",

                'level_id' => 1,
                'sous_theme_id' => 7,
                'theme_id' => 6,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Cocorico', 'is_correct' => false],
                    ['answer' => 'Village des Cocottes', 'is_correct' => false],
                    ['answer' => 'Village des Outrages', 'is_correct' => false],
                    ['answer' => 'Bourg d\'Hyrule', 'is_correct' => true],
                ],
            ],
            [
                'title' => "Dans 'The Legend of Zelda: Twilight Princess', quel est le nom du peuple ailé qui protège les cieux ?",

                'level_id' => 1,
                'sous_theme_id' => 7,
                'theme_id' => 6,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Kokiris', 'is_correct' => false],
                    ['answer' => 'Korogus', 'is_correct' => false],
                    ['answer' => 'Anges', 'is_correct' => false],
                    ['answer' => 'Oocca', 'is_correct' => true],
                ],
            ],
            [
                'title' => "Quel est le nom de la forêt mystérieuse où Link rencontre Skull Kid dans 'The Legend of Zelda: Majora's Mask' ?",

                'level_id' => 1,
                'sous_theme_id' => 7,
                'theme_id' => 6,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Forêt Kokiri', 'is_correct' => false],
                    ['answer' => 'Forêt Perdue', 'is_correct' => false],
                    ['answer' => 'Bois des Mystères', 'is_correct' => true],
                    ['answer' => 'Forêt des Fées', 'is_correct' => false],
                ],
            ],
            [
                'title' => "Dans 'The Legend of Zelda: Skyward Sword', quel est le nom de l'oiseau géant qui sert de monture à Link ?",

                'level_id' => 1,
                'sous_theme_id' => 7,
                'theme_id' => 6,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Epona', 'is_correct' => false],
                    ['answer' => 'Pégase', 'is_correct' => false],
                    ['answer' => 'Aigle de Célestia', 'is_correct' => false],
                    ['answer' => 'Célestrier', 'is_correct' => true],
                ],
            ],
            [
                'title' => "Quelle est la devise inscrite sur la Triforce dans la série Zelda ?",

                'level_id' => 1,
                'sous_theme_id' => 7,
                'theme_id' => 6,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Force, Sagesse, Courage', 'is_correct' => true],
                    ['answer' => 'Vérité, Justice, Liberté', 'is_correct' => false],
                    ['answer' => 'Amour, Compassion, Harmonie', 'is_correct' => false],
                    ['answer' => 'Destinée, Pouvoir, Salut', 'is_correct' => false],
                ],
            ],
            [
                'title' => "Dans 'The Legend of Zelda: Oracle of Seasons', quel est le nom de la sorcière qui a jeté un sort sur le royaume de Holodrum ?",

                'level_id' => 1,
                'sous_theme_id' => 7,
                'theme_id' => 6,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Koume', 'is_correct' => false],
                    ['answer' => 'Twinrova', 'is_correct' => true],
                    ['answer' => 'Veran', 'is_correct' => false],
                    ['answer' => 'Maple', 'is_correct' => false],
                ],
            ],
            [
                'title' => "Quel est le nom du royaume voisin de Hyrule, souvent en conflit avec celui-ci ?",

                'level_id' => 1,
                'sous_theme_id' => 7,
                'theme_id' => 6,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Lorule', 'is_correct' => true],
                    ['answer' => 'Termina', 'is_correct' => false],
                    ['answer' => 'Hyrule', 'is_correct' => false],
                    ['answer' => 'Koridai', 'is_correct' => false],
                ],
            ],
            [
                'title' => "Dans 'The Legend of Zelda: The Wind Waker', quel est le nom de l'océan qui sépare les différentes îles ?",

                'level_id' => 1,
                'sous_theme_id' => 7,
                'theme_id' => 6,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Océan d\'Hyrule', 'is_correct' => false],
                    ['answer' => 'Océan des Ténèbres', 'is_correct' => false],
                    ['answer' => 'Grand Océan', 'is_correct' => false],
                    ['answer' => 'Grand Océan', 'is_correct' => true],
                ],
            ],
            [
                'title' => "Quel est le nom de l'antagoniste principal dans 'The Legend of Zelda: A Link Between Worlds' ?",

                'level_id' => 1,
                'sous_theme_id' => 7,
                'theme_id' => 6,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Ganondorf', 'is_correct' => false],
                    ['answer' => 'Agahnim', 'is_correct' => false],
                    ['answer' => 'Yuga', 'is_correct' => true],
                    ['answer' => 'Vaati', 'is_correct' => false],
                ],
            ],
            [
                'title' => "Dans \'The Legend of Zelda: Link's Awakening\', quel est le nom de l\'île sur laquelle Link se retrouve échoué ?",

                'level_id' => 1,
                'sous_theme_id' => 7,
                'theme_id' => 6,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Île de Cocolint', 'is_correct' => true],
                    ['answer' => 'Île de Koholint', 'is_correct' => false],
                    ['answer' => 'Île de Lanelle', 'is_correct' => false],
                    ['answer' => 'Île de Tarm', 'is_correct' => false],
                ],
            ],
            [
                'title' => "Quel est le nom du méchant principal dans 'The Legend of Zelda: Majora's Mask' ?",

                'level_id' => 2,
                'sous_theme_id' => 7,
                'theme_id' => 6,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Ganondorf', 'is_correct' => false],
                    ['answer' => 'Vaati', 'is_correct' => false],
                    ['answer' => 'Ganon', 'is_correct' => false],
                    ['answer' => 'Skull Kid', 'is_correct' => true],
                ],
            ],
            [
                'title' => "Quel est le nom de la divinité qui guide Link dans 'The Legend of Zelda: Skyward Sword' ?",

                'level_id' => 2,
                'sous_theme_id' => 7,
                'theme_id' => 6,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Hylia', 'is_correct' => true],
                    ['answer' => 'Din', 'is_correct' => false],
                    ['answer' => 'Nayru', 'is_correct' => false],
                    ['answer' => 'Farore', 'is_correct' => false],
                ],
            ],
            [
                'title' => "Quel est le nom du royaume des ombres parallèle à Hyrule dans 'The Legend of Zelda: Twilight Princess' ?",

                'level_id' => 2,
                'sous_theme_id' => 7,
                'theme_id' => 6,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Lorule', 'is_correct' => false],
                    ['answer' => 'Termina', 'is_correct' => false],
                    ['answer' => 'Dark World', 'is_correct' => false],
                    ['answer' => 'Twilight Realm', 'is_correct' => true],
                ],
            ],
            [
                'title' => "Quel est le nom de la légendaire épée que Link cherche à retrouver dans de nombreux jeux ?",

                'level_id' => 2,
                'sous_theme_id' => 7,
                'theme_id' => 6,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Épée de l\'Esprit', 'is_correct' => false],
                    ['answer' => 'Épée du Héros', 'is_correct' => false],
                    ['answer' => 'Épée de Légende', 'is_correct' => false],
                    ['answer' => 'Master Sword', 'is_correct' => true],
                ],
            ],
            [
                'title' => "Dans quel jeu Zelda Link peut-il se transformer en loup ?",

                'level_id' => 2,
                'sous_theme_id' => 7,
                'theme_id' => 6,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'The Legend of Zelda', 'is_correct' => false],
                    ['answer' => 'The Legend of Zelda: Ocarina of Time', 'is_correct' => false],
                    ['answer' => 'The Legend of Zelda: Twilight Princess', 'is_correct' => true],
                    ['answer' => 'The Legend of Zelda: Majora\'s Mask', 'is_correct' => false],
                ],
            ],
            [
                'title' => "Quel est le nom du navire fantôme dans 'The Legend of Zelda: The Wind Waker' ?",

                'level_id' => 2,
                'sous_theme_id' => 7,
                'theme_id' => 6,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Le Nautilus', 'is_correct' => false],
                    ['answer' => 'Le Black Pearl', 'is_correct' => false],
                    ['answer' => 'Le Hollandais Volant', 'is_correct' => true],
                    ['answer' => 'Le Flying Dutchman', 'is_correct' => false],
                ],
            ],
            [
                'title' => "Quel est le nom du peuple volant habitant le ciel dans 'The Legend of Zelda: Skyward Sword' ?",

                'level_id' => 2,
                'sous_theme_id' => 7,
                'theme_id' => 6,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Kokiri', 'is_correct' => false],
                    ['answer' => 'Hylien', 'is_correct' => false],
                    ['answer' => 'Sheikah', 'is_correct' => false],
                    ['answer' => 'Oocca', 'is_correct' => true],
                ],
            ],
            [
                'title' => "Quel est le nom du royaume englouti dans 'The Legend of Zelda: The Wind Waker' ?",

                'level_id' => 2,
                'sous_theme_id' => 7,
                'theme_id' => 6,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Hyrule', 'is_correct' => false],
                    ['answer' => 'Lorule', 'is_correct' => false],
                    ['answer' => 'Termina', 'is_correct' => false],
                    ['answer' => 'Hydrule', 'is_correct' => true],
                ],
            ],
            [
                'title' => "Quel est le nom de la monture de Link dans 'The Legend of Zelda: Breath of the Wild' ?",

                'level_id' => 2,
                'sous_theme_id' => 7,
                'theme_id' => 6,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Épona', 'is_correct' => false],
                    ['answer' => 'Tartaros', 'is_correct' => false],
                    ['answer' => 'Midona', 'is_correct' => false],
                    ['answer' => 'Seigneur des bêtes', 'is_correct' => true],
                ],
            ],
            [
                'title' => "Quel est le nom du masque maudit principal dans 'The Legend of Zelda: Majora's Mask' ?",

                'level_id' => 2,
                'sous_theme_id' => 7,
                'theme_id' => 6,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Masque de Majora', 'is_correct' => true],
                    ['answer' => 'Masque de la lune', 'is_correct' => false],
                    ['answer' => 'Masque des ténèbres', 'is_correct' => false],
                    ['answer' => 'Masque maudit', 'is_correct' => false],
                ],
            ],
            [
                'title' => "Quel est le nom de la fée qui accompagne Link dans 'The Legend of Zelda: Ocarina of Time' ?",

                'level_id' => 2,
                'sous_theme_id' => 7,
                'theme_id' => 6,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Navi', 'is_correct' => true],
                    ['answer' => 'Taya', 'is_correct' => false],
                    ['answer' => 'Lunira', 'is_correct' => false],
                    ['answer' => 'Fara', 'is_correct' => false],
                ],
            ],
            [
                'title' => "Quel est le nom de la race habitant la forêt de Korok dans 'The Legend of Zelda: Breath of the Wild' ?",

                'level_id' => 2,
                'sous_theme_id' => 7,
                'theme_id' => 6,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Hylien', 'is_correct' => false],
                    ['answer' => 'Kokiri', 'is_correct' => false],
                    ['answer' => 'Zora', 'is_correct' => false],
                    ['answer' => 'Korok', 'is_correct' => true],
                ],
            ],
            [
                'title' => "Quel est le nom du démon qui apparaît comme boss final dans 'The Legend of Zelda: Twilight Princess' ?",

                'level_id' => 2,
                'sous_theme_id' => 7,
                'theme_id' => 6,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Ganondorf', 'is_correct' => false],
                    ['answer' => 'Vaati', 'is_correct' => false],
                    ['answer' => 'Agahnim', 'is_correct' => false],
                    ['answer' => 'Ganon', 'is_correct' => true],
                ],
            ],
            [
                'title' => "Dans 'The Legend of Zelda: A Link to the Past', quel est le nom du monde parallèle à Hyrule où Link doit se rendre ?",

                'level_id' => 2,
                'sous_theme_id' => 7,
                'theme_id' => 6,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Lorule', 'is_correct' => true],
                    ['answer' => 'Termina', 'is_correct' => false],
                    ['answer' => 'Labrynna', 'is_correct' => false],
                    ['answer' => 'Hyrule Obscur', 'is_correct' => false],
                ],
            ],
            [
                'title' => "Quel est le nom de la déesse du temps dans 'The Legend of Zelda: Majora's Mask' ?",

                'level_id' => 2,
                'sous_theme_id' => 7,
                'theme_id' => 6,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Farore', 'is_correct' => false],
                    ['answer' => 'Nayru', 'is_correct' => false],
                    ['answer' => 'Din', 'is_correct' => false],
                    ['answer' => 'Hylia', 'is_correct' => true],
                ],
            ],
            [
                'title' => "Quel est le nom du roi d'Hyrule dans 'The Legend of Zelda: Ocarina of Time' ?",

                'level_id' => 3,
                'sous_theme_id' => 7,
                'theme_id' => 6,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Roi Zora', 'is_correct' => false],
                    ['answer' => 'Roi Goron', 'is_correct' => false],
                    ['answer' => 'Roi Dodongo', 'is_correct' => false],
                    ['answer' => 'Roi Daphnès Nohansen Hyrule', 'is_correct' => true],
                ],
            ],
            [
                'title' => "Dans 'The Legend of Zelda: Twilight Princess', quel est le nom du personnage qui se révèle être l'alter-ego maléfique de Zelda ?",

                'level_id' => 3,
                'sous_theme_id' => 7,
                'theme_id' => 6,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Zant', 'is_correct' => true],
                    ['answer' => 'Ganondorf', 'is_correct' => false],
                    ['answer' => 'Vaati', 'is_correct' => false],
                    ['answer' => 'Ghirahim', 'is_correct' => false],
                ],
            ],
            [
                'title' => "Quel est le nom du personnage mystérieux qui guide Link dans 'The Legend of Zelda: Breath of the Wild' ?",

                'level_id' => 3,
                'sous_theme_id' => 7,
                'theme_id' => 6,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Midona', 'is_correct' => false],
                    ['answer' => 'Fi', 'is_correct' => false],
                    ['answer' => 'Zelda', 'is_correct' => false],
                    ['answer' => 'Rhoam Bosphoramus Hyrule', 'is_correct' => true],
                ],
            ],
            [
                'title' => "Dans 'The Legend of Zelda: Skyward Sword', quel est le nom de la terre en dessous des nuages où Link doit se rendre ?",

                'level_id' => 3,
                'sous_theme_id' => 7,
                'theme_id' => 6,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Termina', 'is_correct' => false],
                    ['answer' => 'Lorule', 'is_correct' => false],
                    ['answer' => 'Holodrum', 'is_correct' => false],
                    ['answer' => 'Surface', 'is_correct' => true],
                ],
            ],
            [
                'title' => "Quel est le nom du temple dans 'The Legend of Zelda: Ocarina of Time' où Link obtient la Master Sword ?",

                'level_id' => 3,
                'sous_theme_id' => 7,
                'theme_id' => 6,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Temple de la Forêt', 'is_correct' => false],
                    ['answer' => 'Temple du Temps', 'is_correct' => true],
                    ['answer' => 'Temple de l\'Eau', 'is_correct' => false],
                    ['answer' => 'Temple du Feu', 'is_correct' => false],
                ],
            ],
            [
                'title' => "Dans 'The Legend of Zelda: Majora's Mask', quel est le nom de l'horloge géante au centre de Termina ?",

                'level_id' => 3,
                'sous_theme_id' => 7,
                'theme_id' => 6,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Horloge de l\'Apocalypse', 'is_correct' => false],
                    ['answer' => 'Horloge de l\'Espace-Temps', 'is_correct' => false],
                    ['answer' => 'Horloge de l\'Heure Perdue', 'is_correct' => false],
                    ['answer' => 'Horloge d\'Astral', 'is_correct' => true],
                ],
            ],
            [
                'title' => "Quel est le nom du bateau parlant dans 'The Legend of Zelda: Phantom Hourglass' ?",

                'level_id' => 3,
                'sous_theme_id' => 7,
                'theme_id' => 6,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Le Hollandais Volant', 'is_correct' => false],
                    ['answer' => 'Le Vaisseau Fantôme', 'is_correct' => false],
                    ['answer' => 'Le Vaisseau du Diable', 'is_correct' => false],
                    ['answer' => 'Le Postier Fantôme', 'is_correct' => true],
                ],
            ],

            [
                'title' => "Dans 'The Legend of Zelda: The Wind Waker', quel est le nom de la princesse pirate qui accompagne Link ?",

                'level_id' => 3,
                'sous_theme_id' => 7,
                'theme_id' => 6,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Tetra', 'is_correct' => true],
                    ['answer' => 'Aryll', 'is_correct' => false],
                    ['answer' => 'Medli', 'is_correct' => false],
                    ['answer' => 'Makar', 'is_correct' => false],
                ],
            ],
            [
                'title' => "Quel est le nom du boss final dans 'The Legend of Zelda: Skyward Sword' ?",

                'level_id' => 3,
                'sous_theme_id' => 7,
                'theme_id' => 6,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Ganondorf', 'is_correct' => false],
                    ['answer' => 'Vaati', 'is_correct' => false],
                    ['answer' => 'Demise', 'is_correct' => true],
                    ['answer' => 'Ghirahim', 'is_correct' => false],
                ],
            ],
            [
                'title' => "Dans 'The Legend of Zelda: A Link to the Past', quel est le nom du sorcier qui manipule Agahnim et est le vrai antagoniste ?",

                'level_id' => 3,
                'sous_theme_id' => 7,
                'theme_id' => 6,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Vaati', 'is_correct' => false],
                    ['answer' => 'Ganondorf', 'is_correct' => false],
                    ['answer' => 'Ghirahim', 'is_correct' => false],
                    ['answer' => 'Agahnim', 'is_correct' => false],
                ],
            ],
            [
                'title' => "Quel est le nom du cheval légendaire qui apparaît dans plusieurs jeux Zelda aux côtés de Link ?",

                'level_id' => 3,
                'sous_theme_id' => 7,
                'theme_id' => 6,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Epona', 'is_correct' => true],
                    ['answer' => 'Shadowfax', 'is_correct' => false],
                    ['answer' => 'Roach', 'is_correct' => false],
                    ['answer' => 'Ardent', 'is_correct' => false],
                ],
            ],
            [
                'title' => "Dans 'The Legend of Zelda: Oracle of Ages', quel est le nom de la sorcière qui manipule le temps ?",

                'level_id' => 3,
                'sous_theme_id' => 7,
                'theme_id' => 6,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Twinrova', 'is_correct' => true],
                    ['answer' => 'Koume', 'is_correct' => false],
                    ['answer' => 'Kotake', 'is_correct' => false],
                    ['answer' => 'Veran', 'is_correct' => false],
                ],
            ],
            [
                'title' => "Quel est le nom de l'épée divine donnée à Link par la déesse Hylia dans 'The Legend of Zelda: Skyward Sword' ?",

                'level_id' => 3,
                'sous_theme_id' => 7,
                'theme_id' => 6,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Master Sword', 'is_correct' => true],
                    ['answer' => 'Fierce Deity Sword', 'is_correct' => false],
                    ['answer' => 'Biggoron Sword', 'is_correct' => false],
                    ['answer' => 'Goddess Sword', 'is_correct' => false],
                ],
            ],
            [
                'title' => "Dans 'The Legend of Zelda: Breath of the Wild', quel est le nom de la tribu Sheikah qui a développé la technologie ?",

                'level_id' => 3,
                'sous_theme_id' => 7,
                'theme_id' => 6,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Rito', 'is_correct' => false],
                    ['answer' => 'Korok', 'is_correct' => false],
                    ['answer' => 'Zora', 'is_correct' => false],
                    ['answer' => 'Yiga', 'is_correct' => true],
                ],
            ],
            [
                'title' => "Quel est le nom de la mascotte récurrente de la série Zelda, un petit être ailé similaire à une fée ?",

                'level_id' => 3,
                'sous_theme_id' => 7,
                'theme_id' => 6,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Tatl', 'is_correct' => false],
                    ['answer' => 'Fi', 'is_correct' => false],
                    ['answer' => 'Midna', 'is_correct' => false],
                    ['answer' => 'Navi', 'is_correct' => true],
                ],
            ],
            [
                'title' => "Quel est le nom de la race des sorcières ailées qui apparaissent dans plusieurs jeux Zelda ?",

                'level_id' => 3,
                'sous_theme_id' => 7,
                'theme_id' => 6,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Koume et Kotake', 'is_correct' => false],
                    ['answer' => 'Sheikah', 'is_correct' => false],
                    ['answer' => 'Gerudo', 'is_correct' => false],
                    ['answer' => 'Twinrova', 'is_correct' => true],
                ],
            ],
            [
                'title' => "Dans 'The Legend of Zelda: Twilight Princess', quel est le nom de la monture de Link lors de sa transformation en loup ?",

                'level_id' => 3,
                'sous_theme_id' => 7,
                'theme_id' => 6,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Epona', 'is_correct' => false],
                    ['answer' => 'Roach', 'is_correct' => false],
                    ['answer' => 'Ardent', 'is_correct' => false],
                    ['answer' => 'Shadowfax', 'is_correct' => true],
                ],
            ],
            [
                'title' => "Quel est le nom du royaume parallèle à Hyrule dans 'The Legend of Zelda: A Link Between Worlds' ?",

                'level_id' => 3,
                'sous_theme_id' => 7,
                'theme_id' => 6,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Termina', 'is_correct' => true],
                    ['answer' => 'Lorule', 'is_correct' => false],
                    ['answer' => 'Koholint', 'is_correct' => false],
                    ['answer' => 'Hyrule Obscur', 'is_correct' => false],
                ],
            ],
            [
                'title' => "Dans 'The Legend of Zelda: Skyward Sword', quel est le nom de l'antagoniste principal qui cherche à obtenir le pouvoir absolu ?",

                'level_id' => 3,
                'sous_theme_id' => 7,
                'theme_id' => 6,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Ghirahim', 'is_correct' => true],
                    ['answer' => 'Demise', 'is_correct' => false],
                    ['answer' => 'Vaati', 'is_correct' => false],
                    ['answer' => 'Ganondorf', 'is_correct' => false],
                ],
            ],
            [
                'title' => "Quel est le nom de la tribu qui a créé les masques magiques dans 'The Legend of Zelda: Majora's Mask' ?",

                'level_id' => 3,
                'sous_theme_id' => 7,
                'theme_id' => 6,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Goron', 'is_correct' => false],
                    ['answer' => 'Zora', 'is_correct' => false],
                    ['answer' => 'Sheikah', 'is_correct' => false],
                    ['answer' => 'Anciens', 'is_correct' => true],
                ],
            ],
            [
                'title' => "Dans 'The Legend of Zelda: Oracle of Ages', quel est le nom de la divinité gardienne de la saison hivernale ?",

                'level_id' => 3,
                'sous_theme_id' => 7,
                'theme_id' => 6,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Din', 'is_correct' => false],
                    ['answer' => 'Nayru', 'is_correct' => false],
                    ['answer' => 'Farore', 'is_correct' => false],
                    ['answer' => 'Holodrum', 'is_correct' => true],
                ],
            ],
            [
                'title' => "Quel est le nom de l'épée légendaire qui remplace la Master Sword dans 'The Legend of Zelda: The Adventure of Link' ?",

                'level_id' => 3,
                'sous_theme_id' => 7,
                'theme_id' => 6,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Goddess Sword', 'is_correct' => false],
                    ['answer' => 'Biggoron Sword', 'is_correct' => false],
                    ['answer' => 'Fierce Deity Sword', 'is_correct' => false],
                    ['answer' => 'Magic Sword', 'is_correct' => true],
                ],
            ],
            [
                'title' => "Dans 'The Legend of Zelda: Twilight Princess', quel est le nom de la créature araignée géante qui hante les cavernes ?",

                'level_id' => 3,
                'sous_theme_id' => 7,
                'theme_id' => 6,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'King Dodongo', 'is_correct' => false],
                    ['answer' => 'Moldarach', 'is_correct' => false],
                    ['answer' => 'Gohma', 'is_correct' => true],
                    ['answer' => 'Twilit Bloat', 'is_correct' => false],
                ],
            ],

            [
                'title' => "Quel est le nom du bateau volant contrôlé par Ciela dans 'The Legend of Zelda: Phantom Hourglass' ?",

                'level_id' => 3,
                'sous_theme_id' => 7,
                'theme_id' => 6,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'King of Red Lions', 'is_correct' => false],
                    ['answer' => 'The Great Sea', 'is_correct' => false],
                    ['answer' => 'The Black Pearl', 'is_correct' => false],
                    ['answer' => 'SS Linebeck', 'is_correct' => true],
                ],
            ],
            [
                'title' => "Dans 'The Legend of Zelda: Oracle of Seasons', quel est le nom de la divinité gardienne de la saison estivale ?",

                'level_id' => 3,
                'sous_theme_id' => 7,
                'theme_id' => 6,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Din', 'is_correct' => true],
                    ['answer' => 'Nayru', 'is_correct' => false],
                    ['answer' => 'Farore', 'is_correct' => false],
                    ['answer' => 'Holodrum', 'is_correct' => false],
                ],
            ],
            [
                'title' => "Quel est le nom du sage des sables qui apparaît dans 'The Legend of Zelda: The Wind Waker' ?",

                'level_id' => 3,
                'sous_theme_id' => 7,
                'theme_id' => 6,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Rauru', 'is_correct' => false],
                    ['answer' => 'Fado', 'is_correct' => false],
                    ['answer' => 'Makar', 'is_correct' => true],
                    ['answer' => 'Medli', 'is_correct' => false],
                ],
            ],
            [
                'title' => "Dans 'The Legend of Zelda: A Link to the Past', quel est le nom de la sorcière qui transforme le roi d'Hyrule en monstre ?",

                'level_id' => 3,
                'sous_theme_id' => 7,
                'theme_id' => 6,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Veran', 'is_correct' => false],
                    ['answer' => 'Twinrova', 'is_correct' => false],
                    ['answer' => 'Koume', 'is_correct' => false],
                    ['answer' => 'Agahnim', 'is_correct' => true],
                ],
            ],
            [
                'title' => "Quel est le nom de la monture de Link dans 'The Legend of Zelda: Skyward Sword' ?",

                'level_id' => 3,
                'sous_theme_id' => 7,
                'theme_id' => 6,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Epona', 'is_correct' => false],
                    ['answer' => 'Roach', 'is_correct' => false],
                    ['answer' => 'Célestrier', 'is_correct' => true],
                    ['answer' => 'Ardent', 'is_correct' => false],
                ],
            ],
            [
                'title' => "Dans 'The Legend of Zelda: The Wind Waker', quel est le nom du royaume des dieux situé au-dessus des nuages ?",

                'level_id' => 3,
                'sous_theme_id' => 7,
                'theme_id' => 6,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Termina', 'is_correct' => false],
                    ['answer' => 'Hyrule', 'is_correct' => false],
                    ['answer' => 'Lorule', 'is_correct' => false],
                    ['answer' => 'Hylia', 'is_correct' => true],
                ],
            ],
            [
                'title' => "Quel est le nom du peuple ailé qui habite dans les Cieux dans 'The Legend of Zelda: Skyward Sword' ?",

                'level_id' => 3,
                'sous_theme_id' => 7,
                'theme_id' => 6,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Anouki', 'is_correct' => false],
                    ['answer' => 'Sheikah', 'is_correct' => false],
                    ['answer' => 'Rito', 'is_correct' => true],
                    ['answer' => 'Hylien', 'is_correct' => false],
                ],
            ],







            //friends
            [
                'title' => "Quel est le nom complet de Ross?",

                'level_id' => 1,
                'sous_theme_id' => 2,
                'theme_id' => 2,
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

                'level_id' => 1,
                'sous_theme_id' => 2,
                'theme_id' => 2,
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

                'level_id' => 1,
                'sous_theme_id' => 2,
                'theme_id' => 2,
                'user_id' => 1,
                'answers' => [
                    ['answer' => 'Chef', 'is_correct' => true],
                    ['answer' => 'Actrice', 'is_correct' => false],
                    ['answer' => 'Journaliste', 'is_correct' => false],
                    ['answer' => 'Infirmière', 'is_correct' => false],
                ],
                [
                    'title' => "Quel est le métier de Chandler?",

                    'level_id' => 1,
                    'sous_theme_id' => 2,
                    'theme_id' => 2,
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

                    'level_id' => 1,
                    'sous_theme_id' => 2,
                    'theme_id' => 2,
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

                    'level_id' => 1,
                    'sous_theme_id' => 2,
                    'theme_id' => 2,
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

                    'level_id' => 1,
                    'sous_theme_id' => 2,
                    'theme_id' => 2,
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

                    'level_id' => 1,
                    'sous_theme_id' => 2,
                    'theme_id' => 2,
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

                    'level_id' => 1,
                    'sous_theme_id' => 2,
                    'theme_id' => 2,
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

                    'level_id' => 1,
                    'sous_theme_id' => 2,
                    'theme_id' => 2,
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

                    'level_id' => 2,
                    'sous_theme_id' => 2,
                    'theme_id' => 2,
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

                    'level_id' => 2,
                    'sous_theme_id' => 2,
                    'theme_id' => 2,
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

                    'level_id' => 2,
                    'sous_theme_id' => 2,
                    'theme_id' => 2,
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

                    'level_id' => 2,
                    'sous_theme_id' => 2,
                    'theme_id' => 2,
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

                    'level_id' => 2,
                    'sous_theme_id' => 2,
                    'theme_id' => 2,
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

                    'level_id' => 2,
                    'sous_theme_id' => 2,
                    'theme_id' => 2,
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

                    'level_id' => 2,
                    'sous_theme_id' => 2,
                    'theme_id' => 2,
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

                    'level_id' => 2,
                    'sous_theme_id' => 2,
                    'theme_id' => 2,
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

                    'level_id' => 2,
                    'sous_theme_id' => 2,
                    'theme_id' => 2,
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

                    'level_id' => 2,
                    'sous_theme_id' => 2,
                    'theme_id' => 2,
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

                    'level_id' => 3,
                    'sous_theme_id' => 2,
                    'theme_id' => 2,
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

                    'level_id' => 3,
                    'sous_theme_id' => 2,
                    'theme_id' => 2,
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

                    'level_id' => 3,
                    'sous_theme_id' => 2,
                    'theme_id' => 2,
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

                    'level_id' => 3,
                    'sous_theme_id' => 2,
                    'theme_id' => 2,
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

                    'level_id' => 3,
                    'sous_theme_id' => 2,
                    'theme_id' => 2,
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

                    'level_id' => 3,
                    'sous_theme_id' => 2,
                    'theme_id' => 2,
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

                    'level_id' => 3,
                    'sous_theme_id' => 2,
                    'theme_id' => 2,
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

                    'level_id' => 3,
                    'sous_theme_id' => 2,
                    'theme_id' => 2,
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

                    'level_id' => 3,
                    'sous_theme_id' => 2,
                    'theme_id' => 2,
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

                    'level_id' => 3,
                    'sous_theme_id' => 2,
                    'theme_id' => 2,
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

                    'level_id' => 4,
                    'sous_theme_id' => 2,
                    'theme_id' => 2,
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

                    'level_id' => 4,
                    'sous_theme_id' => 2,
                    'theme_id' => 2,
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

                    'level_id' => 4,
                    'sous_theme_id' => 2,
                    'theme_id' => 2,
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

                    'level_id' => 4,
                    'sous_theme_id' => 2,
                    'theme_id' => 2,
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

                    'level_id' => 4,
                    'sous_theme_id' => 2,
                    'theme_id' => 2,
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

                    'level_id' => 4,
                    'sous_theme_id' => 2,
                    'theme_id' => 2,
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

                    'level_id' => 4,
                    'sous_theme_id' => 2,
                    'theme_id' => 2,
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

                    'level_id' => 4,
                    'sous_theme_id' => 2,
                    'theme_id' => 2,
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

                    'level_id' => 4,
                    'sous_theme_id' => 2,
                    'theme_id' => 2,
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

                    'level_id' => 4,
                    'sous_theme_id' => 2,
                    'theme_id' => 2,
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

                    'level_id' => 2,
                    'sous_theme_id' => 2,
                    'theme_id' => 2,
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

                    'level_id' => 2,
                    'sous_theme_id' => 2,
                    'theme_id' => 2,
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

                    'level_id' => 2,
                    'sous_theme_id' => 2,
                    'theme_id' => 2,
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

                    'level_id' => 2,
                    'sous_theme_id' => 2,
                    'theme_id' => 2,
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

                    'level_id' => 2,
                    'sous_theme_id' => 2,
                    'theme_id' => 2,
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

                    'level_id' => 2,
                    'sous_theme_id' => 2,
                    'theme_id' => 2,
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

                    'level_id' => 2,
                    'sous_theme_id' => 2,
                    'theme_id' => 2,
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

                    'level_id' => 2,
                    'sous_theme_id' => 2,
                    'theme_id' => 2,
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

                    'level_id' => 2,
                    'sous_theme_id' => 2,
                    'theme_id' => 2,
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

                    'level_id' => 2,
                    'sous_theme_id' => 2,
                    'theme_id' => 2,
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

                    'level_id' => 1,
                    'sous_theme_id' => 2,
                    'theme_id' => 2,
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

                    'level_id' => 1,
                    'sous_theme_id' => 2,
                    'theme_id' => 2,
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

                    'level_id' => 1,
                    'sous_theme_id' => 2,
                    'theme_id' => 2,
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

                    'level_id' => 1,
                    'sous_theme_id' => 2,
                    'theme_id' => 2,
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

                    'level_id' => 1,
                    'sous_theme_id' => 2,
                    'theme_id' => 2,
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

                    'level_id' => 1,
                    'sous_theme_id' => 2,
                    'theme_id' => 2,
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

                    'level_id' => 1,
                    'sous_theme_id' => 2,
                    'theme_id' => 2,
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

                    'level_id' => 1,
                    'sous_theme_id' => 2,
                    'theme_id' => 2,
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

                    'level_id' => 1,
                    'sous_theme_id' => 2,
                    'theme_id' => 2,
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

                    'level_id' => 1,
                    'sous_theme_id' => 2,
                    'theme_id' => 2,
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

                    'level_id' => 2,
                    'sous_theme_id' => 2,
                    'theme_id' => 2,
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

                    'level_id' => 2,
                    'sous_theme_id' => 2,
                    'theme_id' => 2,
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

                    'level_id' => 2,
                    'sous_theme_id' => 2,
                    'theme_id' => 2,
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

                    'level_id' => 2,
                    'sous_theme_id' => 2,
                    'theme_id' => 2,
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

                    'level_id' => 2,
                    'sous_theme_id' => 2,
                    'theme_id' => 2,
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

                    'level_id' => 2,
                    'sous_theme_id' => 2,
                    'theme_id' => 2,
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

                    'level_id' => 2,
                    'sous_theme_id' => 2,
                    'theme_id' => 2,
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

                    'level_id' => 2,
                    'sous_theme_id' => 2,
                    'theme_id' => 2,
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

                    'level_id' => 3,
                    'sous_theme_id' => 2,
                    'theme_id' => 2,
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

                    'level_id' => 3,
                    'sous_theme_id' => 2,
                    'theme_id' => 2,
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

                    'level_id' => 3,
                    'sous_theme_id' => 2,
                    'theme_id' => 2,
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

                    'level_id' => 3,
                    'sous_theme_id' => 2,
                    'theme_id' => 2,
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

                    'level_id' => 3,
                    'sous_theme_id' => 2,
                    'theme_id' => 2,
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

                    'level_id' => 3,
                    'sous_theme_id' => 2,
                    'theme_id' => 2,
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

                    'level_id' => 3,
                    'sous_theme_id' => 2,
                    'theme_id' => 2,
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

                    'level_id' => 3,
                    'sous_theme_id' => 2,
                    'theme_id' => 2,
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

                    'level_id' => 3,
                    'sous_theme_id' => 2,
                    'theme_id' => 2,
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

                    'level_id' => 3,
                    'sous_theme_id' => 2,
                    'theme_id' => 2,
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

                    'level_id' => 3,
                    'sous_theme_id' => 2,
                    'theme_id' => 2,
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

                    'level_id' => 3,
                    'sous_theme_id' => 2,
                    'theme_id' => 2,
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

                    'level_id' => 3,
                    'sous_theme_id' => 2,
                    'theme_id' => 2,
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

                    'level_id' => 3,
                    'sous_theme_id' => 2,
                    'theme_id' => 2,
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

                    'level_id' => 3,
                    'sous_theme_id' => 2,
                    'theme_id' => 2,
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

                    'level_id' => 3,
                    'sous_theme_id' => 2,
                    'theme_id' => 2,
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

                    'level_id' => 3,
                    'sous_theme_id' => 2,
                    'theme_id' => 2,
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

                    'level_id' => 3,
                    'sous_theme_id' => 2,
                    'theme_id' => 2,
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

                    'level_id' => 3,
                    'sous_theme_id' => 2,
                    'theme_id' => 2,
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

                    'level_id' => 3,
                    'sous_theme_id' => 2,
                    'theme_id' => 2,
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

                    'level_id' => 1,
                    'sous_theme_id' => 3,
                    'theme_id' => 3,
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

                    'level_id' => 1,
                    'sous_theme_id' => 3,
                    'theme_id' => 3,
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

                    'level_id' => 1,
                    'sous_theme_id' => 3,
                    'theme_id' => 3,
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

                    'level_id' => 1,
                    'sous_theme_id' => 3,
                    'theme_id' => 3,
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

                    'level_id' => 1,
                    'sous_theme_id' => 3,
                    'theme_id' => 3,
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

                    'level_id' => 1,
                    'sous_theme_id' => 3,
                    'theme_id' => 3,
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

                    'level_id' => 1,
                    'sous_theme_id' => 3,
                    'theme_id' => 3,
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

                    'level_id' => 1,
                    'sous_theme_id' => 3,
                    'theme_id' => 3,
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

                    'level_id' => 1,
                    'sous_theme_id' => 3,
                    'theme_id' => 3,
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

                    'level_id' => 1,
                    'sous_theme_id' => 3,
                    'theme_id' => 3,
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

                    'level_id' => 1,
                    'sous_theme_id' => 3,
                    'theme_id' => 3,
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

                    'level_id' => 1,
                    'sous_theme_id' => 3,
                    'theme_id' => 3,
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

                    'level_id' => 1,
                    'sous_theme_id' => 3,
                    'theme_id' => 3,
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

                    'level_id' => 1,
                    'sous_theme_id' => 3,
                    'theme_id' => 3,
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

                    'level_id' => 1,
                    'sous_theme_id' => 3,
                    'theme_id' => 3,
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

                    'level_id' => 1,
                    'sous_theme_id' => 3,
                    'theme_id' => 3,
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

                    'level_id' => 1,
                    'sous_theme_id' => 3,
                    'theme_id' => 3,
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

                    'level_id' => 1,
                    'sous_theme_id' => 3,
                    'theme_id' => 3,
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

                    'level_id' => 1,
                    'sous_theme_id' => 3,
                    'theme_id' => 3,
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

                    'level_id' => 1,
                    'sous_theme_id' => 3,
                    'theme_id' => 3,
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

                    'level_id' => 1,
                    'sous_theme_id' => 3,
                    'theme_id' => 3,
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

                    'level_id' => 1,
                    'sous_theme_id' => 3,
                    'theme_id' => 3,
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

                    'level_id' => 1,
                    'sous_theme_id' => 3,
                    'theme_id' => 3,
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

                    'level_id' => 1,
                    'sous_theme_id' => 3,
                    'theme_id' => 3,
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

                    'level_id' => 1,
                    'sous_theme_id' => 3,
                    'theme_id' => 3,
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

                    'level_id' => 1,
                    'sous_theme_id' => 3,
                    'theme_id' => 3,
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

                'level_id' => 1,
                'sous_theme_id' => 3,
                'theme_id' => 3,
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

                'level_id' => 1,
                'sous_theme_id' => 3,
                'theme_id' => 3,
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

                'level_id' => 1,
                'sous_theme_id' => 3,
                'theme_id' => 3,
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

                'level_id' => 1,
                'sous_theme_id' => 3,
                'theme_id' => 3,
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

                'level_id' => 1,
                'sous_theme_id' => 3,
                'theme_id' => 3,
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

                'level_id' => 1,
                'sous_theme_id' => 3,
                'theme_id' => 3,
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

                'level_id' => 1,
                'sous_theme_id' => 3,
                'theme_id' => 3,
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

                'level_id' => 1,
                'sous_theme_id' => 3,
                'theme_id' => 3,
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

                'level_id' => 1,
                'sous_theme_id' => 3,
                'theme_id' => 3,
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

                'level_id' => 2,
                'sous_theme_id' => 3,
                'theme_id' => 3,
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

                'level_id' => 2,
                'sous_theme_id' => 3,
                'theme_id' => 3,
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

                'level_id' => 2,
                'sous_theme_id' => 3,
                'theme_id' => 3,
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

                'level_id' => 2,
                'sous_theme_id' => 3,
                'theme_id' => 3,
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

                'level_id' => 2,
                'sous_theme_id' => 3,
                'theme_id' => 3,
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

                'level_id' => 2,
                'sous_theme_id' => 3,
                'theme_id' => 3,
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

                'level_id' => 2,
                'sous_theme_id' => 3,
                'theme_id' => 3,
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

                'level_id' => 2,
                'sous_theme_id' => 3,
                'theme_id' => 3,
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

                'level_id' => 2,
                'sous_theme_id' => 3,
                'theme_id' => 3,
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

                'level_id' => 2,
                'sous_theme_id' => 3,
                'theme_id' => 3,
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

                'level_id' => 2,
                'sous_theme_id' => 3,
                'theme_id' => 3,
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

                'level_id' => 2,
                'sous_theme_id' => 3,
                'theme_id' => 3,
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

                'level_id' => 2,
                'sous_theme_id' => 3,
                'theme_id' => 3,
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

                'level_id' => 2,
                'sous_theme_id' => 3,
                'theme_id' => 3,
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

                'level_id' => 2,
                'sous_theme_id' => 3,
                'theme_id' => 3,
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

                'level_id' => 2,
                'sous_theme_id' => 3,
                'theme_id' => 3,
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

                'level_id' => 2,
                'sous_theme_id' => 3,
                'theme_id' => 3,
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

                'level_id' => 2,
                'sous_theme_id' => 3,
                'theme_id' => 3,
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

                'level_id' => 2,
                'sous_theme_id' => 3,
                'theme_id' => 3,
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

                'level_id' => 2,
                'sous_theme_id' => 3,
                'theme_id' => 3,
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

                'level_id' => 2,
                'sous_theme_id' => 3,
                'theme_id' => 3,
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

                'level_id' => 2,
                'sous_theme_id' => 3,
                'theme_id' => 3,
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

                'level_id' => 2,
                'sous_theme_id' => 3,
                'theme_id' => 3,
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

                'level_id' => 2,
                'sous_theme_id' => 3,
                'theme_id' => 3,
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

                'level_id' => 2,
                'sous_theme_id' => 3,
                'theme_id' => 3,
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

                'level_id' => 2,
                'sous_theme_id' => 3,
                'theme_id' => 3,
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

                'level_id' => 2,
                'sous_theme_id' => 3,
                'theme_id' => 3,
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

                'level_id' => 2,
                'sous_theme_id' => 3,
                'theme_id' => 3,
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

                'level_id' => 2,
                'sous_theme_id' => 3,
                'theme_id' => 3,
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

                'level_id' => 1,
                'sous_theme_id' => 3,
                'theme_id' => 3,
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

                'level_id' => 1,
                'sous_theme_id' => 3,
                'theme_id' => 3,
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

                'level_id' => 1,
                'sous_theme_id' => 3,
                'theme_id' => 3,
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

                'level_id' => 1,
                'sous_theme_id' => 3,
                'theme_id' => 3,
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

                'level_id' => 1,
                'sous_theme_id' => 3,
                'theme_id' => 3,
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

                'level_id' => 1,
                'sous_theme_id' => 3,
                'theme_id' => 3,
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

                'level_id' => 3,
                'sous_theme_id' => 3,
                'theme_id' => 3,
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

                'level_id' => 3,
                'sous_theme_id' => 3,
                'theme_id' => 3,
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

                'level_id' => 3,
                'sous_theme_id' => 3,
                'theme_id' => 3,
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

                'level_id' => 3,
                'sous_theme_id' => 3,
                'theme_id' => 3,
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

                'level_id' => 3,
                'sous_theme_id' => 3,
                'theme_id' => 3,
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

                'level_id' => 3,
                'sous_theme_id' => 3,
                'theme_id' => 3,
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

                'level_id' => 3,
                'sous_theme_id' => 3,
                'theme_id' => 3,
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

                'level_id' => 3,
                'sous_theme_id' => 3,
                'theme_id' => 3,
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

                'level_id' => 3,
                'sous_theme_id' => 3,
                'theme_id' => 3,
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

                'level_id' => 3,
                'sous_theme_id' => 3,
                'theme_id' => 3,
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

                'level_id' => 3,
                'sous_theme_id' => 3,
                'theme_id' => 3,
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

                'level_id' => 3,
                'sous_theme_id' => 3,
                'theme_id' => 3,
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

                'level_id' => 3,
                'sous_theme_id' => 3,
                'theme_id' => 3,
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

                'level_id' => 3,
                'sous_theme_id' => 3,
                'theme_id' => 3,
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

                'level_id' => 3,
                'sous_theme_id' => 3,
                'theme_id' => 3,
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

                'level_id' => 3,
                'sous_theme_id' => 3,
                'theme_id' => 3,
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

                'level_id' => 3,
                'sous_theme_id' => 3,
                'theme_id' => 3,
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

                'level_id' => 3,
                'sous_theme_id' => 3,
                'theme_id' => 3,
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

                'level_id' => 3,
                'sous_theme_id' => 3,
                'theme_id' => 3,
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

                'level_id' => 3,
                'sous_theme_id' => 3,
                'theme_id' => 3,
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

                'level_id' => 3,
                'sous_theme_id' => 3,
                'theme_id' => 3,
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

                'level_id' => 3,
                'sous_theme_id' => 3,
                'theme_id' => 3,
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

                'level_id' => 3,
                'sous_theme_id' => 3,
                'theme_id' => 3,
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

                'level_id' => 3,
                'sous_theme_id' => 3,
                'theme_id' => 3,
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

                'level_id' => 3,
                'sous_theme_id' => 3,
                'theme_id' => 3,
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

                'level_id' => 3,
                'sous_theme_id' => 3,
                'theme_id' => 3,
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

                'level_id' => 3,
                'sous_theme_id' => 3,
                'theme_id' => 3,
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

                'level_id' => 3,
                'sous_theme_id' => 3,
                'theme_id' => 3,
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

                'level_id' => 3,
                'sous_theme_id' => 3,
                'theme_id' => 3,
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

                'level_id' => 3,
                'sous_theme_id' => 3,
                'theme_id' => 3,
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

                'level_id' => 3,
                'sous_theme_id' => 3,
                'theme_id' => 3,
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

                'level_id' => 3,
                'sous_theme_id' => 3,
                'theme_id' => 3,
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

                'level_id' => 3,
                'sous_theme_id' => 3,
                'theme_id' => 3,
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

                'level_id' => 3,
                'sous_theme_id' => 3,
                'theme_id' => 3,
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

                'level_id' => 3,
                'sous_theme_id' => 3,
                'theme_id' => 3,
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

                'level_id' => 1,
                'sous_theme_id' => 1,
                'theme_id' => 1,
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

                'level_id' => 1,
                'sous_theme_id' => 1,
                'theme_id' => 1,
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

                'level_id' => 1,
                'sous_theme_id' => 1,
                'theme_id' => 1,
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

                'level_id' => 1,
                'sous_theme_id' => 1,
                'theme_id' => 1,
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

                'level_id' => 1,
                'sous_theme_id' => 1,
                'theme_id' => 1,
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

                'level_id' => 1,
                'sous_theme_id' => 1,
                'theme_id' => 1,
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

                'level_id' => 1,
                'sous_theme_id' => 1,
                'theme_id' => 1,
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

                'level_id' => 1,
                'sous_theme_id' => 1,
                'theme_id' => 1,
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

                'level_id' => 1,
                'sous_theme_id' => 1,
                'theme_id' => 1,
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

                'level_id' => 1,
                'sous_theme_id' => 1,
                'theme_id' => 1,
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

                'level_id' => 1,
                'sous_theme_id' => 1,
                'theme_id' => 1,
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

                'level_id' => 1,
                'sous_theme_id' => 1,
                'theme_id' => 1,
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

                'level_id' => 1,
                'sous_theme_id' => 1,
                'theme_id' => 1,
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

                'level_id' => 1,
                'sous_theme_id' => 1,
                'theme_id' => 1,
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

                'level_id' => 1,
                'sous_theme_id' => 1,
                'theme_id' => 1,
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

                'level_id' => 1,
                'sous_theme_id' => 1,
                'theme_id' => 1,
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

                'level_id' => 1,
                'sous_theme_id' => 1,
                'theme_id' => 1,
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

                'level_id' => 1,
                'sous_theme_id' => 1,
                'theme_id' => 1,
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

                'level_id' => 1,
                'sous_theme_id' => 1,
                'theme_id' => 1,
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

                'level_id' => 1,
                'sous_theme_id' => 1,
                'theme_id' => 1,
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

                'level_id' => 2,
                'sous_theme_id' => 1,
                'theme_id' => 1,
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

                'level_id' => 2,
                'sous_theme_id' => 1,
                'theme_id' => 1,
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

                'level_id' => 2,
                'sous_theme_id' => 1,
                'theme_id' => 1,
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

                'level_id' => 2,
                'sous_theme_id' => 1,
                'theme_id' => 1,
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

                'level_id' => 2,
                'sous_theme_id' => 1,
                'theme_id' => 1,
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

                'level_id' => 2,
                'sous_theme_id' => 1,
                'theme_id' => 1,
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

                'level_id' => 2,
                'sous_theme_id' => 1,
                'theme_id' => 1,
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

                'level_id' => 2,
                'sous_theme_id' => 1,
                'theme_id' => 1,
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

                'level_id' => 2,
                'sous_theme_id' => 1,
                'theme_id' => 1,
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

                'level_id' => 2,
                'sous_theme_id' => 1,
                'theme_id' => 1,
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

                'level_id' => 2,
                'sous_theme_id' => 1,
                'theme_id' => 1,
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

                'level_id' => 2,
                'sous_theme_id' => 1,
                'theme_id' => 1,
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

                'level_id' => 2,
                'sous_theme_id' => 1,
                'theme_id' => 1,
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

                'level_id' => 2,
                'sous_theme_id' => 1,
                'theme_id' => 1,
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

                'level_id' => 2,
                'sous_theme_id' => 1,
                'theme_id' => 1,
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

                'level_id' => 2,
                'sous_theme_id' => 1,
                'theme_id' => 1,
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

                'level_id' => 2,
                'sous_theme_id' => 1,
                'theme_id' => 1,
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

                'level_id' => 2,
                'sous_theme_id' => 1,
                'theme_id' => 1,
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

                'level_id' => 2,
                'sous_theme_id' => 1,
                'theme_id' => 1,
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

                'level_id' => 2,
                'sous_theme_id' => 1,
                'theme_id' => 1,
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

                'level_id' => 3,
                'sous_theme_id' => 1,
                'theme_id' => 1,
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

                'level_id' => 3,
                'sous_theme_id' => 1,
                'theme_id' => 1,
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

                'level_id' => 3,
                'sous_theme_id' => 1,
                'theme_id' => 1,
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

                'level_id' => 3,
                'sous_theme_id' => 1,
                'theme_id' => 1,
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

                'level_id' => 3,
                'sous_theme_id' => 1,
                'theme_id' => 1,
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

                'level_id' => 3,
                'sous_theme_id' => 1,
                'theme_id' => 1,
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

                'level_id' => 3,
                'sous_theme_id' => 1,
                'theme_id' => 1,
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

                'level_id' => 3,
                'sous_theme_id' => 1,
                'theme_id' => 1,
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

                'level_id' => 3,
                'sous_theme_id' => 1,
                'theme_id' => 1,
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

                'level_id' => 3,
                'sous_theme_id' => 1,
                'theme_id' => 1,
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

                'level_id' => 3,
                'sous_theme_id' => 1,
                'theme_id' => 1,
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

                'level_id' => 3,
                'sous_theme_id' => 1,
                'theme_id' => 1,
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

                'level_id' => 3,
                'sous_theme_id' => 1,
                'theme_id' => 1,
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

                'level_id' => 3,
                'sous_theme_id' => 1,
                'theme_id' => 1,
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

                'level_id' => 3,
                'sous_theme_id' => 1,
                'theme_id' => 1,
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

                'level_id' => 3,
                'sous_theme_id' => 1,
                'theme_id' => 1,
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

                'level_id' => 3,
                'sous_theme_id' => 1,
                'theme_id' => 1,
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

                'level_id' => 3,
                'sous_theme_id' => 1,
                'theme_id' => 1,
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

                'level_id' => 3,
                'sous_theme_id' => 1,
                'theme_id' => 1,
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

                'level_id' => 3,
                'sous_theme_id' => 1,
                'theme_id' => 1,
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

                'level_id' => 1,
                'sous_theme_id' => 1,
                'theme_id' => 1,
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

                'level_id' => 1,
                'sous_theme_id' => 1,
                'theme_id' => 1,
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

                'level_id' => 1,
                'sous_theme_id' => 1,
                'theme_id' => 1,
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

                'level_id' => 1,
                'sous_theme_id' => 1,
                'theme_id' => 1,
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

                'level_id' => 1,
                'sous_theme_id' => 1,
                'theme_id' => 1,
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

                'level_id' => 1,
                'sous_theme_id' => 1,
                'theme_id' => 1,
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

                'level_id' => 1,
                'sous_theme_id' => 1,
                'theme_id' => 1,
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

                'level_id' => 1,
                'sous_theme_id' => 1,
                'theme_id' => 1,
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

                'level_id' => 1,
                'sous_theme_id' => 1,
                'theme_id' => 1,
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

                'level_id' => 1,
                'sous_theme_id' => 1,
                'theme_id' => 1,
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

                'level_id' => 2,
                'sous_theme_id' => 1,
                'theme_id' => 1,
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

                'level_id' => 2,
                'sous_theme_id' => 1,
                'theme_id' => 1,
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

                'level_id' => 2,
                'sous_theme_id' => 1,
                'theme_id' => 1,
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

                'level_id' => 2,
                'sous_theme_id' => 1,
                'theme_id' => 1,
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

                'level_id' => 2,
                'sous_theme_id' => 1,
                'theme_id' => 1,
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

                'level_id' => 2,
                'sous_theme_id' => 1,
                'theme_id' => 1,
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

                'level_id' => 2,
                'sous_theme_id' => 1,
                'theme_id' => 1,
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

                'level_id' => 2,
                'sous_theme_id' => 1,
                'theme_id' => 1,
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

                'level_id' => 2,
                'sous_theme_id' => 1,
                'theme_id' => 1,
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

                'level_id' => 2,
                'sous_theme_id' => 1,
                'theme_id' => 1,
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

                'level_id' => 3,
                'sous_theme_id' => 1,
                'theme_id' => 1,
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

                'level_id' => 3,
                'sous_theme_id' => 1,
                'theme_id' => 1,
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

                'level_id' => 3,
                'sous_theme_id' => 1,
                'theme_id' => 1,
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

                'level_id' => 3,
                'sous_theme_id' => 1,
                'theme_id' => 1,
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

                'level_id' => 3,
                'sous_theme_id' => 1,
                'theme_id' => 1,
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

                'level_id' => 3,
                'sous_theme_id' => 1,
                'theme_id' => 1,
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

                'level_id' => 3,
                'sous_theme_id' => 1,
                'theme_id' => 1,
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

                'level_id' => 3,
                'sous_theme_id' => 1,
                'theme_id' => 1,
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

                'level_id' => 3,
                'sous_theme_id' => 1,
                'theme_id' => 1,
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

                'level_id' => 3,
                'sous_theme_id' => 1,
                'theme_id' => 1,
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

            $level = Level::find($questionData['level_id']);
            $sous_theme = SousTheme::where('id', $questionData['sous_theme_id'])->firstOrFail();
            $theme = Theme::where('id', $questionData['theme_id'])->firstOrFail();
            $user = User::where('id', $questionData['user_id'])->firstOrFail();

            $createdQuestion = Question::create([
                'question' => $questionData['title'],
                'level_id' => $level->id,

                'sous_theme_id' => $sous_theme->id,
                'theme_id' => $theme->id,
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

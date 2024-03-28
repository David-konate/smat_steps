<?php

use App\Models\User;
use App\Models\Ranking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController;

use App\Http\Controllers\Api\LevelController;
use App\Http\Controllers\Api\ThemeController;
use App\Http\Controllers\Api\RankingController;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\QuestionController;
use App\Http\Controllers\Api\SecurityController;
use App\Http\Controllers\Api\SmatController;
use App\Http\Controllers\Api\SousThemeController;
use App\Models\Friend;
use App\Models\Smat;
use App\Models\SmatUser;
use App\Models\Theme;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

//Route loggin
Route::prefix('/security')->group(function () {
    Route::post('/register', [SecurityController::class, 'register'])->middleware('guest')->name('security.register');
    Route::post('/login', [SecurityController::class, 'login'])->middleware(['guest'])->name('security.login');
    Route::post('/logout', [SecurityController::class, 'logout'])->middleware('auth:sanctum');
});

//Route Categories
Route::prefix('categories')->group(function () {
    Route::get('/', [CategoryController::class, 'index']);
    Route::get('/{category}', [CategoryController::class, 'show']);
    Route::post('/', [CategoryController::class, 'store']);
    Route::put('/{category}', [CategoryController::class, 'update']);
    Route::delete('/{category}', [CategoryController::class, 'destroy']);
});

//Level
Route::prefix('levels')->group(function () {
    Route::get('/', [LevelController::class, 'index']);
    Route::get('/{level}', [LevelController::class, 'show']);
    Route::post('/', [LevelController::class, 'store']);
    Route::delete('/{level}', [LevelController::class, 'destroy']);
});

//Route questions
Route::controller(QuestionController::class)->group(function () {
    Route::get('new-game/{currentLevel}', 'newRankedGame');
    Route::get('new-private-game/{currentLevel}', 'newPrivateGame');
    Route::get('questions', 'index');
    Route::get('questions/{question}', 'show');
    Route::get('questions-random', 'random');
    Route::post('questions/', 'store')->middleware('auth:sanctum');
    Route::post('questions/{question}', 'update')->middleware('auth:sanctum');
});

// Routes Ranking
Route::prefix('rankings')->group(function () {
    Route::get('/', [RankingController::class, 'index']);
    Route::get('/top-collection', [RankingController::class, 'topCollection']);
    Route::get('welcome/{currentLevel}', [RankingController::class, 'welcome']);
    Route::post('/save-stats', [RankingController::class, 'saveStats']);
});


// Routes Smat
Route::prefix('smats')->group(function () {
    Route::post('/accept-dual/{smat}', [SmatController::class, 'acceptDual']);
    Route::delete('{smat}', [SmatController::class, 'destroy']);
});

// Routes SousTheme
Route::prefix('sous-themes')->group(function () {
    Route::get('/', [SousThemeController::class, 'index']);
    Route::post('/', [SousThemeController::class, 'store']);
    Route::get('{id}', [SousThemeController::class, 'show']);
    Route::put('{id}', [SousThemeController::class, 'update']);
    Route::delete('{id}', [SousThemeController::class, 'destroy']);
});

// Routes Theme
Route::prefix('themes')->group(function () {
    Route::get('/', [ThemeController::class, 'index']);
    Route::post('/', [ThemeController::class, 'store']);
    Route::get('{id}', [ThemeController::class, 'show']);
    Route::put('{id}', [ThemeController::class, 'update']);
    Route::delete('{id}', [ThemeController::class, 'destroy']);
});

// Routes user
Route::prefix('users')->group(function () {
    Route::get('/', [UserController::class, 'index']);
    Route::get('{user}', [UserController::class, 'show']);
    Route::post('{user}', [UserController::class, 'update']);
    Route::post('{user}/add-friend-with/{friend}', [UserController::class, 'addFriend']);
    Route::get('{user}/is-friend-with/{friend}', [UserController::class, 'friendshipExists']);
    Route::post('{user}/accept-friend-with/{friend}', [UserController::class, 'acceptFriend']);
    Route::delete('{user}/deleted-friend-with/{friend}', [UserController::class, 'deletedFriendship']);
    Route::delete('{user}', [UserController::class, 'destroy']);
});



Route::get('/me/{currentLevel}', function ($currentLevel) {
    // Assurez-vous que l'utilisateur est authentifié
    $user = Auth::user();
    // Récupère les demandes d'ami en attente pour l'utilisateur actuel avec les données utilisateur associées chargées
    $friendPending = Friend::with("user")
        ->where("status", 1) // Filtrer où le statut est défini à 1 ( demandes en attente)
        ->where("friend_id", $user->id) // Filtrer les demandes où l'ID de l'ami correspond à l'ID de l'utilisateur actuel
        ->get();

    // Récupère les demandes d'ami envoyées par l'utilisateur actuel avec les données utilisateur associées chargées
    $friendSent = Friend::with("friend")
        ->where("status", 1) // Filtrer où le statut est défini à 1 ( demande envoyé)
        ->where("user_id", $user->id) // Filtrer les demandes où l'ID de l'utilisateur correspond à l'ID de l'utilisateur actuel (demandes envoyées par l'utilisateur actuel)
        ->get();

    $userId = auth()->id(); // Supposons que vous récupériez l'ID de l'utilisateur connecté


    $datas = Friend::where(function ($query) use ($userId) {
        $query->where('user_id', $userId)
            ->orWhere('friend_id', $userId);
    })
        ->where('status', 2)
        ->with('user', 'friend')
        ->get();

    $friends = [];

    foreach ($datas as $data) {
        // Ajouter l'utilisateur à la liste des amis
        $friends[] = $data->user_id == $userId ? $data->friend : $data->user;
    }


    $data = SmatUser::where('user_id', $userId)->get();

    $newSmats = []; // Initialiser un tableau pour stocker les nouvelles données Smats

    foreach ($data as $smatUser) {
        $smatId = $smatUser->smat_id; // Accéder à l'ID du SmatUser
        $relatedSmats = SmatUser::where('smat_id', $smatId)
            ->with('user')
            ->with('smat')
            ->get();
        // Récupérer le Smat associé à ce SmatUser avec les relations theme et sousTheme
        $smat = Smat::where('id', $smatId)
            ->where('status', 1) // Condition pour le statut égal à 1
            ->with(['theme', 'sousTheme'])
            ->first();

        if ($smat) {
            // Extraire le thème et le sous-thème
            $theme = $smat->theme ? $smat->theme->theme : null;
            $status = $smat->status;
            $sousTheme = isset($smat->sousTheme) ? $smat->sousTheme->sous_theme : null;

            // Ajouter les données de SmatUser associées à ce Smat dans $newSmats
            $newSmats[] = [
                'relatedSmats' => $relatedSmats,
                'theme' => $theme,
                'sousTheme' => $sousTheme,
            ];
        }
    }





    // Retourner les données sous forme de tableau associatif
    return [
        'user' => $user,
        "friendPending" => $friendPending,
        'friendSent' => $friendSent,
        'friends' => $friends,
        'newSmats' => $newSmats,


        // 'latestRankings' => $latestRankings,
        // 'totalRankingsCount' => $totalRankingsCount,
    ];
})->middleware('auth:sanctum');

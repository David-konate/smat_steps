<?php

use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\LevelController;
use App\Http\Controllers\Api\QuestionController;
use App\Http\Controllers\Api\RankingController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\SecurityController;
use App\Http\Controllers\Api\SousThemeController;
use App\Http\Controllers\Api\ThemeController;
use App\Http\Controllers\Api\UserController;

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
    Route::get('new-game/{currentLevel}', 'newGame');
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
    Route::post('save-stats', [RankingController::class, 'saveStats']);
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
    Route::put('{user}', [UserController::class, 'update']);
    Route::post('{friend}/add-friend/{user}', [UserController::class, 'addFriend']);
    Route::get('{user}/is-friend-with/{friend}', [UserController::class, 'isFriendWith']);
    Route::delete('{user}', [UserController::class, 'destroy']);
});

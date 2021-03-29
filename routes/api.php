<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\TeamController;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\RoleController;
use App\Http\Controllers\Api\PlayerController;
use App\Http\Controllers\Api\PermissionController;
use App\Http\Controllers\Api\TeamPlayersController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/login', [AuthController::class, 'login'])->name('api.login');

Route::middleware('auth:sanctum')
    ->get('/user', function (Request $request) {
        return $request->user();
    })
    ->name('api.user');

Route::name('api.')
    ->middleware('auth:sanctum')
    ->group(function () {
        Route::apiResource('roles', RoleController::class);
        Route::apiResource('permissions', PermissionController::class);

        Route::apiResource('players', PlayerController::class);

        Route::apiResource('teams', TeamController::class);

        // Team Players
        Route::get('/teams/{team}/players', [
            TeamPlayersController::class,
            'index',
        ])->name('teams.players.index');
        Route::post('/teams/{team}/players', [
            TeamPlayersController::class,
            'store',
        ])->name('teams.players.store');
    });

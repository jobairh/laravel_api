<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/v1', [UsersController::class, 'index']);
Route::post('/v1', [UsersController::class, 'store']);
Route::put('/v1/{id}', [UsersController::class, 'update']);
Route::delete('/v1/{id}', [UsersController::class, 'destroy']);

<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GenreController;
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


Route::resource('genres',GenreController::class)->except(['create','edit']);

/*
// List artigos
Route::get('/generos', [GenreController::class,'index']);

// List single artigo
Route::get('/genero/{id}', [GenreController::class,'show']);

// Create new artigo
Route::post('/generos', [GenreController::class,'store']);

// Update artigo
Route::put('/generos/{id}', [GenreController::class,'update']);

// Delete artigo
Route::delete('generos/{id}', [GenreController::class,'destroy']);
*/
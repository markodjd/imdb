<?php

use App\Http\Controllers\CommentsController;
use App\Http\Controllers\GenresController;
use App\Http\Controllers\MoviesController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/movies', [MoviesController::class, 'index']);

Route::post('/movies', [MoviesController::class, 'store']);

Route::post('/movies/{movie}/comments', [CommentsController::class, 'store']);

Route::get('/movies/{movie}', [MoviesController::class, 'show'])->name('movie');

Route::get('/add', [MoviesController::class, 'create']);

Route::get('/genres/{genre}', [GenresController::class, 'show']);

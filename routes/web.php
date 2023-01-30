<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\MovieController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/add-movie', function () {
    return view('add-movie');
});

// Route::get('/genre', function () {
//     return view('genre');
// });

Route::get('/movies', [MovieController::class, 'index']);
Route::get('/movies/{id}', [MovieController::class, 'show']);

Route::post('/addmovie', [MovieController::class, 'store']);
Route::post('/createcomment', [CommentController::class, 'store']);

Route::get('/genre/{id}', [GenreController::class, 'show']);


<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [MainController::class, 'index']);
Route::get('/index', [MainController::class, 'index']);
Route::get('/tournament/{tournament_id}', [MainController::class, 'tournament']);
Route::get('/tournaments_container', [MainController::class, 'tournaments']);


Route::get('/basics', function () {
    return view('basics');
});
Route::get('/sign-up', function () {
    return view('sign-up');
});
Route::get('/Singleton', function () {
    return view('Singleton');
});



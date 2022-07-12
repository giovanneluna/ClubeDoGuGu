<?php

use App\Http\Controllers\SportsController;
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

Route::resource('sports', SportsController::class);
Route::resource('blocks', SportsController::class);


Route::get('/club', function () {
    return view('menu.club');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


Route::get('/clube', function () {
    return view('menu.club');
})->name('menu.club');

// Route::get('/agendar', function () {
//     return view('menu.schedule');
// })->name('menu.schedule');

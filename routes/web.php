<?php

use App\Http\Controllers\BlocksController;
use App\Http\Controllers\ClientsController;
use App\Http\Controllers\EquipmentsController;
use App\Http\Controllers\RecordsController;
use App\Http\Controllers\SchedulesController;
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

Route::resource('clients', ClientsController::class);
Route::resource('sports', SportsController::class);
Route::resource('equipments', EquipmentsController::class);
Route::resource('blocks', BlocksController::class);
Route::resource('schedules', SchedulesController::class);
Route::resource('records', RecordsController::class);

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

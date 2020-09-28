<?php

use App\Http\Controllers\PasteController;
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


Route::get('/pastes', [PasteController::class, 'index'])->name('pastes.index');

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia\Inertia::render('Dashboard');
})->name('dashboard');

/*Route::domain('https://laravel.link')->group(function () {
    Route::get('/', function () {
        return view('welcome');
    });


    Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
        return Inertia\Inertia::render('Dashboard');
    })->name('dashboard');
});



Route::domain('https://pastes.laravel.link')->group(function () {
    Route::get('/', [PasteController::class, 'index'])->name('pastes.index');

});*/



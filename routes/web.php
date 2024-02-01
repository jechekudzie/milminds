<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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


Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/advisory', function () {
    return view('advisory');
})->name('advisory');

Route::get('/cleaning-bees', function () {
    return view('cleaning_bees');
})->name('cleaning-bees');

Route::get('/colorful-expressions', function () {
    return view('colorful_expressions');
})->name('colorful-expressions');

Route::get('/fly-express', function () {
    return view('fly_express');
})->name('fly-express');

Route::get('/way-maker', function () {
    return view('index');
})->name('way-maker');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

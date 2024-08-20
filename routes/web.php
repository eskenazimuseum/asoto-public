<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EssayController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/essays/create', [EssayController::class, 'create'])->name('essays.create');
    Route::post('/essays', [EssayController::class, 'store'])->name('essays.store');
    Route::get('/essays/editList', [EssayController::class, 'editList'])->name('essays.editList');
    Route::get('/essays/{essay}/edit', [EssayController::class, 'edit'])->name('essays.edit');
    Route::put('/essays/{essay}', [EssayController::class, 'update'])->name('essays.update');
    Route::delete('/essays/{essay}', [EssayController::class, 'destroy'])->name('essays.destroy');
});

Route::get('/essays/{essay}', [EssayController::class, 'show'])->name('essays.show');
Route::get('/essays', [EssayController::class, 'index'])->name('essays.index');

require __DIR__.'/auth.php';

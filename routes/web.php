<?php

use App\Http\Controllers\Accueil;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\RSVPController;
use App\Models\RSVP;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [Accueil::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    // Event routes
    Route::get('/events/{event}', [EventController::class, 'show'])->name('show');
    Route::post('/events/{event}/comments', [EventController::class, 'storeComment'])->name('events.comments.store');
});

require __DIR__.'/auth.php';


Route::get('/events', [EventController::class, 'index']);
Route::post('/events', [EventController::class, 'store'])->name('events');
Route::delete('/events/{id}', [EventController::class, 'destroy'])->name('event.destroy');
Route::put('/events/{id}', [EventController::class, 'update'])->name('event.update');

Route::get('/reservation', [RSVPController::class, 'index']);
Route::post('/reservation', [RSVPController::class, 'create']);

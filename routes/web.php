<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HealthController;
use App\Http\Controllers\ItineraryController;
use App\Livewire\Settings\Appearance;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\Profile;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Route::get('settings/profile', Profile::class)->name('settings.profile');
    Route::get('settings/password', Password::class)->name('settings.password');
    Route::get('settings/appearance', Appearance::class)->name('settings.appearance');
});

Route::resource('contacts', ContactController::class);

Route::get('travel/itinerary/{id}', [ItineraryController::class, 'show']);

Route::get('travel', function () {
    return view('travel.index');
})->name('travel');

Route::resource('health', HealthController::class);

require __DIR__.'/auth.php';

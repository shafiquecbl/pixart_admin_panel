<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AiModelController;
use App\Http\Controllers\ProviderController;
use App\Http\Controllers\ApiKeyController;
use App\Http\Controllers\AdController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\InspirationsController;
use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Resource Routes
    Route::resource('pages', PagesController::class);
    Route::resource('inspirations', InspirationsController::class);
    Route::resource('feedback', FeedbackController::class);
    Route::resource('ai-models', AiModelController::class);
    Route::resource('providers', ProviderController::class);
    Route::resource('api-keys', ApiKeyController::class);
    Route::resource('ads', AdController::class);
    Route::resource('users', UserController::class);
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

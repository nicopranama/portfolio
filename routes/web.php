<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\AboutMeController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PortfolioController;

Route::get('/', function () {
    return view('layouts.app');
});

Route::get('/about-me', [AboutMeController::class, 'index'])->name('about-me.index');
Route::get('/about-me/create', [AboutMeController::class, 'create'])->name('about-me.create');
Route::post('/about-me', [AboutMeController::class, 'store'])->name('about-me.store');
Route::get('/about-me/edit', [AboutMeController::class, 'edit'])->name('about-me.edit');
Route::resource('projects', ProjectController::class);
Route::resource('skills', SkillController::class);
Route::resource('contact', ContactController::class);
Route::get('/portfolio', [PortfolioController::class, 'index'])->name('portfolio');
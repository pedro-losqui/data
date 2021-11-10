<?php

use Illuminate\Support\Facades\Route;

Route::get('/',         [App\Http\Controllers\LoginController::class, 'index'])->name('login')->middleware(['guest']);
Route::post('/logout',  [App\Http\Controllers\LoginController::class, 'logout'])->name('logout')->middleware(['auth']);

Route::get('/home',     App\Http\Livewire\Home\Homecomponent::class)->name('home')->middleware(['auth']);
Route::get('/archive',  App\Http\Livewire\Home\Homecomponent::class)->name('archive')->middleware(['auth']);
Route::get('/clinic',   App\Http\Livewire\Home\Homecomponent::class)->name('clinic')->middleware(['auth']);
Route::get('/user',     App\Http\Livewire\Home\Homecomponent::class)->name('user')->middleware(['auth']);

Route::get('/results',  [App\Http\Controllers\RequestController::class, 'storeResults'])->name('results')->middleware(['auth']);

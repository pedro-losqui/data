<?php

use Illuminate\Support\Facades\Route;

Route::get('/',         [App\Http\Controllers\LoginController::class, 'index'])->name('login')->middleware(['guest']);
Route::post('/logout',  [App\Http\Controllers\LoginController::class, 'logout'])->name('logout')->middleware(['auth']);

Route::get('/home',     App\Http\Livewire\Home\Homecomponent::class)->name('home')->middleware(['auth']);
Route::get('/calendar', App\Http\Livewire\Calendar\Calendarcomponent::class)->name('calendar')->middleware(['auth']);
Route::get('/archive',  App\Http\Livewire\Archive\Archivecomponent::class)->name('archive')->middleware(['auth']);
Route::get('/clinic',   App\Http\Livewire\Clinic\Cliniccomponent::class)->name('clinic')->middleware(['auth']);

Route::get('/results',  [App\Http\Controllers\RequestController::class, 'storeResults'])->name('results')->middleware(['auth']);

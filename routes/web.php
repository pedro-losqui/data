<?php

use Illuminate\Support\Facades\Route;

Route::get('/',         [App\Http\Controllers\LoginController::class, 'index'])->name('login');
Route::get('/logout',   App\Http\Livewire\Home\Homecomponent::class)->name('logout');

Route::get('/home',     App\Http\Livewire\Home\Homecomponent::class)->name('home');
Route::get('/archive',  App\Http\Livewire\Home\Homecomponent::class)->name('archive');
Route::get('/clinic',   App\Http\Livewire\Home\Homecomponent::class)->name('clinic');
Route::get('/user',     App\Http\Livewire\Home\Homecomponent::class)->name('user');
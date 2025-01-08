<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\DashboardLivewire;
use App\Livewire\DashboardLivewire as LivewireDashboardLivewire;



//Route::view('/', 'welcome');
Route::redirect('/', 'dashboard'); //Esta línea hace que la primera pantalla sea la de login

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth'])
    ->name('dashboard');


Route::get('/dashboard-livewire', LivewireDashboardLivewire::class)->name('dashboard-livewire');


Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__ . '/auth.php';


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
  return Inertia::render('Welcome', [
    'h1' => "Igor Franco"
  ]);
});

Route::get('/resources',function(){
  return response([
    'opa' => "valeu"
  ]);
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
  return Inertia::render('Dashboard');
})->name('dashboard');

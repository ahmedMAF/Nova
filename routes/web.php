<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TeamController;
use Illuminate\Support\Facades\Route;

Route::get('/' , [HomeController::class, 'home'])->name('home');
Route::get('/about' , [AboutController::class, 'about'])->name('about');
Route::get('/team' , [TeamController::class, 'team'])->name('team');
Route::get('/contact' , [ContactController::class, 'contact'])->name('contact');
Route::get('/projects' , [ProjectController::class, 'projects'])->name('projects');
Route::get('/services' , [ServiceController::class, 'services'])->name('services');

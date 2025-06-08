<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
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
Route::get('/admin' , [AdminController::class, 'admin'])->name('admin');
Route::get('/admin/login' , [LoginController::class, 'login'])->name('login');
Route::get('/admin/password' , [LoginController::class, 'change'])->name('change');
Route::get('/admin/project' , [ProjectController::class, 'project'])->name('add_project');
Route::get('/admin/team' , [TeamController::class, 'teamPage'])->name('add_team');
Route::get('/admin/category' , [CategoryController::class, 'category'])->name('add_category');
Route::get('/admin/services' , [ServiceController::class, 'service'])->name('add-service');
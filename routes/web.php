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
Route::get('/project/details/{projectId}' , [ProjectController::class, 'details'])->name('project_details');
Route::get('/services' , [ServiceController::class, 'services'])->name('services');
Route::get('/service/details/{serviceId}' , [ServiceController::class, 'details'])->name('service_details');
Route::get('/admin' , [AdminController::class, 'admin'])->name('admin');
Route::get('/admin/login' , [LoginController::class, 'login'])->name('login');
Route::get('/admin/password' , [LoginController::class, 'change'])->name('change');
Route::get('/admin/project' , [ProjectController::class, 'project'])->name('admin_project');
Route::post('/admin/project' , [ProjectController::class, 'addProject'])->name('add_project');
Route::get('/admin/team' , [TeamController::class, 'teamPage'])->name('admin_team');
Route::post('/admin/member' , [TeamController::class, 'addMember'])->name('add_member');
Route::get('/admin/category' , [CategoryController::class, 'category'])->name('admin_category');
Route::post('/admin/category' , [CategoryController::class, 'addCategory'])->name('add_category');
Route::get('/admin/services' , [ServiceController::class, 'service'])->name('admin_service');
Route::post('/admin/services' , [ServiceController::class, 'addService'])->name('add-service');
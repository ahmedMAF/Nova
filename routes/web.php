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
use App\Http\Middleware\Auth;
use App\Http\Middleware\SetLocale;
use Illuminate\Support\Facades\Route;

Route::middleware(SetLocale::class)->group(function () {
    Route::get('/', [HomeController::class, 'home'])->name('home');
    Route::get('/about', [AboutController::class, 'about'])->name('about');
    Route::get('/team', [TeamController::class, 'team'])->name('team');
    Route::get('/contact', [ContactController::class, 'contact'])->name('contact');
    Route::get('/projects', [ProjectController::class, 'projects'])->name('projects');
    Route::get('/project/details/{projectId}', [ProjectController::class, 'details'])->name('project_details');
    Route::get('/services', [ServiceController::class, 'services'])->name('services');
    Route::get('/service/details/{serviceId}', [ServiceController::class, 'details'])->name('service_details');
    Route::get('/admin/login', [LoginController::class, 'login'])->name('login');
    Route::post('/admin/login', [LoginController::class, 'validateLogin'])->name('validate_login');
    Route::get('/admin/logout', [LoginController::class, 'logout'])->name('logout');
});


Route::middleware([Auth::class, SetLocale::class])->group(function () {
    Route::get('/admin', [AdminController::class, 'admin'])->name('admin');
    Route::get('/admin/password', [LoginController::class, 'change'])->name('change');
    Route::post('/admin/password', [LoginController::class, 'changePassword'])->name('change_password');
    Route::get('/admin/project', [ProjectController::class, 'project'])->name('admin_project');
    Route::post('/admin/project', [ProjectController::class, 'addProject'])->name('add_project');
    Route::get('/admin/edit/project/{id}', [ProjectController::class, 'editProject'])->name('edit_project');
    Route::delete('/admin/delete/project/{id}', [ProjectController::class, 'deleteProject'])->name('delete_project');
    Route::post('/admin/edit/project/{id}', [ProjectController::class, 'updateProject'])->name('update_project');
    Route::delete('/admin/delete/project/{id}/{name}/{type}', [ProjectController::class, 'deleteMeadia'])->where('name', '.*')->name('delete_media');
    Route::get('/admin/team', [TeamController::class, 'teamPage'])->name('admin_team');
    Route::post('/admin/member', [TeamController::class, 'addMember'])->name('add_member');
    Route::get('/admin/edit/member/{id}', [TeamController::class, 'editMember'])->name('edit_member');
    Route::post('/admin/edit/member/{id}', [TeamController::class, 'updateMember'])->name('update_member');
    Route::delete('/admin/delete/member/{id}', [TeamController::class, 'deleteMember'])->name('delete_member');
    Route::get('/admin/category', [CategoryController::class, 'category'])->name('admin_category');
    Route::post('/admin/category', [CategoryController::class, 'addCategory'])->name('add_category');
    Route::get('/admin/services', [ServiceController::class, 'service'])->name('admin_service');
    Route::post('/admin/services', [ServiceController::class, 'addService'])->name('add-service');
    Route::get('/admin/edit/service/{id}', [ServiceController::class, 'editService'])->name('edit_service');
    Route::post('/admin/edit/service/{id}', [ServiceController::class, 'updateService'])->name('update_service');
    Route::delete('/admin/delete/service/{id}', [ServiceController::class, 'deleteService'])->name('delete_service');
});


Route::get('/change-language', function () {
    $current = session('locale', app()->getLocale());
    $new = $current === 'ar' ? 'en' : 'ar';

    session(['locale' => $new]);
    app()->setLocale($new);

    return redirect()->back();
})->name('change_language');







use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;
use App\Models\Project;
use App\Models\Service;

Route::get('/generate-sitemap', function () {
    $sitemap = Sitemap::create();

    $sitemap->add(Url::create('/'));
    $sitemap->add(Url::create('/about'));
    $sitemap->add(Url::create('/team'));
    $sitemap->add(Url::create('/contact'));
    $sitemap->add(Url::create('/projects'));
    $sitemap->add(Url::create('/services'));

    foreach (Project::all() as $project) {
        $sitemap->add(Url::create("/project/details/{$project->id}"));
    }

    foreach (Service::all() as $service) {
        $sitemap->add(Url::create("/service/details/{$service->id}"));
    }

    $sitemap->writeToFile(public_path('sitemap.xml'));

    return 'okay';
});

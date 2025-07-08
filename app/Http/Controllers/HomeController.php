<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use Illuminate\Support\Str;
use App\Models\Project;

class HomeController extends Controller
{
    public function home()
    {
        $locale = app()->getLocale();
        $services = Service::select('id', "name_{$locale} as name", "description_{$locale} as description", 'image')->take(6)->get();
        $projects = Project::select('id', 'image', "name_{$locale} as name")->take(10)->get();
        $servicesWithShortDes = $services->map(function ($service) {
            $service->description = Str::words($service->description, 10);
            return $service;
        });
        return view('home', ["services" => $servicesWithShortDes , "projects" => $projects]);
    }
}

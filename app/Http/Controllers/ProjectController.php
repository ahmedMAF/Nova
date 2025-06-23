<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Project;

class ProjectController extends Controller
{
    public function projects()
    {
        $projects = Project::paginate(10);
        return view('projects' , ['projects' => $projects]);
    }
    public function project()
    {
        $categories = Category::all();
        return view('add-project', ['categories' => $categories]);
    }

    public function addProject(Request $request)
    {
        // Validate and process the request data
        $validated = $request->validate([
            'name' => 'required|string',
            'name_ar' => 'required|string',
            'client' => 'required|string',
            'client_ar' => 'required|string',
            'description' => 'required|string',
            'description_ar' => 'required|string',
            'category' => 'required|exists:categories,id',
            'date' => 'required|date',
            'link' => 'string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif',
            'photo.*' => 'image|mimes:jpeg,png,jpg,gif',
            'video.*' => 'url',
        ]);

        $pathMainImage = $request->file('image')->store('projects', 'public');
        $photos = [];
        $videos = [];

        if ($request->hasFile('photo')) {
            foreach ($request->file('photo') as $photo) {
                $photos[] = $photo->store('projects', 'public');
            }
        }
        if ($request->has('video')) {
            foreach ($request->input('video') as $video) {
                $index = strpos($video , 'v=');
                $videos[] = substr($video, $index + 2);
            }
        }

        Project::create([
            'name' => $validated['name'],
            'name_ar' => $validated['name_ar'],
            'client' => $validated['client'],
            'client_ar' => $validated['client_ar'],
            'description' => $validated['description'],
            'description_ar' => $validated['description_ar'],
            'category_id' => $validated['category'],
            'date' => $validated['date'],
            'link' => $validated['link'],
            'image' => $pathMainImage,
            'photos' => json_encode($photos),
            'videos' => json_encode($videos),
        ]);

        // Redirect or return a response after processing
        return redirect()->route('projects')->with('success', 'Project added successfully!');
    }

    public function details($projectId){
        $project = Project::find($projectId);
        return view('project-details' , ["project" => $project]);
    }
}

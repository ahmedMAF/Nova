<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Project;
use Illuminate\Support\Facades\Storage;


class ProjectController extends Controller
{
    public function projects()
    {
        $projects = Project::paginate(10);
        return view('projects', ['projects' => $projects]);
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
                $index = strpos($video, 'v=');
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

    public function details($projectId)
    {
        $project = Project::find($projectId);
        return view('project-details', ["project" => $project]);
    }

    public function editProject($id)
    {
        $project = Project::find($id);
        $categories = Category::all();
        return view('edit-project', ['project' => $project, 'categories' => $categories]);
    }

    public function updateProject(Request $request, $id)
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
            'link' => 'nullable|string',
            'image' => 'image|mimes:jpeg,png,jpg,gif',
            'photo.*' => 'image|mimes:jpeg,png,jpg,gif',
            'video.*' => 'url',
        ]);

        $project = Project::find($id);

        if ($request->hasFile('image')) {
            $pathMainImage = $request->file('image')->store('projects', 'public');
            Storage::disk('public')->delete($project->image); // Delete old image
        } else {
            $pathMainImage = $project->image; // Keep the old image if no new one is uploaded
        }

        $photos = json_decode($project->photos, true) ?? [];
        if ($request->hasFile('photo')) {
            foreach ($request->file('photo') as $photo) {
                $photos[] = $photo->store('projects', 'public');
            }
        }

        $videos = json_decode($project->videos, true) ?? [];
        if ($request->has('video')) {
            foreach ($request->input('video') as $video) {
                $index = strpos($video, 'v=');
                $videos[] = substr($video, $index + 2);
            }
        }

        $project->update([
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

        return redirect()->route('projects')->with('success', 'Project updated successfully!');
    }

    public function deleteMeadia($id, $name, $type)
    {
        $project = Project::find($id);
        if ($type == 'p') {
            $photos = json_decode($project->photos, true);
            $key = array_search(urldecode($name), $photos);
            if ($key !== false) {
                unset($photos[$key]);
                Storage::disk('public')->delete($name); // Delete the photo file
            }
            $project->photos = json_encode(array_values($photos));
        } elseif ($type == 'v') {
            $videos = json_decode($project->videos, true);
            $key = array_search($name, $videos);
            if ($key !== false) {
                unset($videos[$key]);
            }
            $project->videos = json_encode(array_values($videos));
        }
        $project->save();

        return redirect()->back()->with('success', 'Media deleted successfully!');
    }

    public function deleteProject($id)
    {
        $project = Project::find($id);
        Storage::disk('public')->delete($project->image); // Delete main image
        $photos = json_decode($project->photos, true);
        foreach ($photos as $photo) {
            Storage::disk('public')->delete($photo); // Delete each photo
        }
        $project->delete(); // Delete the project record
        return redirect()->route('projects')->with('success', 'Project deleted successfully!');
    }
}

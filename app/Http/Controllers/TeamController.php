<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;

class TeamController extends Controller
{
    public function team()
    {
        $members = Team::all();
        return view('team' , ['members' => $members]);
    }
        public function teamPage()
    {
        return view('add-team');
    }
    public function addMember(Request $request)
    {
        // Validate the request data
        $validate = $request->validate([
            'name' => 'required|string',
            'name_ar' => 'required|string',
            'role' => 'required|string',
            'role_ar' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif',
        ]);

        // Handle file upload
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('team', 'public');
        }

        // Save the team member data to the database
        // Assuming you have a TeamMember model
        Team::create([
            'name' => $validate['name'],
            'name_ar' => $validate['name_ar'],
            'role' => $validate['role'],
            'role_ar' => $validate['role_ar'],
            'image' => $imagePath,
        ]);

        return redirect()->route('team')->with('success', 'Team member added successfully!');
    }
}

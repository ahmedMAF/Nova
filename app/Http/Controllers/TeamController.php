<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;
use Illuminate\Support\Facades\Storage;


class TeamController extends Controller
{
    public function team()
    {
        $members = Team::all();
        return view('team', ['members' => $members]);
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

    public function editMember($id)
    {
        $member = Team::find($id);
        return view('edit-member', ['member' => $member]);
    }

    public function updateMember(Request $request, $id)
    {
        // Validate the request data
        $validate = $request->validate([
            'name' => 'required|string',
            'name_ar' => 'required|string',
            'role' => 'required|string',
            'role_ar' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif',
        ]);

        // Find the team member by ID
        $member = Team::find($id);

        // Update the member's data
        $member->name = $validate['name'];
        $member->name_ar = $validate['name_ar'];
        $member->role = $validate['role'];
        $member->role_ar = $validate['role_ar'];

        // Handle file upload if a new image is provided
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('team', 'public');
            Storage::disk('public')->delete($member->image); // Delete old image
            $member->image = $imagePath;
        }

        // Save the updated member data
        $member->save();

        return redirect()->route('team')->with('success', 'Team member updated successfully!');
    }

    public function deleteMember($id)
    {
        $member = Team::find($id);
        Storage::disk('public')->delete($member->image); // Delete the image file
        $member->delete(); // Delete the member from the database
        return redirect()->route('team')->with('success', 'Team member deleted successfully!');
    }
}

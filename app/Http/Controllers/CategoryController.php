<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function category()
    {
        return view('add-category');
    }
    public function addCategory(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'name_ar' => 'required|string',
        ]);

        Category::create([
            'name' => $validated['name'],
            'name_ar' => $validated['name_ar'],
        ]);

        return redirect()->route('admin_category')->with('success', 'Category added successfully!');
    }
}

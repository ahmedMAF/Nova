<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{
    public function services()
    {
        $services = Service::all();
        return view('services' , ['services' => $services]);
    }
    public function service()
    {
        return view('add-service');
    }

    public function addService(Request $request)
    {
        // Validate and process the request data
        $validated = $request->validate([
            'name' => 'required|string',
            'name_ar' => 'required|string',
            'description' => 'required|string',
            'description_ar' => 'required|string',
            'delivery_time' => 'required|string',
            'price_range' => 'required|string',
            'information' => 'file',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif',
            'feature.*' => 'string',
        ]);

        $infoPath = null;
        $feature = [];
        $imagePath = $request->file('image')->store('service', 'public');

        if ($request->hasFile('information')) {
            $infoPath = $request->file('information')->store('service', 'public');
        }

        if ($request->has('feature')) {
            $feature = $request->input('feature');
        }

        Service::create([
            "name" => $validated["name"],
            "name_ar" => $validated["name_ar"],
            "description" => $validated["description"],
            "description_ar" => $validated["description_ar"],
            "delivery_time" => $validated["delivery_time"],
            "price_range" => $validated["price_range"],
            "information" => $infoPath,
            "image" => $imagePath,
            "feature" => json_encode($feature),
        ]);

        return redirect()->route('services')->with('success', 'Service added successfully!');
    }

    public function details($serviceId){
        $service = Service::find($serviceId);
        return view('services-details' , ["service" => $service]);
    }
}

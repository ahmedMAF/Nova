<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use Illuminate\Support\Facades\Storage;


class ServiceController extends Controller
{
    public function services()
    {
        $services = Service::all();
        return view('services', ['services' => $services]);
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

    public function details($serviceId)
    {
        $service = Service::find($serviceId);
        $services = Service::select('name', 'id')->get();
        return view('services-details', ["service" => $service, "services" => $services]);
    }

    public function editService($id)
    {
        $service = Service::findOrFail($id);
        return view('edit-service', ['service' => $service]);
    }

    public function updateService(Request $request, $id)
    {
        $service = Service::find($id);

        // Validate and process the request data
        $validated = $request->validate([
            'name' => 'required|string',
            'name_ar' => 'required|string',
            'description' => 'required|string',
            'description_ar' => 'required|string',
            'delivery_time' => 'required|string',
            'price_range' => 'required|string',
            'information' => 'file',
            'image' => 'image|mimes:jpeg,png,jpg,gif',
            'feature.*' => 'nullable|string',
        ]);

        $infoPath = $service->information;
        if ($request->hasFile('information')) {
            $infoPath = $request->file('information')->store('service', 'public');
            if ($service->information) {
                Storage::disk('public')->delete($service->information); // Delete old information file
            }
        }

        $feature = [];
        if ($request->input('feature')) {
            foreach ($request->input('feature') as $value) {
                if ($value) {
                    $feature[] = $value;
                }
            }
        }

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('service', 'public');
            Storage::disk('public')->delete($service->image); // Delete old image file
        } else {
            $imagePath = $service->image;
        }

        $service->update([
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

        return redirect()->route('services')->with('success', 'Service updated successfully!');
    }

    public function deleteService($id)
    {
        $service = Service::find($id);
        Storage::disk('public')->delete($service->image); // Delete the image file
        if ($service->information) {
            Storage::disk('public')->delete($service->information); // Delete the information file if exists
        }
        $service->delete();

        return redirect()->route('services')->with('success', 'Service deleted successfully!');
    }
}

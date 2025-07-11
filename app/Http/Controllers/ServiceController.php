<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;


class ServiceController extends Controller
{
    public function services()
    {
        $locale = app()->getLocale();
        $services = Service::select('id', "name_{$locale} as name", "description_{$locale} as description", 'image')->get();
        $servicesWithShortDes = $services->map(function ($service) {
            $service->description = Str::words($service->description, 12);
            return $service;
        });
        return view('services', ['services' => $servicesWithShortDes]);
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
            'delivery_time_ar' => 'required|string',
            'price_range' => 'required|string',
            'information' => 'file',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif',
            'feature.*' => 'string',
            'feature_ar.*' => 'string',
        ]);

        $infoPath = null;
        $feature = [];
        $featureAr = [];
        $imagePath = $request->file('image')->store('service', 'public');

        if ($request->hasFile('information')) {
            $infoPath = $request->file('information')->store('service', 'public');
        }

        if ($request->has('feature')) {
            $feature = $request->input('feature');
        }

        if ($request->has('feature_ar')) {
            $featureAr = $request->input('feature_ar');
        }

        Service::create([
            "name_en" => $validated["name"],
            "name_ar" => $validated["name_ar"],
            "description_en" => $validated["description"],
            "description_ar" => $validated["description_ar"],
            "delivery_time_en" => $validated["delivery_time"],
            "delivery_time_ar" => $validated["delivery_time_ar"],
            "price_range" => $validated["price_range"],
            "information" => $infoPath,
            "image" => $imagePath,
            "feature_en" => json_encode($feature),
            "feature_ar" => json_encode($featureAr),
        ]);

        return redirect()->route('services')->with('success', 'Service added successfully!');
    }

    public function details($serviceId)
    {
        $locale = app()->getLocale();
        $service = Service::select('id', "name_{$locale} as name", "description_{$locale} as description", "delivery_time_{$locale} as delivery_time", 'price_range', 'information', 'image', "feature_{$locale} as feature")
            ->where('id', $serviceId)
            ->first();
        $services = Service::select("name_{$locale} as name", 'id')->get();
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
            'delivery_time_ar' => 'required|string',
            'price_range' => 'required|string',
            'information' => 'file',
            'image' => 'image|mimes:jpeg,png,jpg,gif',
            'feature.*' => 'nullable|string',
            'feature_ar.*' => 'nullable|string',
        ]);

        $infoPath = $service->information;
        if ($request->hasFile('information')) {
            $infoPath = $request->file('information')->store('service', 'public');
            if ($service->information) {
                Storage::disk('public')->delete($service->information); // Delete old information file
            }
        }

        $feature = [];
        $featureAr = [];

        if ($request->input('feature')) {
            foreach ($request->input('feature') as $value) {
                if ($value) {
                    $feature[] = $value;
                }
            }
        }

        if ($request->input('feature_ar')) {
            foreach ($request->input('feature_ar') as $value) {
                if ($value) {
                    $featureAr[] = $value;
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
            "name_en" => $validated["name"],
            "name_ar" => $validated["name_ar"],
            "description_en" => $validated["description"],
            "description_ar" => $validated["description_ar"],
            "delivery_time_en" => $validated["delivery_time"],
            "delivery_time_ar" => $validated["delivery_time_ar"],
            "price_range" => $validated["price_range"],
            "information" => $infoPath,
            "image" => $imagePath,
            "feature_en" => json_encode($feature),
            "feature_ar" => json_encode($featureAr),
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

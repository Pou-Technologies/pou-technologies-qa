<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class AdminServiceController extends Controller
{
    public function index()
    {
        $services = Service::orderBy('category')->orderBy('sort_order')->get()->groupBy('category');
        $categories = Service::categories();

        return view('admin.services.index', compact('services', 'categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string|max:1000',
            'base_price' => 'required|numeric|min:0',
            'category' => 'required|string|max:100',
        ]);

        Service::create($request->all());

        return back()->with('success', 'Service added to catalog.');
    }

    public function update(Request $request, Service $service)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string|max:1000',
            'base_price' => 'required|numeric|min:0',
            'category' => 'required|string|max:100',
        ]);

        $service->update($request->all());

        return back()->with('success', 'Service updated.');
    }

    public function destroy(Service $service)
    {
        $service->delete();
        return back()->with('success', 'Service removed from catalog.');
    }

    public function toggleActive(Service $service)
    {
        $service->update(['is_active' => !$service->is_active]);
        return back()->with('success', 'Service ' . ($service->is_active ? 'activated' : 'deactivated') . '.');
    }
}

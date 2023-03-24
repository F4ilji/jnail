<?php

namespace App\Http\Controllers\admin;

use App\Models\Addon;
use App\Models\Service;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ServiceController extends Controller
{
    function index() {
        $services = Service::all();
        return view('admin.services.index', compact('services'));
    }
    function create() {
        $categories = Category::all();
        return view('admin.services.create', compact('categories'));
    }
    function store(Request $request) {
        $data = $request->validate([
            'title' => 'required|string',
            'price' => 'required|integer',
            'category_id' => 'required',
        ]);
        Service::create($data);
        return redirect()->route('admin.service.index');
    }
    function destroy(Service $service) {
        $service->delete();
        return redirect()->route('admin.service.index');
    }
    function edit(Service $service) {
        $service = Service::find($service->id);
        $categories = Category::all();
        return view('admin.services.edit', compact('service', 'categories'));
    }
    function update(Request $request, Service $service) {
        $data = $request->validate([
            'title' => 'required|string',
            'price' => 'required|integer',
            'category_id' => 'required',
        ]);
        $service->update($data);
        return redirect()->route('admin.service.index');
    }
    function show(Service $service) {
        $service = Service::find($service->id);
        return view('admin.services.show', compact('service'));
    }
}

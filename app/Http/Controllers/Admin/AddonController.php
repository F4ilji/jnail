<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Addon;
use Illuminate\Http\Request;

class AddonController extends Controller
{
    function index() {
        $addons = Addon::all();
        return view('admin.addons.index', compact('addons'));
    }
    function create() {
        return view('admin.addons.create');
    }
    function store(Request $request) {
        $data = $request->validate([
            'title' => 'required|string',
            'price' => 'required|integer',
        ]);
        Addon::create($data);
        return redirect()->route('admin.addon.index');
    }
    function edit(Addon $addon) {
        return view('admin.addons.edit', compact('addon'));
    }
    function update(Request $request, Addon $addon) {
        $data = $request->validate([
            'title' => 'required|string',
            'price' => 'required|integer',
        ]);
        $addon->update($data);
        return redirect()->route('admin.addon.index');
    }
    function delete(Addon $addon) {
        $addon->delete();
        return redirect()->route('admin.addon.index');
    }
    function show(Addon $addon) {
        $addon = Addon::find($addon->id);
        return view('admin.addons.show', compact('addon'));
    }
}

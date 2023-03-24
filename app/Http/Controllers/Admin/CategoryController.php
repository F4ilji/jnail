<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    function index() {
        $categories = Category::all();
        return view('admin.categories.index', compact('categories'));
    }
    function create() {
        return view('admin.categories.create');
    }
    function store(Request $request) {
        $data = $request->validate([
            'title' => 'required|string',
        ]);
        Category::create($data);
        return redirect()->route('admin.category.index');
    }
    function edit(Category $category) {
        return view('admin.categories.edit', compact('category'));
    }
    function update(Request $request, Category $category) {
        $data = $request->validate([
            'title' => 'required|string',
        ]);
        $category->update($data);
        return redirect()->route('admin.category.index');
    }
    function show(Category $category) {
        return view('admin.categories.show', compact('category'));
    }
    function delete(Category $category) {
        $category->delete();
        return redirect()->route('admin.category.index');
    }
}

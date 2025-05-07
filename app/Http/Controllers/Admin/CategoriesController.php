<?php 

namespace App\Http\Controllers\Admin;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoriesController extends Controller {
    public function showCategoriesPage(){
        $categories = Category::all();
        return view('admin.categories', compact('categories'));
    }

    public function addCategory(Request $request) {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        Category::create($validated);

        return redirect()->route('categoriesPage')->with('success', 'Category has been added successfully!');
    }

    public function editCategory(Request $request) {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        Category::update($validated);

        return redirect()->route('categoriesPage')->with('success', 'Category has been updated successfully!');

    }
}
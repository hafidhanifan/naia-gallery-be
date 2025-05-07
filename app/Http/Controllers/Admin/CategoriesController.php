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
}
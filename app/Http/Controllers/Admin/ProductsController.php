<?php 

namespace App\Http\Controllers\Admin;
use App\Models\Dress;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;


class ProductsController extends Controller {
    public function showDressPage() {
        $dresses = Dress::all();
        $categories = Category::all();
        return view('admin.products', compact('dresses', 'categories'));
    }

    public function addDress(Request $request) {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id', // validasi foreign key
            'description' => 'nullable|string',
            'price_per_day' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if ($request->hasFile('image')){
            $validated['image'] = $request->file('image')->store('dresses', 'public');
        }

        Dress::create($validated);

        return redirect()->route('productsPage')->with('success', 'The product has been added successfully!');
    }

}
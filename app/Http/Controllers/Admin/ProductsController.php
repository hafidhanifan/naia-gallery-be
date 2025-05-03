<?php 

namespace App\Http\Controllers\Admin;
use App\Models\Dress;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class ProductsController extends Controller {
    public function showProductsPage() {
        $dresses = Dress::all();
        return view('admin.products', compact('dresses'));
    }

    public function addProduct(Request $request) {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'category' => 'nullable|string',
            'description' => 'nullable|string',
            'price_per_day' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if ($request->hasFile('image')){
            $validated['image'] = $request->file('image')->store('dresses', 'public');
        }

        Dress::create($validated);

        return redirect()->route('admin.products')->with('success', 'Dress berhasil ditambahkan');
    }
}
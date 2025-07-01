<?php 

namespace App\Http\Controllers\Admin;
use App\Models\Dress;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\DressImage;


class ProductsController extends Controller {
    public function showDressPage() {
        $dresses = Dress::with('category')->latest()->get();
        $categories = Category::all();
        return view('admin.products', compact('dresses', 'categories'));
    }

    public function addDress(Request $request) {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'description' => 'nullable|string',
            'price_per_day' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
            'images.*' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'main_image_index' => 'nullable|integer|min:0',
        ]);

        $mainImageIndex = $request->input('main_image_index', 0);

        $dress = Dress::create([
            'name' => $validated['name'],
            'category_id' => $validated['category_id'],
            'description' => $validated['description'] ?? null,
            'price_per_day' => $validated['price_per_day'],
            'stock' => $validated['stock'],
            'image' => null, // nanti update setelah tahu gambar utama
        ]);

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $index => $image) {
                $path = $image->store('dresses', 'public');

                if ($index == $mainImageIndex) {
                    $dress->update(['image' => $path]); // gambar utama
                }

                DressImage::create([
                    'dress_id' => $dress->id,
                    'image_path' => $path,
                ]);
            }
        }

        return redirect()->route('DressPage')->with('success', 'The product has been added successfully!');
    }

    public function editDress(Request $request, $id) {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'description' => 'nullable|string',
            'price_per_day' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $dress = Dress::findOrFail($id);

        if ($request->hasFile('image')) {
                // Hapus image lama jika ada (opsional)
            if ($dress->image && \Storage::disk('public')->exists($dress->image)) {
                \Storage::disk('public')->delete($dress->image);
            }
                $validated['image'] = $request->file('image')->store('dresses', 'public');
        }
        
            $dress->update($validated);

        return redirect()->route('productsPage')->with('success', 'The product has been updated successfully!');
    }


}
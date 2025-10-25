<?php
namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $filters = [
            'search' => $request->query('search'),
            'category' => $request->query('category'),
        ];

        $query = Product::query()->filter($filters);

        $products = $query->orderBy('created_at', 'desc')->paginate(12)->withQueryString();

        // get categories for filter dropdown
        $categories = Product::select('category')->distinct()->pluck('category');

        return view('products.index', compact('products', 'categories'));
    }

    public function create()
    {
        $categories = ['Electronics', 'Clothing', 'Books', 'Home', 'Sports', 'Beauty', 'Toys'];
        return view('products.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'category' => 'required|string|max:100',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048|dimensions:max_width=2000,max_height=2000',
            'stock_quantity' => 'required|integer|min:0',
            'is_active' => 'nullable|boolean',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = Str::uuid() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('products', $filename, 'public');
            $data['image'] = $filename;
        }

        $data['is_active'] = $request->has('is_active') ? (bool) $request->is_active : true;

        Product::create($data);

        return redirect()->route('products.index')->with('success', 'Product created successfully.');
    }

    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }

    public function edit(Product $product)
    {
        $categories = ['Electronics', 'Clothing', 'Books', 'Home', 'Sports', 'Beauty', 'Toys'];
        return view('products.edit', compact('product', 'categories'));
    }

    public function update(Request $request, Product $product)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'category' => 'required|string|max:100',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048|dimensions:max_width=2000,max_height=2000',
            'stock_quantity' => 'required|integer|min:0',
            'is_active' => 'nullable|boolean',
        ]);

        if ($request->hasFile('image')) {
            // delete old
            if ($product->image) {
                Storage::disk('public')->delete('products/' . $product->image);
            }
            $image = $request->file('image');
            $filename = Str::uuid() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('products', $filename, 'public');
            $data['image'] = $filename;
        }

        $data['is_active'] = $request->has('is_active') ? (bool) $request->is_active : $product->is_active;

        $product->update($data);

        return redirect()->route('products.show', $product)->with('success', 'Product updated successfully.');
    }

    public function destroy(Product $product)
    {
        if ($product->image) {
            Storage::disk('public')->delete('products/' . $product->image);
        }

        $product->delete();

        return redirect()->route('products.index')->with('success', 'Product deleted.');
    }
}

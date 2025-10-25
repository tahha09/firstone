@extends('layouts.app')

@section('content')
    <h2 class="text-2xl font-bold mb-6">Edit Product</h2>

    <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data"
        class="bg-white p-6 rounded shadow">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label class="block text-gray-700">Name</label>
            <input type="text" name="name" value="{{ $product->name }}"
                class="border border-gray-300 rounded px-3 py-2 w-full" required>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700">Description</label>
            <textarea name="description" class="border border-gray-300 rounded px-3 py-2 w-full">{{ $product->description }}</textarea>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700">Price</label>
            <input type="number" step="0.01" name="price" value="{{ $product->price }}"
                class="border border-gray-300 rounded px-3 py-2 w-full" required>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700">Category</label>
            <select name="category" class="border border-gray-300 rounded px-3 py-2 w-full" required>
                <option value="Electronics" {{ $product->category == 'Electronics' ? 'selected' : '' }}>Electronics</option>
                <option value="Clothing" {{ $product->category == 'Clothing' ? 'selected' : '' }}>Clothing</option>
                <option value="Books" {{ $product->category == 'Books' ? 'selected' : '' }}>Books</option>
                <option value="Accessories" {{ $product->category == 'Accessories' ? 'selected' : '' }}>Accessories</option>
            </select>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700">Stock Quantity</label>
            <input type="number" name="stock_quantity" value="{{ $product->stock_quantity }}"
                class="border border-gray-300 rounded px-3 py-2 w-full">
        </div>

        <div class="mb-4">
            <label class="block text-gray-700">Current Image</label>
            @if ($product->image)
                <img src="{{ asset('storage/products/' . $product->image) }}" alt="{{ $product->name }}"
                    class="h-40 rounded mb-2">
            @else
                <p>No image uploaded</p>
            @endif
            <input type="file" name="image" accept="image/*" class="border border-gray-300 rounded px-3 py-2 w-full">
        </div>

        <button type="submit" class="bg-yellow-600 text-white px-4 py-2 rounded hover:bg-yellow-700">Update
            Product</button>
    </form>
@endsection

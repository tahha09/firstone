@extends('layouts.app')

@section('content')
<h2 class="text-2xl font-bold mb-6">Add New Product</h2>

<form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data" class="bg-white p-6 rounded shadow">
    @csrf

    <div class="mb-4">
        <label class="block text-gray-700">Name</label>
        <input type="text" name="name" class="border border-gray-300 rounded px-3 py-2 w-full" required>
    </div>

    <div class="mb-4">
        <label class="block text-gray-700">Description</label>
        <textarea name="description" class="border border-gray-300 rounded px-3 py-2 w-full"></textarea>
    </div>

    <div class="mb-4">
        <label class="block text-gray-700">Price</label>
        <input type="number" step="0.01" name="price" class="border border-gray-300 rounded px-3 py-2 w-full" required>
    </div>

    <div class="mb-4">
        <label class="block text-gray-700">Category</label>
        <select name="category" class="border border-gray-300 rounded px-3 py-2 w-full" required>
            <option value="Electronics">Electronics</option>
            <option value="Clothing">Clothing</option>
            <option value="Books">Books</option>
            <option value="Accessories">Accessories</option>
        </select>
    </div>

    <div class="mb-4">
        <label class="block text-gray-700">Stock Quantity</label>
        <input type="number" name="stock_quantity" class="border border-gray-300 rounded px-3 py-2 w-full" value="0">
    </div>

    <div class="mb-4">
        <label class="block text-gray-700">Image</label>
        <input type="file" name="image" accept="image/*" class="border border-gray-300 rounded px-3 py-2 w-full">
    </div>

    <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Save Product</button>
</form>
@endsection

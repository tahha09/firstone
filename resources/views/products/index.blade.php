@extends('layouts.app')

@section('content')
<div class="flex justify-between items-center mb-6">
    <h2 class="text-2xl font-bold">All Products</h2>
    <a href="{{ route('products.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Add Product</a>
</div>

<form method="GET" action="{{ route('products.index') }}" class="mb-4">
    <input type="text" name="search" placeholder="Search products..." value="{{ request('search') }}"
           class="border border-gray-300 rounded px-3 py-2 w-1/3 focus:outline-none focus:ring-2 focus:ring-blue-400">
    <button type="submit" class="ml-2 bg-gray-700 text-white px-4 py-2 rounded hover:bg-gray-800">Search</button>
</form>

@if($products->count())
<div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-6">
    @foreach($products as $product)
        <div class="bg-white shadow rounded p-4 hover:shadow-lg transition">
            @if($product->image)
                <img src="{{ asset('storage/products/' . $product->image) }}" alt="{{ $product->name }}" class="h-40 w-full object-cover rounded mb-3">
            @else
                <div class="h-40 bg-gray-200 rounded mb-3 flex items-center justify-center text-gray-500">No Image</div>
            @endif
            <h3 class="font-bold text-lg">{{ $product->name }}</h3>
            <p class="text-gray-600">{{ $product->category }}</p>
            <p class="text-blue-700 font-semibold mt-1">${{ $product->price }}</p>
            <div class="mt-3 flex justify-between">
                <a href="{{ route('products.show', $product->id) }}" class="text-blue-600 hover:underline">View</a>
                <a href="{{ route('products.edit', $product->id) }}" class="text-yellow-600 hover:underline">Edit</a>
                <form action="{{ route('products.destroy', $product->id) }}" method="POST" onsubmit="return confirm('Are you sure?')" class="inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-red-600 hover:underline">Delete</button>
                </form>
            </div>
        </div>
    @endforeach
</div>

<div class="mt-6">
    {{ $products->links() }}
</div>

@else
<p class="text-gray-500">No products found.</p>
@endif
@endsection

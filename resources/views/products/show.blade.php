@extends('layouts.app')

@section('content')
    <div class="bg-white shadow rounded p-6">
        <div class="flex flex-col md:flex-row gap-6">
            @if ($product->image)
                <img src="{{ asset('storage/products/' . $product->image) }}" alt="{{ $product->name }}"
                    class="w-full md:w-1/3 rounded">
            @else
                <div class="w-full md:w-1/3 bg-gray-200 flex items-center justify-center text-gray-500 rounded">No Image
                </div>
            @endif

            <div class="flex-1">
                <h2 class="text-3xl font-bold mb-2">{{ $product->name }}</h2>
                <p class="text-gray-600 mb-2">{{ $product->category }}</p>
                <p class="text-blue-700 font-semibold mb-4">${{ $product->price }}</p>
                <p class="text-gray-700 mb-4">{{ $product->description }}</p>
                <p class="text-gray-600 mb-4">Stock: {{ $product->stock_quantity }}</p>
                <a href="{{ route('products.edit', $product->id) }}"
                    class="bg-yellow-600 text-white px-4 py-2 rounded hover:bg-yellow-700">Edit</a>
                <a href="{{ route('products.index') }}"
                    class="ml-2 bg-gray-600 text-white px-4 py-2 rounded hover:bg-gray-700">Back</a>
            </div>
        </div>
    </div>
@endsection

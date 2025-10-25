@extends('layout.App')

@section('content')
    <h1 class="text-3xl font-bold text-center mb-8">Student List</h1>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
        @foreach ($Students as $Student)
            <a href="{{ url('/app/students/' . $Student['id']) }}"
                class="block max-w-sm bg-white rounded-xl shadow-md overflow-hidden hover:shadow-2xl transition-shadow duration-300">
                <div class="relative">
                    <img src="https://images.unsplash.com/photo-1503264116251-35a269479413?auto=format&fit=crop&w=1200&q=60"
                        alt="student" class="w-full h-56 object-cover">
                </div>
                <div class="p-4">
                    <h5 class="text-lg font-semibold text-gray-800">{{ $Student['name'] }}</h5>
                    <p class="text-sm text-gray-600 mt-2"><strong>Phone:</strong> {{ $Student['phone'] }}</p>
                    <p class="text-sm text-gray-600"><strong>Age:</strong> {{ $Student['age'] }}</p>
                    <p class="text-sm text-gray-600"><strong>Address:</strong> {{ $Student['address'] }}</p>
                    <p class="text-sm text-gray-600"><strong>University:</strong> {{ $Student['university'] }}</p>
                </div>
            </a>
        @endforeach
    </div>
@endsection

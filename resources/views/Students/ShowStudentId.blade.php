@extends('layout.App')

@section('content')
    <div class="max-w-lg mx-auto bg-white rounded-lg shadow-lg p-6 mt-10">
        <h1 class="text-3xl font-bold text-center mb-6">{{ $student['name'] }}</h1>

        <div class="space-y-3">
            <p class="text-lg"><strong>id:</strong> {{ $student['id'] }}</p>
            <p class="text-lg"><strong>Phone:</strong> {{ $student['phone'] }}</p>
            <p class="text-lg"><strong>Age:</strong> {{ $student['age'] }}</p>
            <p class="text-lg"><strong>Address:</strong> {{ $student['address'] }}</p>
            <p class="text-lg"><strong>University:</strong> {{ $student['university'] }}</p>
        </div>

        <div class="text-center mt-6">
            <a href="{{ url('/app/students') }}"
                class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-lg">
                ← Back to Students
            </a>
        </div>
    </div>
@endsection

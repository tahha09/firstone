<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products Management</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 text-gray-900">
    <nav class="bg-blue-600 text-white p-4 shadow">
        <div class="container mx-auto flex justify-between">
            <h1 class="text-xl font-bold">Product Management</h1>
            <a href="{{ route('products.index') }}" class="hover:underline">All Products</a>
        </div>
    </nav>

    <main class="container mx-auto mt-8 px-4">
        @yield('content')
    </main>
</body>
</html>

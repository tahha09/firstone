<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laravel App</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="p-5 bg-gray-100">

    <h1 class="text-center text-2xl font-bold mb-6">Main App Page</h1>

    <main>
        @yield('content')
    </main>

</body>
</html>

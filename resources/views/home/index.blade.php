<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ALDRIAN</title>

    @vite(['resources/css/home/index.css', 'resources/js/home/index.js'])
</head>
<body>
    <h1>Welcome to my portfolio</h1>
    @include('layouts.navigation')

    @yield('content')

    @vite('resources/js/app.js')
</body>
</html>
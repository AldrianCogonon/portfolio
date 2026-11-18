<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>ALDRIAN</title>
        @vite('resources/css/layouts/app.css')
    </head>
<body>
    @include('layouts.navigation')
    @yield('content')
    @vite('resources/js/app.js')
</body>
</html>
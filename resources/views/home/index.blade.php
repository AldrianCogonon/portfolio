<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ALDRIAN</title>

    @vite(['resources/css/home/index.css', 'resources/js/home/index.js'])
</head>
<body>
    @include('partials.navbar')
    @extends('layouts.app')
    @section('content')
    <main>
        <h1>Welcome to my portfolio</h1>
        <p>This is the home page of my portfolio website.</p>
    </main>
    @endsection
</body>
</html>
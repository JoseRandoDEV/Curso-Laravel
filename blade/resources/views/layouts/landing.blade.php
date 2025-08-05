<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    @yield('styles')
    <title>
        @yield('title')
    </title>
</head>
<body>
    @include('layouts._partials.menu')
    <main>
    @yield('content')
    </main>
    @yield('scripts')
</body>
</html>
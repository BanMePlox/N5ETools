<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'My Laravel Site')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/condition.js'])


</head>
<body>
    {{-- Header --}}
    @include('partials.header')

    <main>
        @yield('content')
    </main>

    @yield('scripts')
</body>
</html>

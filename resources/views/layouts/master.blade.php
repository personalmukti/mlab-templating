<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.breakdown.meta')

    <title>@yield('title') | {{ config('app.name')}}</title>

    @include('layouts.breakdown.css')
</head>
<body>
    @include('elements.important.navbar')

    @yield('main')

    @include('layouts.breakdown.js')
</body>
</html>

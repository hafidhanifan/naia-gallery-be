<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Panel - Sewa Dress')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    @include('admin.partials.header')
    @include('admin.partials.sidebar')

    <div>
        @yield('content')
    </div>

    @include('admim.partials.footer')
</body>

</html>
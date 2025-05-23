<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>@yield('title', 'Admin Panel - Sewa Dress')</title>
</head>

<body>
    @include('admin.partials.header')
    <div class="flex overflow-hidden bg-white pt-16">
        @include('admin.partials.sidebar')
        <div id="main-content" class="h-full w-full bg-gray-50 relative overflow-y-auto lg:ml-64">
            <main>
                @yield('content')
            </main>
        </div>
    </div>
    {{-- @include('admim.partials.footer') --}}
    @include('admin.partials.scripts')
</body>

</html>
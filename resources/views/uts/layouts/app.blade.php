<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Halaman UTS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    {{-- header --}}
    @include('uts.layouts.header')

    {{-- content --}}
    <main>
        @yield('content')
    </main>

    {{-- footer --}}
    @include('uts.layouts.footer')
</body>
</html>

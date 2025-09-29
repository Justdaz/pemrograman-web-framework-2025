<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>@yield('title', 'My App')</title>
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

  <div class="navbar">
    <a href="{{ url('./dashboard') }}">Home</a>
    <a href="{{ url('/demo-template') }}">Demo</a>
    <a href="{{ url('./about') }}">About</a>
  </div>

  <div class="container">
    @yield('content')
  </div>

</body>
</html>

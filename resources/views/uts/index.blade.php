@extends('uts.layouts.app')

<!DOCTYPE html>
<html>
<head>
    <title>Tes halaman uts raffi deas alvaro</title>
</head>
<body>
    @section('content')
    <h1>Soal UTS Raffi Deas Alvaro</h1>

    <ul>
        <li><a href="{{ route('uts.web') }}">Menu uts pemrograman web</a></li>
        <li><a href="{{ route('uts.database') }}">Menu uts database</a></li>
    </ul>
    @endsection
</body>
</html>

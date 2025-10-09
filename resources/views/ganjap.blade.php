<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <title>Ganjil Genap</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-4">
    <div class="container">

        @if(isset($message) && isset($type))
            <x-alert type="{{ $type }}">
                {{ $message }}
            </x-alert>
        @endif

        <hr>

    </div>
</body>
</html>

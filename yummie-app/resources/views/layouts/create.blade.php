<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel CRUD</title>
    <link rel="stylesheet" href="{{ asset('css/interactive.css') }}">
    <script src="{{ asset('js/menu.js') }}" defer></script>
</head>
<body>

    @yield('content')

</body>
</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>USERSEM || {{ $title }}</title>
    <script src="https://unpkg.com/feather-icons"></script>
</head>

<body>
    @include('components.navbar')
    @include('components.sidebar')
    @yield('content')
    @include('components.footer')

    <script>
        feather.replace();
    </script>
</body>

</html>

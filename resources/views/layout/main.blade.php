<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>USERSEM || {{ $title }}</title>
    <script src="https://unpkg.com/feather-icons"></script>
</head>

<body class="bg-gray-100 flex flex-col min-h-screen">
    {{-- content --}}
    <div class="flex flex-grow">
        @include('components.sidebar')
        @yield('content')
    </div>
    @include('components.footer')

    <script>
        feather.replace();
    </script>
</body>

</html>

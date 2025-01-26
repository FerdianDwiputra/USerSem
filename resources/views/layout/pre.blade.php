<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>USERSEM || app</title>
    <script src="https://unpkg.com/feather-icons"></script>
</head>

<body class="bg-gray-100 font-sans">
    <div class="flex h-screen">
        <!-- Bagian Kiri -->
        <div class="hidden md:block w-1/2 bg-cover bg-center"
            style="background-image: url('{{ asset('image/latar-kiri.png') }}');">
        </div>

        <!-- Bagian Kanan -->
        <div class="flex flex-col justify-center items-center w-full md:w-1/2 px-8">
            @yield('content')
        </div>
    </div>
    <script>
        feather.replace();
    </script>
</body>

</html>

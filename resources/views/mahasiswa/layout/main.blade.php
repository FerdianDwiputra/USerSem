<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>USERSEM || {{ $title }}</title>

    <!-- Feather Icons -->
    <script src="https://unpkg.com/feather-icons"></script>

    <!-- jQuery & PJAX -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.pjax/2.0.1/jquery.pjax.min.js"></script>

    <style>
        /* Animasi loading */
        #pjax-loading {
            position: fixed;
            inset: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            background: rgba(255, 255, 255, 0.7);
            z-index: 9999;
            transition: opacity 0.3s;
        }

        .hidden {
            opacity: 0;
            pointer-events: none;
        }
    </style>
</head>

<body class="bg-gray-100">
    <!-- Loading Indicator -->
    <div id="pjax-loading" class="hidden">
        <div class="w-12 h-12 border-4 border-blue-500 border-t-transparent rounded-full animate-spin"></div>
    </div>

    <div class="min-h-screen flex">
        {{-- Sidebar --}}
        @include('components.sidebar')

        {{-- Content Area dengan PJAX --}}
        <div id="content" class="flex-1 p-6">
            @yield('content')
        </div>
    </div>

    @include('components.footer')

    <script>
        $(document).ready(function() {
            // Terapkan PJAX ke semua link dalam sidebar
            $(document).pjax('a[data-pjax="true"]', '#content', {
                timeout: 2000
            });

            // Tampilkan loading indicator saat halaman berpindah
            $(document).on('pjax:start', function() {
                $('#pjax-loading').removeClass('hidden');
            });

            // Sembunyikan loading indicator & update Feather Icons setelah PJAX selesai
            $(document).on('pjax:end', function() {
                $('#pjax-loading').addClass('hidden');
                feather.replace();
            });

            // Inisialisasi Feather Icons
            feather.replace();
        });
    </script>
</body>

</html>

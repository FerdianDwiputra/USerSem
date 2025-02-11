@extends('layout.pre')

@section('content')
    <div class="mb-6 text-center">
        <img src="{{ asset('image/logo_usersem.png') }}" alt="Logo" class="h-[166px] mx-auto">
        <h1 class="text-lg font-semibold text-gray-600 mt-2">Ujian Sertifikasi & Seminar / Workshop</h1>
    </div>

    <form class="w-full max-w-sm" method="POST" action="/forgot-password">
        @csrf
        <h1 class="text-2xl font-bold mb-4">Lupa Kata Sandi</h1>
        <div class="mb-4">
            <label for="credential" class="block text-gray-700 text-sm font-bold mb-2">NIM/NIDN/Username</label>
            <input type="text" id="credential" name="credential" required
                class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring focus:ring-blue-500 bg-gray-200">
        </div>
        <div class="text-right mb-4">
            <a href="/" class="text-sm text-gray-500 hover:underline">Login</a>
        </div>
        <button type="submit" class="w-full py-2 px-4 bg-gray-600 text-white font-bold rounded-lg hover:bg-gray-700">
            Masuk
        </button>
    </form>
@endsection

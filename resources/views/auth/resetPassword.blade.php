@extends('layout.pre')

@section('content')
    <div class="mb-6 text-center">
        <img src="{{ asset('image/logo_usersem.png') }}" alt="Logo" class="h-[166px] mx-auto">
        <h1 class="text-lg font-semibold text-gray-600 mt-2">Ujian Sertifikasi & Seminar / Workshop</h1>
    </div>

    <form class="w-full max-w-sm" method="POST" action="/reset-password">
        @csrf
        <h1 class="text-2xl font-bold mb-4">Ganti Password</h1>
        <div class="mb-4">
            <label for="newpassword" class="block text-gray-700 text-sm font-bold mb-2">Password Baru</label>
            <input type="text" id="newpassword" name="newpassword"
                class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring focus:ring-blue-500 bg-gray-200">
        </div>
        <div class="mb-4">
            <label for="repeatpassword" class="block text-gray-700 text-sm font-bold mb-2">Ulang Password</label>
            <input type="text" id="repeatpassword" name="repeatpassword"
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

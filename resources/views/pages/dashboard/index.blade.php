@extends('layout.main')

@section('content')
    <main class="flex-1 p-6">
        <h1 class="text-lg font-semibold">Selamat Datang User</h1>
        <p class="text-gray-600">di Aplikasi Ujian Sertifikasi & Seminar / WorkShop</p>

        <!-- Cards -->
        <div class="grid grid-cols-3 gap-4 mt-6">
            <div class="bg-green-600 text-white p-4 rounded-lg shadow-md">
                <div class="flex items-center space-x-2">
                    <i data-feather="file-text"></i>
                    <span class="text-2xl font-bold">{{ $data['ujian'] }}</span>
                    <span>Ujian Sertifikasi</span>
                </div>
                <button class="mt-2 px-4 py-1 bg-white text-green-600 rounded-md hover:bg-green-200 transition">
                    Selengkapnya
                </button>
            </div>

            <div class="bg-green-500 text-white p-4 rounded-lg shadow-md">
                <div class="flex items-center space-x-2">
                    <i data-feather="book-open"></i>
                    <span class="text-2xl font-bold">{{ $data['seminar'] }}</span>
                    <span>Seminar</span>
                </div>
                <button class="mt-2 px-4 py-1 bg-white text-green-600 rounded-md hover:bg-green-200 transition">
                    Selengkapnya
                </button>
            </div>

            <div class="bg-green-700 text-white p-4 rounded-lg shadow-md">
                <div class="flex items-center space-x-2">
                    <i data-feather="briefcase"></i>
                    <span class="text-2xl font-bold">{{ $data['workshop'] }}</span>
                    <span>Workshop</span>
                </div>
                <button class="mt-2 px-4 py-1 bg-white text-green-600 rounded-md hover:bg-green-200 transition">
                    Selengkapnya
                </button>
            </div>
        </div>

        <!-- Chart & List -->
        <div class="mt-6 bg-gray-200 p-6 rounded-lg">
            <div class="flex items-end space-x-2 h-32">
                <div class="w-8 bg-black" style="height: 70%;"></div>
                <div class="w-8 bg-black" style="height: 50%;"></div>
                <div class="w-8 bg-black" style="height: 30%;"></div>
            </div>
            <div class="mt-4">
                <p class="font-semibold">Daftar anda mengikuti acara:</p>
                <ul class="list-disc pl-5 text-gray-700">
                    <li>{{ $data['ujian'] }} - Ujian Sertifikasi</li>
                    <li>{{ $data['seminar'] }} - Seminar</li>
                    <li>{{ $data['workshop'] }} - Workshop</li>
                </ul>
            </div>
        </div>
    </main>
@endsection

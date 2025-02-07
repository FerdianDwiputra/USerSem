@extends('layout.main')

@section('content')
    <main class="flex-1 p-6">
        <h1 class="text-lg font-semibold">Selamat Datang User</h1>
        <p class="text-gray-600">di Aplikasi Ujian Sertifikasi & Seminar / WorkShop</p>

        <!-- Cards -->
        <div class="grid grid-cols-3 gap-4 mt-6">
            <!-- Ujian Sertifikasi -->
            <div class="rounded-lg shadow-md overflow-hidden border">
                <div class="bg-green-600 text-white p-4 flex justify-between items-center">
                    <span class="text-2xl font-bold">{{ $data['ujian'] }}</span>
                    <span class="text-lg">Ujian Sertifikasi</span>
                    <i data-feather="book" class="w-6 h-6"></i>
                </div>
                <div class="bg-white text-center p-3">
                    <button class="text-black font-medium">Selengkapnya</button>
                </div>
            </div>

            <!-- Seminar -->
            <div class="rounded-lg shadow-md overflow-hidden border">
                <div class="bg-green-600 text-white p-4 flex justify-between items-center">
                    <span class="text-2xl font-bold">{{ $data['seminar'] }}</span>
                    <span class="text-lg">Seminar</span>
                    <i data-feather="mic" class="w-6 h-6"></i>
                </div>
                <div class="bg-white text-center p-3">
                    <button class="text-black font-medium">Selengkapnya</button>
                </div>
            </div>

            <!-- Workshop -->
            <div class="rounded-lg shadow-md overflow-hidden border">
                <div class="bg-green-600 text-white p-4 flex justify-between items-center">
                    <span class="text-2xl font-bold">{{ $data['workshop'] }}</span>
                    <span class="text-lg">Workshop</span>
                    <i data-feather="briefcase" class="w-6 h-6"></i>
                </div>
                <div class="bg-white text-center p-3">
                    <button class="text-black font-medium">Selengkapnya</button>
                </div>
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

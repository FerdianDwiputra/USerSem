@extends('layout.main')

@section('content')
    <main class="w-5/6 p-8">
        <h1 class="text-2xl font-semibold mb-4">Selamat Datang User</h1>
        <p class="text-gray-600">di Aplikasi Ujian Sertifikasi & Seminar / Workshop</p>

        <!-- Cards -->
        <div class="mt-8 grid grid-cols-3 gap-4">
            <!-- Ujian Sertifikasi -->
            <div class="bg-green-200 border border-green-500 p-4 rounded-lg">
                <div class="flex items-center space-x-2">
                    <div class="text-2xl">5</div>
                    <div>Ujian Sertifikasi</div>
                </div>
                <a href="#" class="text-green-700 underline mt-2 block">Selengkapnya</a>
            </div>

            <!-- Seminar -->
            <div class="bg-green-200 border border-green-500 p-4 rounded-lg">
                <div class="flex items-center space-x-2">
                    <div class="text-2xl">3</div>
                    <div>Seminar</div>
                </div>
                <a href="#" class="text-green-700 underline mt-2 block">Selengkapnya</a>
            </div>

            <!-- Workshop -->
            <div class="bg-green-200 border border-green-500 p-4 rounded-lg">
                <div class="flex items-center space-x-2">
                    <div class="text-2xl">4</div>
                    <div>Workshop</div>
                </div>
                <a href="#" class="text-green-700 underline mt-2 block">Selengkapnya</a>
            </div>
        </div>

        <!-- Chart -->
        <div class="mt-8 bg-gray-200 p-6 rounded-lg">
            <h2 class="font-semibold mb-4">Daftar Anda Mengikuti Acara</h2>
            <ul class="list-disc pl-5 text-gray-700">
                <li>5 - Ujian Sertifikasi</li>
                <li>3 - Seminar</li>
                <li>4 - Workshop</li>
            </ul>
            <div class="mt-6">
                <div class="w-full h-32 relative">
                    <!-- Bar Chart -->
                    <div class="absolute left-0 bottom-0 w-10 h-32 bg-black"></div>
                    <div class="absolute left-12 bottom-0 w-10 h-24 bg-black"></div>
                    <div class="absolute left-24 bottom-0 w-10 h-28 bg-black"></div>
                </div>
            </div>
        </div>
    </main>
@endsection

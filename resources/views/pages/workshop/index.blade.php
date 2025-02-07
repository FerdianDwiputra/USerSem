@extends('layout.main')

@section('content')
    <div class="flex-1 p-6">
        <h1 class="text-3xl font-bold mb-6">Workshop</h1>

        <!-- Workshop Terbaru -->
        <div>
            <h2 class="text-xl font-semibold mb-4">Workshop Terbaru</h2>
            <div class="grid grid-cols-3 gap-4">
                @for ($i = 0; $i < 3; $i++)
                    <a href="{{ route('workshop.detail', ['id' => $i]) }}"
                        class="block bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition">
                        <div class="bg-green-600 text-white font-semibold px-4 py-2">
                            Ujian Front-end mobile dengan flutter
                        </div>
                        <div class="p-4">
                            <p class="text-gray-600 font-semibold">Penguji</p>
                            <div class="flex items-center mt-2">
                                <div class="w-8 h-8 bg-gray-300 rounded-full"></div>
                                <span class="ml-2 text-gray-700">Qwerty, S.Kom.</span>
                            </div>
                        </div>
                    </a>
                @endfor
            </div>
        </div>

        <!-- Workshop Sebelumnya -->
        <div class="mt-8">
            <h2 class="text-xl font-semibold mb-4">Workshop Sebelumnya</h2>
            <div class="grid grid-cols-3 gap-4">
                @for ($i = 0; $i < 3; $i++)
                    <a href="{{ route('workshop.detail', ['id' => $i]) }}"
                        class="block bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition">
                        <div class="bg-green-600 text-white font-semibold px-4 py-2">
                            Ujian Front-end mobile dengan flutter
                        </div>
                        <div class="p-4">
                            <p class="text-gray-600 font-semibold">Penguji</p>
                            <div class="flex items-center mt-2">
                                <div class="w-8 h-8 bg-gray-300 rounded-full"></div>
                                <span class="ml-2 text-gray-700">Qwerty, S.Kom.</span>
                            </div>
                        </div>
                    </a>
                @endfor
            </div>
        </div>

        <!-- Pagination -->
        <div class="mt-6 flex justify-center items-center space-x-2">
            <span class="bg-green-600 text-white px-2 py-1 rounded-full">1</span>
            <a href="#" class="text-gray-700 px-2 py-1">2</a>
            <a href="#" class="text-gray-700 px-2 py-1">3</a>
            <a href="#" class="text-gray-700 px-2 py-1">4</a>
            <span class="text-gray-700 px-2 py-1">... 10</span>
        </div>
    </div>
@endsection

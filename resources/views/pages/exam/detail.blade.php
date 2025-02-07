@extends('layout.main')

@section('content')
    <div class="flex-1 p-6">
        <a href="{{ route('exam.index') }}"
            class="bg-red-600 text-white font-semibold px-4 py-2 rounded-md inline-block mb-4">Back</a>

        <h1 class="text-3xl font-bold mb-4">Ujian Front-end mobile dengan flutter</h1>

        <div class="flex items-center mb-6">
            <div class="w-12 h-12 bg-gray-300 rounded-full"></div>
            <span class="ml-2 text-gray-700">John Doe, S.Kom.</span>
        </div>

        <p class="text-gray-600 mb-4">
            Ujian Sertifikasi Front-End Mobile dengan Flutter dirancang untuk menguji kemampuan peserta dalam
            membangun aplikasi mobile yang responsif, efisien, dan sesuai dengan standar industri menggunakan
            framework Flutter. Peserta akan diuji dalam berbagai aspek pengembangan aplikasi, termasuk desain UI/UX,
            pengelolaan state, integrasi API, serta optimasi performa aplikasi.
        </p>

        <div class="flex items-center justify-between mt-6">
            <a href="#" class="bg-green-600 text-white font-semibold px-4 py-2 rounded-md">Gabung</a>
            <span class="text-gray-700">Kuota tersisa : 9</span>
        </div>
    </div>
@endsection

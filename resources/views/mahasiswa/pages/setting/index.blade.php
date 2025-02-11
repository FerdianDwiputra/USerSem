@extends('mahasiswa.layout.main')

@section('content')
    <div class="p-8">
        <h1 class="text-4xl font-bold mb-6">Settings</h1>

        <!-- Profile Section -->
        <div class="mb-8">
            <h2 class="text-2xl font-semibold mb-4">Profile</h2>
            <form action="{{ route('profile.update') }}" method="POST">
                @csrf
                <div class="space-y-4">
                    <div class="grid grid-cols-3 items-center">
                        <label class="text-lg font-medium">Name</label>
                        <input type="text" name="name" class="col-span-2 bg-gray-200 rounded-md p-2 w-full"
                            value="{{ auth()->user()->name }}" disabled>
                    </div>
                    <div class="grid grid-cols-3 items-center">
                        <label class="text-lg font-medium">Email</label>
                        <input type="email" name="email" class="col-span-2 bg-gray-200 rounded-md p-2 w-full"
                            value="{{ auth()->user()->email }}" disabled>
                    </div>
                    <div class="flex justify-end">
                        <button type="submit" class="bg-gray-600 text-white px-4 py-2 rounded-md">Submit</button>
                    </div>
                </div>
            </form>
        </div>

        <!-- Change Password Section -->
        <div>
            <h2 class="text-2xl font-semibold mb-4">Change Password</h2>
            <form action="{{ route('password.update') }}" method="POST">
                @csrf
                <div class="space-y-4">
                    <div class="grid grid-cols-3 items-center">
                        <label class="text-lg font-medium">Password lama</label>
                        <input type="password" name="old_password" class="col-span-2 bg-gray-200 rounded-md p-2 w-full">
                    </div>
                    <div class="grid grid-cols-3 items-center">
                        <label class="text-lg font-medium">Password baru</label>
                        <input type="password" name="new_password" class="col-span-2 bg-gray-200 rounded-md p-2 w-full">
                    </div>
                    <div class="grid grid-cols-3 items-center">
                        <label class="text-lg font-medium">Ulang password baru</label>
                        <input type="password" name="new_password_confirmation"
                            class="col-span-2 bg-gray-200 rounded-md p-2 w-full">
                    </div>
                    <div class="flex justify-end">
                        <button type="submit" class="bg-gray-600 text-white px-4 py-2 rounded-md">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@extends('mahasiswa.layout.main')

@section('content')
    <div class="p-6">
        <h1 class="text-3xl font-semibold mb-6">Settings</h1>

        {{-- Profile Section --}}
        <div class="mb-8">
            <h2 class="text-xl font-semibold mb-4">Profile</h2>
            <form {{-- action="{{ route('profile.update') }}" method="POST" --}}>
                @csrf
                <div class="space-y-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Name</label>
                        <input type="text" name="name"
                            class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-indigo-200">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Email</label>
                        <input type="email" name="email"
                            class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-indigo-200">
                    </div>
                    <button type="submit" class="px-4 py-2 bg-gray-300 text-gray-700 rounded-md">Submit</button>
                </div>
            </form>
        </div>

        {{-- Change Password Section --}}
        <div>
            <h2 class="text-xl font-semibold mb-4">Change Password</h2>
            <form {{-- action="{{ route('password.update') }}" method="POST" --}}>
                @csrf
                <div class="space-y-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Password lama</label>
                        <input type="password" name="current_password"
                            class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-indigo-200">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Password baru</label>
                        <input type="password" name="new_password"
                            class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-indigo-200">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Ulang password baru</label>
                        <input type="password" name="new_password_confirmation"
                            class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-indigo-200">
                    </div>
                    <button type="submit" class="px-4 py-2 bg-gray-300 text-gray-700 rounded-md">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection

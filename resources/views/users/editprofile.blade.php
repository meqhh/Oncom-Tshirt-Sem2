@extends('layout.main')

@include('partial.navbar')
<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Edit Profile</h1>
    <div class="bg-white p-4 rounded-lg shadow-md">
        @if ($errors->any())
            <div class="bg-red-500 text-white p-2 rounded mb-4">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('update.profile') }}" enctype="multipart/form-data">
            @csrf
            <div class="bg-cover bg-center bg-black h-56 p-4" style="background-image: url('{{ $user->profile_photo_path ? asset('storage/' . $user->profile_photo_path) : 'https://via.placeholder.com/150' }}')">
                <div class="flex justify-end">
                    <input type="file" name="profile_photo" id="profile_photo" class="hidden" onchange="this.form.submit()">
                    <label for="profile_photo" class="bg-white text-gray-700 font-bold py-2 px-4 rounded-full opacity-75 hover:opacity-100 cursor-pointer">Edit</label>
                </div>
            </div>
            <div class="mb-4">
                <label for="name" class="block text-gray-700">Name</label>
                <input type="text" name="name" id="name" value="{{ old('name', $user->name) }}" class="w-full px-3 py-2 border rounded">
            </div>
            <div class="mb-4">
                <label for="date_of_birth" class="block text-gray-700">Date Of Birth</label>
                <input type="date" name="date_of_birth" id="date_of_birth" value="{{ old('date_of_birth', $user->date_of_birth) }}" class="w-full px-3 py-2 border rounded">
            </div>
            <div class="mb-4">
                <label for="address" class="block text-gray-700">Address</label>
                <input type="teks" name="address" id="address" value="{{ old('address', $user->address) }}" class="w-full px-3 py-2 border rounded">
            </div>
            <div class="flex justify-end">
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Edit</button>
            </div>
        </form>
    </div>
</div>
@extends('layout.main')

@include('partial.admin2')
<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Profile</h1>
    <div class="bg-white p-4 rounded-lg shadow-md">
        @if (session('success'))
            <div class="bg-green-500 text-white p-2 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif
        <div class="container mx-auto my-10 p-5 bg-white shadow-lg rounded-lg">
            <h2 class="text-2xl font-bold mb-5">My Profil</h2>
            <table class="min-w-full bg-white">
                <tbody>
                    <div class="flex items-center">
                        <img class="w-24 h-24 rounded-full mx-auto -mt-16 border-4 border-white" src="{{ $user->profile_photo_path ? asset('storage/' . $user->profile_photo_path) : 'https://via.placeholder.com/150' }}" alt="Profile Picture">
                    </div>
                    <tr>
                        <td class="py-2 px-4 border-b border-gray-200">Name</td>
                        <td class="py-2 px-4 border-b border-gray-200">{{ $user->name }}</td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4 border-b border-gray-200">Email</td>
                        <td class="py-2 px-4 border-b border-gray-200">{{ $user->email }}</td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4 border-b border-gray-200">Date of Birth</td>
                        <td class="py-2 px-4 border-b border-gray-200">{{ $user->date_of_birth }}</td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4 border-b border-gray-200">Address</td>
                        <td class="py-2 px-4 border-b border-gray-200">{{ $user->address }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="mt-4">
    <a href="{{ route('editprofil') }}"><button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Edit</button></a>
</div></div>
@include('partial.footer')
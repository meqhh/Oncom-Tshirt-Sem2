@extends('layout.main')
@include('partial.navbar')

<div class="w-full flex flex-row">
    <div class="w-1/4">
        @include('components.adminpanel')
    </div>
    <div class="w-3/4 flex content-center flex-col items-center py-20">
        <div class="mb-4 w-3/4">
            <h1 class="font-bold text-white text-2xl">
                List User
            </h1>
        </div>
        @csrf
        <table class="w-3/4">
            <thead class="bg-white border-b-2 border-gray-300">
                <tr lass="w-6">
                    <th class="px-6 py-2">No</th>
                    <th class="px-6 py-2">Nama User</th>
                    <th class="px-6 py-2">Alamat User</th>
                    <th class="px-6 py-2">Tanggal Lahir</th>
                    <th class="px-6 py-2">Email</th>
                    <th class="px-6 py-2">Password</th>
                    <th class="px-6 py-2">Aksi</th>
                </tr>
            </thead>
            <tbody class="bg-white">
            @foreach ($users as $show )
                <tr class="bg-gray-100">
                    <td class="px-4 py-2 text-center">{{ $show->user_id }}</td>
                    <td class="px-10 py-2 text-center">{{ Str::limit($show->name, 12) }}</td>
                    <td class="px-4 py-2 text-center">{{ $show->address }}</td>
                    <td class="px-4 py-2 text-center">{{ $show->date_of_birth }}</td>
                    <td class="px-4 py-2 text-center">{{ $show->email }}</td>
                    <td class="px-4 py-2 text-center">{{ Str::limit($show->password, 50) }}</td>
                    <td class="px-4 py-2 text-center"> 
                        <form action="{{ route('users.destroy', $show->user_id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="p-4 font-bold text-[#FE5F55] underline" onclick="return confirm('Are you sure want to delete this?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>

@include('partial.footer')
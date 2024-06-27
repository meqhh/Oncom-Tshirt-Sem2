@extends('layout.main')
@include('partial.navbar')
<div class="flex flex-col min-h-screen">
<form action="{{Route('notification')}}">
<div class="container mx-auto py-8 min-h-screen">

    @if(session('success'))
        <div class="bg-green-100 text-green-700 p-4 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    @if($notifications->isEmpty())
        <p class="text-gray-700">Anda tidak memiliki notifikasi.</p>
    @else
        <div class="w-3/4 mx-auto rounded-lg p-6">
            <h1 class="text-2xl font-bold mb-4 text-white">Notifikasi</h1>
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-bold  text-black uppercase tracking-wider text-center">Judul</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-bold  text-black uppercase tracking-wider text-center">Pesan</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-bold  text-black uppercase tracking-wider text-center">Tanggal</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-bold  text-black uppercase tracking-wider text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach($notifications as $notification)
                        <tr class="{{ $notification->is_read ? '' : 'bg-yellow-100' }}">
                            <td class="px-6 py-4 whitespace-nowrap">{{ $notification->title }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $notification->message }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $notification->created_at->format('d M Y, H:i') }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                @if(!$notification->is_read)
                                    <form action="{{ route('notifications.markAsRead', $notification->id) }}" method="POST">
                                        @csrf
                                        @method('PATCH')
                                        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">Tandai sebagai Dibaca</button>
                                    </form>
                                @else
                                    <span class="text-green-600">Dibaca</span>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif
</div></form>

<footer class="mt-auto">
    @include('partial.footer')
</footer></div>

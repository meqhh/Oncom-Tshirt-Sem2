@extends('layout.main')

@include('partial.navbar')

<div class="w-full flex flex-row justify-center">
    <div class="w-1/4">
        @include('components.adminpanel')
    </div>
    <div class="w-3/4 py-10">
        <form action="{{ route('order') }}">
            <div class="container mx-auto mb-4 w-5/6">
                <h1 class="text-2xl font-bold mb-4 text-white">List Orderan</h1></div>
                <div class="flex justify-center">
                    <table class="w-5/6 bg-white">
                        <thead class="bg-white border-b-2 border-gray-300">
                            <tr>
                                <th class="py-2 text-center">Order ID</th>
                                <th class="py-2 text-center">User</th>
                                <th class="py-2 text-center">Status</th>
                                <th class="py-2 text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($orders as $order)
                            <tr>
                                <td class="py-4 text-center">{{ $order->order_id }}</td>
                                <td class="py-4 text-center">{{ $order->user->name }}</td>
                                <td class="py-4 text-center">{{ $order->status }}</td>
                                <td class="py-4 text-center">
                                    <a href="{{ route('order.show', $order->order_id) }}" class="bg-blue-500 text-white px-3 py-1 rounded">View</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </form>
    </div>
</div>

<footer class="mt-auto">
    @include('partial.footer')
</footer>

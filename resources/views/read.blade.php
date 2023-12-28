<!-- resources/views/read.blade.php -->

@extends('layouts.master')

@section('title', 'register')

@section('content')



<div class="card">
    <div class="card-body">
        <table class="min-w-full border border-gray-300 divide-y divide-gray-200">
            <thead class="bg-gray-800 text-white">
                <tr>
                    <th class="px-6 py-3 text-left">Id</th>
                    <th class="px-6 py-3 text-left">Name</th>
                    <th class="px-6 py-3 text-left">Price</th>
                    <th class="px-6 py-3 text-left">Quantity</th>
                    <th class="px-6 py-3 text-left">Image</th>
                    <th class="px-6 py-3 text-left">Action</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-300">
                @foreach ($items as $item )
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $item->id }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $item->name }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $item->price }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $item->quantity }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <img src="{{ URL::asset($item->photo->path) }}" class="w-8 h-8">

                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">

                        <button class="bg-blue-500 text-white px-4 py-2 rounded">Edit</button>
                        <button class="bg-red-500 text-white px-4 py-2 rounded">Delete</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection

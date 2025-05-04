@extends('layouts.app')
@section('title', 'Fleet')

@section('content')
    <div class="p-10 pt-24 mb-5">
        <div>
            <h1 class="text-3xl font-bold">Fleet List</h1>
        </div>
        <div class="overflow-x-auto mt-8 bg-white rounded-lg shadow-lg">
            <table class="min-w-full text-sm text-left text-gray-600">
                <thead class="bg-white text-xs uppercase text-slate-950">
                    <tr class="border-b border-gray-300">
                        <th class="px-6 py-3">Image</th>
                        <th class="px-6 py-3">Class</th>
                        <th class="px-6 py-3">Price</th>
                        <th class="px-6 py-3">Capacity</th>
                        <th class="px-6 py-3">Body Type</th>
                        <th class="px-6 py-3">Machine</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($fleets as $fleet)
                        <tr class="border-b border-gray-200 hover:bg-gray-200 transition duration-150">
                            <td class="py-4 px-6">
                                <img src="{{ asset($fleet['image']) }}" alt="{{ $fleet['class'] }}"
                                    class="w-24 h-16 object-cover rounded">
                            </td>
                            <td class="px-6 py-4">{{ $fleet['class'] }}</td>
                            <td class="px-6 py-4">{{ $fleet['price'] }}</td>
                            <td class="px-6 py-4">{{ $fleet['capacity'] }}</td>
                            <td class="px-6 py-4">{{ $fleet['body_type'] }}</td>
                            <td class="px-6 py-4">{{ $fleet['machine'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

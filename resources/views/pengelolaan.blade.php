@extends('layouts.app')
@section('title', 'Fleet')

@section('content')
    <div class="p-10 pt-24">
        <div>
            <h1 class="text-3xl font-bold">Fleet List</h1>
        </div>
        <div class="overflow-x-auto mt-8 bg-white rounded-lg shadow-lg">
            <table class="min-w-full text-sm text-left text-gray-600">
                <thead class="bg-white text-xs uppercase text-slate-950">
                    <tr class="border-b border-gray-300">
                        <th class="px-6 py-3">Image</th>
                        <th class="px-6 py-3">Class</th>
                        <th class="px-6 py-3">Capacity</th>
                        <th class="px-6 py-3">One Day (Half day - 8 Hours)</th>
                        <th class="px-6 py-3">One Day (Full day - 12 Hours)</th>
                        <th class="px-6 py-3">Two Days</th>
                        <th class="px-6 py-3">Three Days</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($fleets as $fleet)
                        <tr class="border-b border-gray-200 hover:bg-gray-200 transition duration-150">
                            <td class="py-4 px-6">
                                <img src="{{ asset($fleet['image']) }}" alt="{{ $fleet['class'] }}" class="w-24 h-16 object-cover rounded">
                            </td>
                            <td class="px-6 py-4">{{ $fleet['class'] }}</td>
                            <td class="px-6 py-4">{{ $fleet['capacity'] }}</td>
                            <td class="px-6 py-4">{{ $fleet['price_1'] }}</td>
                            <td class="px-6 py-4">{{ $fleet['price_2'] }}</td>
                            <td class="px-6 py-4">{{ $fleet['price_3'] }}</td>
                            <td class="px-6 py-4">{{ $fleet['price_4'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @include('components.footer')
    <a href="#" class="fixed bottom-6 right-6 flex items-center justify-center w-16 h-16 rounded-full bg-slate-950 text-white text-3xl shadow-lg hover:bg-green-600 transition duration-300 z-50">
        <svg class="w-12 h-12 fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M11 11V5H13V11H19V13H13V19H11V13H5V11H11Z"></path></svg>
    </a>
@endsection

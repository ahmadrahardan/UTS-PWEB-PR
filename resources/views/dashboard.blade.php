@extends('layouts.app')
@section('title', 'Dashboard')

@section('content')
    <div x-data="{ filter: 'all' }" class="bg-transparent pt-24 mb-10">
        <div class="w-full mx-auto flex flex-col items-center space-y-8 px-10">
            <div class="flex flex-col md:flex-row md:space-x-6 space-y-6 md:space-y-0 w-full justify-center">
                <div class="hidden sm:block flex-1 overflow-hidden shadow-md h-[580px]">
                    <img src="{{ asset('assets/P1.png') }}" alt="Megah" class="w-full h-full object-cover">
                </div>
                <div class="flex-1 overflow-hidden h-[530px]">
                    <img src="{{ asset('assets/P2.png') }}" alt="Megah"
                        class="w-full h-[400px] object-cover hidden sm:block">
                    <div class="sm:pl-40 max-w-xl text-center sm:text-right">
                        <h2 class="text-2xl font-bold text-slate-950 uppercase">PARIWISATA</h2>
                        <p class="mt-1 text-gray-600 text-xs">
                            Nikmati perjalanan nyaman dan aman bersama Megah Transport! Dengan fasilitas lengkap, AC sejuk, kursi ergonomis, serta layanan ramah, kami siap mengantar Anda ke berbagai kota tujuan dengan tepat waktu dan tarif terjangkau. Pesan sekarang, rasakan pengalaman perjalanan terbaik!
                        </p>
                    </div>
                </div>
                <div class="hidden sm:block flex-1 overflow-hidden shadow-md h-[530px]">
                    <img src="{{ asset('assets/P3.png') }}" alt="Megah" class="w-full h-full object-cover">
                </div>
            </div>
        </div>

        <div class="w-full px-20 mx-auto mt-20">
            <div class="flex space-x-6 border-b border-slate-950 pb-2 mb-6 text-sm font-semibold">
                <button @click="filter = 'all'" :class="filter === 'all' ? 'bg-slate-950 text-white' : 'text-slate-950 hover:bg-slate-950 hover:text-white'" class="px-4 py-1 rounded">
                    ALL CLASS
                </button>
                <button @click="filter = 'executive'" :class="filter === 'executive' ? 'bg-slate-950 text-white' : 'text-slate-950 hover:bg-slate-950 hover:text-white'" class="px-4 py-1 rounded">
                    EXECUTIVE CLASS
                </button>
                <button @click="filter = 'urban'" :class="filter === 'urban' ? 'bg-slate-950 text-white' : 'text-slate-950 hover:bg-slate-950 hover:text-white'" class="px-4 py-1 rounded">
                    URBAN CLASS
                </button>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                @foreach ($bus as $item)
                    @php
                        $filterClass = strtolower($item['class']);
                    @endphp
                    <div x-show="filter === 'all' || '{{ $filterClass }}'.includes(filter)"
                        class="max-w-md w-full mx-auto transition">
                        <img src="{{ asset($item['image']) }}" class="w-full object-cover rounded-md">
                        <div class="mt-2">
                            <p class="font-bold text-sm">{{ $item['company'] }}</p>
                            <p class="text-sm text-gray-600">{{ $item['class'] }}</p>
                            <p class="text-sm font-semibold">{{ $item['price'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    @include('components.footer')
@endsection

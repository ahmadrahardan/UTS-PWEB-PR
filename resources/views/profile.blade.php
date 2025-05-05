@extends('layouts.app')
@section('title', 'Profile')

@section('content')
    <div class="h-screen flex pt-20">
        <div class="p-2 hidden md:block w-1/2">
            <img src="{{ asset('assets/bus.png') }}" alt="Login Image" class="w-full h-full object-cover rounded-2xl">
        </div>
        <div class="w-full md:w-1/2 flex flex-col items-center justify-center relative">
            <div class="rounded-3xl max-w-md sm:max-w-lg p-10 w-full relative shadow-lg border-2 border-slate-950">
                <div class="flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-20 h-20" viewBox="0 0 24 24" fill="currentColor">
                        <path
                            d="M12 2C17.52 2 22 6.48 22 12C22 17.52 17.52 22 12 22C6.48 22 2 17.52 2 12C2 6.48 6.48 2 12 2ZM6.02332 15.4163C7.49083 17.6069 9.69511 19 12.1597 19C14.6243 19 16.8286 17.6069 18.2961 15.4163C16.6885 13.9172 14.5312 13 12.1597 13C9.78821 13 7.63095 13.9172 6.02332 15.4163ZM12 11C13.6569 11 15 9.65685 15 8C15 6.34315 13.6569 5 12 5C10.3431 5 9 6.34315 9 8C9 9.65685 10.3431 11 12 11Z">
                        </path>
                    </svg>
                </div>
                <h2 class="text-3xl text-center font-bold border-b-2 pb-3 border-slate-950 text-black mb-7">Profile</h2>
                <div>
                    <label class="block mb-1 text-gray-700 font-medium">Username :</label>
                    <h1 class="w-full mt-1 border-gray-300 rounded text-md py-3">{{ request('username') }}</h1>
                    <label class="block mb-1 text-gray-700 font-medium">Password :</label>
                    <h1 class="w-full mt-1 border-gray-300 rounded text-md py-3">{{ request('password') }}</h1>
                </div>
            </div>
            <p class="text-center text-xs text-gray-500 pt-6 w-full">
                ©MEGAHTRANSPORT 2025. ALL RIGHTS RESERVED
            </p>
        </div>
    </div>
@endsection

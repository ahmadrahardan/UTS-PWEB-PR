@php
    $username = request()->query('username');
    $password = request()->query('password');
@endphp

<header x-data="{ open: false, userOpen: false }"
    class="bg-slate-950 fixed px-8 py-6 flex justify-between items-center w-full text-white z-50">
    <div>
        <img src="{{ asset('assets/megah.png') }}" alt="Logo Megah" class="h-8">
    </div>
    <nav class="hidden md:flex gap-6 text-lg font-semibold items-center absolute left-1/2 transform -translate-x-1/2">
        <a href="{{ route('dashboard', ['username' => $username, 'password' => $password]) }}" class="hover:underline transition">Dashboard</a>
        <a href="{{ route('pengelolaan', ['username' => $username, 'password' => $password]) }}" class="hover:underline transition">Fleet</a>
    </nav>
    <div class="flex items-center gap-4">
        <button @click="open = !open" class="block md:hidden">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path x-show="!open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M4 6h16M4 12h16M4 18h16" />
                <path x-show="open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
        <div class="relative">
            <button @click="userOpen = !userOpen" id="dropdownButton" class="flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" viewBox="0 0 24 24" fill="currentColor">
                    <path
                        d="M12 2C17.52 2 22 6.48 22 12C22 17.52 17.52 22 12 22C6.48 22 2 17.52 2 12C2 6.48 6.48 2 12 2ZM6.02332 15.4163C7.49083 17.6069 9.69511 19 12.1597 19C14.6243 19 16.8286 17.6069 18.2961 15.4163C16.6885 13.9172 14.5312 13 12.1597 13C9.78821 13 7.63095 13.9172 6.02332 15.4163ZM12 11C13.6569 11 15 9.65685 15 8C15 6.34315 13.6569 5 12 5C10.3431 5 9 6.34315 9 8C9 9.65685 10.3431 11 12 11Z" />
                </svg>
                <span class="text-lg font-semibold hidden sm:block">Happy Travel, {{ $username }}!</span>
                <svg id="dropdownIcon" class="w-5 h-5 ml-1 transition-transform duration-200"
                    :class="{ 'rotate-180': userOpen }" fill="none" stroke="currentColor" stroke-width="2"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                </svg>
            </button>
            <div x-show="userOpen" @click.outside="userOpen = false"
                class="absolute right-0 mt-2 w-28 p-3 rounded-lg bg-white text-slate-950 shadow-lg z-50">
                <a href="{{ route('profile', ['username' => $username, 'password' => $password]) }}"
                    class="block px-4 py-2 rounded-lg hover:bg-slate-950 hover:text-white">Profile</a>
                <a href="{{ route('landing') }}" class="block px-4 py-2 rounded-lg hover:bg-slate-950 hover:text-white">Logout</a>
            </div>
        </div>
    </div>
    <div x-show="open" @click.outside="open = false"
        class="md:hidden absolute top-full left-0 w-full bg-slate-950 text-white shadow-md z-40">
        <a href="{{ route('dashboard', ['username' => $username, 'password' => $password]) }}"
            class="block px-6 py-3 border-t border-slate-800 hover:bg-slate-800">Dashboard</a>
        <a href="{{ route('pengelolaan', ['username' => $username, 'password' => $password]) }}"
            class="block px-6 py-3 border-t border-slate-800 hover:bg-slate-800">Fleet</a>
    </div>
</header>

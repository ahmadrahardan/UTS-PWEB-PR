@php
    $username = request()->query('username');
    $password = request()->query('password');
@endphp

<header class="bg-slate-950 fixed px-10 py-6 flex justify-between items-center w-full text-white z-50">
    <div class="w-60">
        <img src="{{ asset('assets/megah.png') }}" alt="Logo Megah" class="h-8">
    </div>
    <nav class="hidden md:flex gap-6 text-lg font-semibold h-full items-center">
        <a href="{{ route('dashboard', ['username' => $username]) }}" class="hover:underline transition">Dashboard</a>
        <a href="{{ route('pengelolaan', ['username' => $username]) }}" class="hover:underline transition">Fleet</a>
    </nav>
    <div class="relative w-60">
        <button id="dropdownButton" class="flex items-center gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" viewBox="0 0 24 24" fill="currentColor">
                <path
                    d="M12 2C17.52 2 22 6.48 22 12C22 17.52 17.52 22 12 22C6.48 22 2 17.52 2 12C2 6.48 6.48 2 12 2ZM6.02332 15.4163C7.49083 17.6069 9.69511 19 12.1597 19C14.6243 19 16.8286 17.6069 18.2961 15.4163C16.6885 13.9172 14.5312 13 12.1597 13C9.78821 13 7.63095 13.9172 6.02332 15.4163ZM12 11C13.6569 11 15 9.65685 15 8C15 6.34315 13.6569 5 12 5C10.3431 5 9 6.34315 9 8C9 9.65685 10.3431 11 12 11Z" />
            </svg>
            <span class="text-lg font-semibold">Happy Travel, {{ $username }}!</span>
            <svg id="dropdownIcon" class="w-5 h-5 cursor-pointer ml-1 transition-transform duration-200" fill="none"
                stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
            </svg>
        </button>
        <div id="dropdownMenu" class="hidden absolute right-0 mt-5 w-54 rounded-lg bg-white shadow-lg z-50">
            <div class="flex flex-col gap-1 p-3">
                <a onclick="window.location='{{ route('profile', ['username' => $username, 'password' => $password]) }}'"
                    class="block p-3 cursor-pointer text-[1rem] text-slate-950 rounded-lg hover:bg-slate-950 hover:text-white transition">Profile</a>
                <a onclick="window.location='{{ route('landing') }}'"
                    class="block p-3 cursor-pointer text-[1rem] text-slate-950 rounded-lg hover:bg-slate-950 hover:text-white transition">Logout</a>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const dropdownBtn = document.getElementById("dropdownButton");
            const dropdownMenu = document.getElementById("dropdownMenu");
            const dropdownIcon = document.getElementById("dropdownIcon");

            dropdownBtn.addEventListener("click", function(e) {
                e.stopPropagation();
                dropdownMenu.classList.toggle("hidden");
                dropdownIcon.classList.toggle("rotate-180");
            });

            document.addEventListener("click", function(e) {
                if (!dropdownMenu.contains(e.target) && !dropdownBtn.contains(e.target)) {
                    dropdownMenu.classList.add("hidden");
                    dropdownIcon.classList.remove("rotate-180");
                }
            });
        });
    </script>
</header>



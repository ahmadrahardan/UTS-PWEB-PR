<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset('assets/logo.png') }}" type="image/png">
    <title>Megah Trannsport</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
        integrity="sha512-KyZXEAg3QhqLMpG8r+Knujsl5+RrF0Ky8rW2XvYoE6iOr3YoD1p5Rf4mMHbh4vW4lJhJmD2a5XWm4GR8+2o4w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <header class="bg-slate-950 fixed px-10 py-6 flex justify-between items-center w-full z-50">
        <img src="{{ asset('assets/megah.png') }}" alt="Megah Logo" class="h-8">
        <div class="flex space-x-4">
            <a href="{{ route('login') }}" class="rounded-2xl border-2 border-white text-white px-6 py-1 hover:bg-white hover:text-slate-950 transition font-medium">
                Login
            </a>
            <a href="#" class="rounded-2xl border-2 border-white text-white px-6 py-1 hover:bg-white hover:text-slate-950 transition font-medium">
                Register
            </a>
        </div>
    </header>
    <div class="bg-transparent pt-24 mb-10">
        <div class="w-full mx-auto flex flex-col items-center space-y-8 px-10">
            <div class="flex flex-col md:flex-row md:space-x-6 space-y-6 md:space-y-0 w-full justify-center">
                <div class="relative group hidden sm:block flex-1 overflow-hidden shadow-md h-[580px] cursor-pointer">
                    <img src="{{ asset('assets/D3.png') }}" alt="Megah" class="absolute inset-0 w-full h-full object-cover transition-opacity duration-500 ease-in-out group-hover:opacity-0">
                    <img src="{{ asset('assets/P1.png') }}" alt="Megah" class="absolute inset-0 w-full h-full object-cover transition-opacity duration-500 ease-in-out opacity-0 group-hover:opacity-100">
                </div>
                <div class="flex-1 overflow-hidden h-[530px] flex flex-col">
                    <div class="relative group h-[400px] w-full cursor-pointer">
                        <img src="{{ asset('assets/D1.png') }}" alt="Megah" class="w-full h-full absolute inset-0 object-cover transition-opacity duration-500 ease-in-out group-hover:opacity-0">
                        <img src="{{ asset('assets/P2.png') }}" alt="Megah" class="w-full h-full absolute inset-0 object-cover transition-opacity duration-500 ease-in-out opacity-0 group-hover:opacity-100">
                    </div>
                    <div class="sm:pl-40 max-w-xl mt-5 sm:mt-0 text-center sm:text-right">
                        <h2 class="text-2xl font-bold text-slate-950 uppercase">MEGAH TRANSPORT</h2>
                        <p class="mt-1 text-gray-600 text-xs">
                            Nikmati perjalanan nyaman dan aman bersama Megah Transport! Dengan fasilitas lengkap, AC sejuk, kursi ergonomis, serta layanan ramah, kami siap mengantar Anda ke berbagai kota tujuan dengan tepat waktu dan tarif terjangkau. Pesan sekarang, rasakan pengalaman perjalanan terbaik!
                        </p>
                    </div>
                </div>
                <div class="relative group hidden sm:block flex-1 overflow-hidden shadow-md h-[530px] cursor-pointer">
                    <img src="{{ asset('assets/D2.png') }}" alt="Megah" class="absolute inset-0 w-full h-full object-cover transition-opacity duration-500 ease-in-out group-hover:opacity-0">
                    <img src="{{ asset('assets/P3.png') }}" alt="Megah" class="absolute inset-0 w-full h-full object-cover transition-opacity duration-500 ease-in-out opacity-0 group-hover:opacity-100">
                </div>
            </div>
        </div>
    </div>
    @include('components.footer')
    @include('components.wa-button')
</body>

</html>

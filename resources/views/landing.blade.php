<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset('assets/logo.png') }}" type="image/png">
    <title>Megah Trannsport</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-KyZXEAg3QhqLMpG8r+Knujsl5+RrF0Ky8rW2XvYoE6iOr3YoD1p5Rf4mMHbh4vW4lJhJmD2a5XWm4GR8+2o4w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <header class="bg-slate-950 fixed px-10 py-6 flex justify-between items-center w-full">
        <a href="{{ route('dashboard') }}">
            <img src="{{ asset('assets/megah.png') }}" alt="" class="h-8">
        </a>
        <a href="{{ route('login') }}" class="relative bg-slate-950 rounded-2xl border-white border-2 text-white py-1 px-8 hover:bg-white hover:text-slate-950">
            <h2 class="font-medium">Login</h2>
        </a>
    </header>
    <div class="bg-transparent pt-24">
        <div class="w-full mx-auto flex flex-col items-center space-y-8 px-10">
            <div class="flex flex-col md:flex-row md:space-x-6 space-y-6 md:space-y-0 w-full justify-center">
                <div class="flex-1 overflow-hidden shadow-md h-[580px]">
                    <img src="{{ asset('assets/D3.png') }}" alt="Megah" class="w-full h-full object-cover">
                </div>
                <div class="flex-1 overflow-hidden h-[530px]">
                    <img src="{{ asset('assets/D1.png') }}" alt="Megah"
                        class="w-full h-[400px] object-cover">
                    <div class="text-right max-w-xl">
                        <h2 class="text-2xl font-bold text-slate-950 uppercase">Megah Transport</h2>
                        <p class="mt-1 pl-40 text-gray-600 text-xs">
                            Nikmati perjalanan nyaman dan aman bersama Megah Transport! Dengan fasilitas lengkap, AC sejuk, kursi ergonomis, serta layanan ramah, kami siap mengantar Anda ke berbagai kota tujuan dengan tepat waktu dan tarif terjangkau. Pesan sekarang, rasakan pengalaman perjalanan terbaik!
                        </p>
                    </div>
                </div>
                <div class="flex-1 overflow-hidden shadow-md h-[530px]">
                    <img src="{{ asset('assets/D2.png') }}" alt="Megah" class="w-full h-full object-cover">
                </div>
            </div>
        </div>
    </div>
</body>
</html>

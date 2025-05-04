<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset('assets/logo.png') }}" type="image/png">
    <title>Login</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="font-sans h-screen bg-cover bg-center min-h-screen flex items-center justify-center"
    style="background-image: url({{ asset('assets/bg_login.jpeg') }})">
        <div class="rounded-3xl p-10 w-full max-w-md relative shadow-xl bg-fit bg-center"
            style="background-image: url('{{ asset('assets/bg_form.png') }}')">
            <h2 class="text-3xl text-center font-bold text-black mb-8">Login</h2>
            <form action="{{ route('login.submit') }}" method="POST" class="space-y-5">
                @csrf
                <div>
                    <label class="block mb-1 text-gray-700 font-medium">Username</label>
                    <input type="text" name="username" placeholder="Masukkan username"
                        class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring focus:ring-green-500">
                </div>
                <div>
                    <label class="block mb-1 text-gray-700 font-medium">Password</label>
                    <input type="password" name="password" placeholder="Masukkan password"
                        class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring focus:ring-green-500">
                </div>
                <button type="submit"
                    class="w-full bg-green-500 text-white font-semibold py-3 rounded-lg hover:bg-green-700 transition">
                    Masuk
                </button>
            </form>
        </div>
    </div>
</body>
</html>

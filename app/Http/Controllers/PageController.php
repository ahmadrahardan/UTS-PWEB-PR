<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function landing()
    {
        return view('landing');
    }

    public function login()
    {
        return view('login');
    }

    public function submit(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');

        return redirect()->route('dashboard', ['username' => $username, 'password' => $password]);
    }

    public function logout()
    {
        return redirect()->route('login');
    }

    public function profile(Request $request)
    {
        $username = $request->query('username');
        $password = $request->query('password');

        return view('profile', ['username' => $username, 'password' => $password]);
    }

    public function dashboard()
    {
        $bus =
        [
            [
                'image' => 'assets/bus.png',
                'company' => 'Megah Transport',
                'class' => 'Executive Class - E1',
                'price' => 'Rp 4.500.000 - 8.500.000',
            ],
            [
                'image' => 'assets/bus.png',
                'company' => 'Megah Transport',
                'class' => 'Executive Class - E2',
                'price' => 'Rp 4.750.000 - 8.750.000' ,
            ],
            [
                'image' => 'assets/bus.png',
                'company' => 'Megah Transport',
                'class' => 'Executive Class - E3',
                'price' => 'Rp 5.000.000 - 9.000.000',
            ],
            [
                'image' => 'assets/bus.png',
                'company' => 'Megah Transport',
                'class' => 'Executive Class - E4',
                'price' => 'Rp 5.375.000 - 9.375.000',
            ],
            [
                'image' => 'assets/bus.png',
                'company' => 'Megah Transport',
                'class' => 'Urban Class - U1',
                'price' => 'Rp 4.000.000 - 8.000.000',
            ],
            [
                'image' => 'assets/bus.png',
                'company' => 'Megah Transport',
                'class' => 'Urban Class - U2',
                'price' => 'Rp 4.250.000 - 8.250.000',
            ],
            [
                'image' => 'assets/bus.png',
                'company' => 'Megah Transport',
                'class' => 'Urban Class - U3',
                'price' => 'Rp 4.300.000 - 8.300.000',
            ],
        ];

        return view('dashboard', ['bus' => $bus]);
    }

    public function pengelolaan()
    {
        $fleets =
        [
            [
                'image' => 'assets/bus.png',
                'class' => 'Executive Class - E1',
                'capacity' => '59',
                'price_1' => 'Rp 4.500.000',
                'price_2' => 'Rp 5.000.000',
                'price_3' => 'Rp 6.000.000',
                'price_4' => 'Rp 8.500.000',
            ],
            [
                'image' => 'assets/bus.png',
                'class' => 'Executive Class - E2',
                'capacity' => '51',
                'price_1' => 'Rp 4.750.000',
                'price_2' => 'Rp 5.750.000',
                'price_3' => 'Rp 6.750.000',
                'price_4' => 'Rp 8.750.000',
            ],
            [
                'image' => 'assets/bus.png',
                'class' => 'Executive Class - E3',
                'capacity' => '40',
                'price_1' => 'Rp 5.000.000',
                'price_2' => 'Rp 6.000.000',
                'price_3' => 'Rp 7.000.000',
                'price_4' => 'Rp 9.000.000',
            ],
            [
                'image' => 'assets/bus.png',
                'class' => 'Executive Class - E4',
                'capacity' => '36',
                'price_1' => 'Rp 5.375.000',
                'price_2' => 'Rp 6.375.000',
                'price_3' => 'Rp 7.375.000',
                'price_4' => 'Rp 9.375.000',
            ],
            [
                'image' => 'assets/bus.png',
                'class' => 'Urban Class - U1',
                'capacity' => '59',
                'price_1' => 'Rp 4.000.000',
                'price_2' => 'Rp 5.000.000',
                'price_3' => 'Rp 6.000.000',
                'price_4' => 'Rp 8.000.000',
            ],
            [
                'image' => 'assets/bus.png',
                'class' => 'Urban Class - U2',
                'capacity' => '51',
                'price_1' => 'Rp 4.250.000',
                'price_2' => 'Rp 5.250.000',
                'price_3' => 'Rp 6.250.000',
                'price_4' => 'Rp 8.250.000',
            ],
            [
                'image' => 'assets/bus.png',
                'class' => 'Urban Class - U3',
                'capacity' => '40',
                'price_1' => 'Rp 4.300.000',
                'price_2' => 'Rp 5.300.000',
                'price_3' => 'Rp 6.300.000',
                'price_4' => 'Rp 8.300.000',
            ],
        ];

        return view('pengelolaan', ['fleets' => $fleets]);
    }
}

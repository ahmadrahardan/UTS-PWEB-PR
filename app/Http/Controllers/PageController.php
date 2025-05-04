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

        return redirect()->route('dashboard', ['username' => $username]);
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
                'price' => 'Rp 4.500.000 - 8.500.000',
                'capacity' => '59',
                'body_type' => 'Jetbus3',
                'machine' => 'Mercedes-Benz OH1626',
            ],
            [
                'image' => 'assets/bus.png',
                'class' => 'Executive Class - E2',
                'price' => 'Rp 4.750.000 - 8.750.000' ,
                'capacity' => '51',
                'body_type' => 'Avante H8',
                'machine' => 'Hino AK240',
            ],
            [
                'image' => 'assets/bus.png',
                'class' => 'Executive Class - E3',
                'price' => 'Rp 5.000.000 - 9.000.000',
                'capacity' => '36',
                'body_type' => 'SR3',
                'machine' => 'Mercedes-Benz OC500RF',
            ],
            [
                'image' => 'assets/bus.png',
                'class' => 'Executive Class - E4',
                'price' => 'Rp 5.375.000 - 9.375.000',
                'capacity' => '59',
                'body_type' => 'Triun DX',
                'machine' => 'Mercedes-Benz OH1526',
            ],
            [
                'image' => 'assets/bus.png',
                'class' => 'Urban Class - U1',
                'price' => 'Rp 4.000.000 - 8.000.000',
                'capacity' => '36',
                'body_type' => 'Jetbus5',
                'machine' => 'Scania K360IB',
            ],
            [
                'image' => 'assets/bus.png',
                'class' => 'Urban Class - U2',
                'price' => 'Rp 4.250.000 - 8.250.000',
                'capacity' => '40',
                'body_type' => 'Patriot',
                'machine' => 'Volvo B8R',
            ],
            [
                'image' => 'assets/bus.png',
                'class' => 'Urban Class - U3',
                'price' => 'Rp 4.300.000 - 8.300.000',
                'capacity' => '51',
                'body_type' => 'Grand Tourismo',
                'machine' => 'Volvo B11R',
            ],
            [
                'image' => 'assets/bus.png',
                'class' => 'Economy Class - E1',
                'price' => 'Rp 2.500.000 - 4.500.000',
                'capacity' => '16',
                'body_type' => 'Hiace',
                'machine' => 'Toyota 2GD',
            ],
        ];

        return view('pengelolaan', ['fleets' => $fleets]);
    }
}

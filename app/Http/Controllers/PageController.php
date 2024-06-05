<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('User.home');
    }

    public function about()
    {
        return view('User.aboutUs');
    }

    public function menu()
    {
        $menuItems = [
            (object)['name' => 'Nasi Uduk', 'price' => 'Rp20.000', 'image' => 'nasi-uduk.jpg'],
            (object)['name' => 'Teh Dingin', 'price' => 'Rp5.000', 'image' => 'teh-dingin.jpg'],
            (object)['name' => 'Nasi Uduk', 'price' => 'Rp20.000', 'image' => 'nasi-uduk.jpg'],
            (object)['name' => 'Teh Dingin', 'price' => 'Rp5.000', 'image' => 'teh-dingin.jpg'],
            (object)['name' => 'Nasi Uduk', 'price' => 'Rp20.000', 'image' => 'nasi-uduk.jpg'],
            (object)['name' => 'Teh Dingin', 'price' => 'Rp5.000', 'image' => 'teh-dingin.jpg'],
            (object)['name' => 'Nasi Uduk', 'price' => 'Rp20.000', 'image' => 'nasi-uduk.jpg'],
            (object)['name' => 'Teh Dingin', 'price' => 'Rp5.000', 'image' => 'teh-dingin.jpg'],
            (object)['name' => 'Nasi Uduk', 'price' => 'Rp20.000', 'image' => 'nasi-uduk.jpg'],
            (object)['name' => 'Teh Dingin', 'price' => 'Rp5.000', 'image' => 'teh-dingin.jpg'],
            (object)['name' => 'Nasi Uduk', 'price' => 'Rp20.000', 'image' => 'nasi-uduk.jpg'],
            (object)['name' => 'Teh Dingin', 'price' => 'Rp5.000', 'image' => 'teh-dingin.jpg'],
            
            // Tambahkan item menu lainnya di sini
        ];

        return view('User.menu', compact('menuItems'));
    }

    public function contact()
    {
        return view('User.contact');
    }
}

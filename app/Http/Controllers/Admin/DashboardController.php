<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Tampilkan halaman utama dashboard admin
        return view('admin.dashboard');
    }

    public function createMenu()
    {
        // Tampilkan halaman tambah menu
        return view('admin.menu.create');
    }
}

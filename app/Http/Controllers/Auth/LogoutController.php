<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LogoutController extends Controller
{
    public function logout(Request $request)
    {
        // Lakukan proses logout di sini, misalnya:
        auth()->logout();

        // Redirect ke halaman lain setelah logout
        return redirect('/');
    }
}

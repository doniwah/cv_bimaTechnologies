<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    /**
     * Tampilan Halaman Login
     */
    public function login()
    {
        return view('auth.login');
    }
}

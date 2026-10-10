<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Tampilan Dashboard Utama
     */
    public function index()
    {
        return view('dashboard.index');
    }

    /**
     * Tampilan Halaman Upload / Kelola Dokumen
     */
    public function dokumen()
    {
        return view('dashboard.dokumen');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Halaman Utama (Home)
     */
    public function home()
    {
        return view('pages.home');
    }

    /**
     * Halaman Tentang Perusahaan (About)
     */
    public function about()
    {
        return view('pages.about');
    }

    /**
     * Halaman Daftar Project
     */
    public function project()
    {
        return view('pages.project');
    }

    /**
     * Halaman Mitra Kerja Sama (Partnership)
     */
    public function kerjasama()
    {
        return view('pages.kerjasama');
    }

    /**
     * Halaman Struktur Organisasi
     */
    public function organisasi()
    {
        return view('pages.organisasi');
    }

    /**
     * Halaman Kontak Perusahaan
     */
    public function contact()
    {
        return view('pages.contact');
    }
}

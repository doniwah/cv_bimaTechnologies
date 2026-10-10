@extends('layouts.app')

@section('title', 'Home - CV BIMA TECHNOLOGIES')

@section('content')
    <!-- ================= HERO ================= -->
    <section class="hero">
        <div class="hero-content">
            <span class="label">PROFESSIONAL • INNOVATIVE • TRUSTED</span>
            <h1>
                Membangun Solusi<br>
                <span>Untuk Masa Depan</span>
            </h1>
            <p>
                CV BIMA TECHNOLOGIES merupakan perusahaan yang bergerak dalam bidang teknologi informasi dan pengembangan solusi digital.
            </p>

            <div class="hero-buttons">
                <a href="{{ route('about') }}" class="btn">Tentang Kami</a>
                <a href="{{ route('contact') }}" class="btn btn-outline">Hubungi Kami</a>
            </div>
        </div>
    </section>

    <!-- ================= ABOUT SINGKAT ================= -->
    <section class="section">
        <div class="section-header">
            <span class="label">TENTANG KAMI</span>
            <h2>Partner Teknologi Anda</h2>
            <p>Kami menyediakan berbagai solusi teknologi dan layanan digital untuk mendukung kebutuhan bisnis dan organisasi.</p>
        </div>

        <div class="feature-grid">
            <div class="feature-card">
                <div class="number">01</div>
                <h3>Profesional</h3>
                <p>Dikerjakan oleh tim yang profesional dan berpengalaman.</p>
            </div>

            <div class="feature-card">
                <div class="number">02</div>
                <h3>Inovatif</h3>
                <p>Menggunakan teknologi modern untuk menghasilkan solusi terbaik.</p>
            </div>

            <div class="feature-card">
                <div class="number">03</div>
                <h3>Terpercaya</h3>
                <p>Mengutamakan kepercayaan dan hubungan jangka panjang dengan partner.</p>
            </div>
        </div>
    </section>

    <!-- ================= CTA ================= -->
    <section class="cta">
        <h2>Mari Berkolaborasi</h2>
        <p>Bersama-sama menciptakan solusi yang memberikan dampak nyata.</p>
        <a href="{{ route('contact') }}" class="btn">Hubungi Kami</a>
    </section>
@endsection

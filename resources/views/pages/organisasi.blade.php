@extends('layouts.app')

@section('title', 'Organisasi - CV BIMA TECHNOLOGIES')

@section('content')
    <!-- HEADER -->
    <section class="page-header">
        <span class="label">OUR TEAM</span>
        <h1>Struktur Organisasi</h1>
        <p>Tim yang bekerja bersama, mencapai tujuan perusahaan.</p>
    </section>

    <!-- ORGANIZATION -->
    <section class="section">
        <div class="organization">

            <!-- LEVEL 1: DIREKTUR -->
            <div class="org-level">
                <div class="person main-person">
                    <div class="avatar">DU</div>
                    <h3>Bayu Raharjo S.Kom</h3>
                    <p>Direktur Utama</p>
                </div>
            </div>

            <div class="org-line"></div>

            <!-- LEVEL 2: MANAGERS -->
            <div class="org-grid">
                <div class="person">
                    <div class="avatar">MO</div>
                    <h3>Nama Manager</h3>
                    <p>Manager Operasional</p>
                </div>

                <div class="person">
                    <div class="avatar">MT</div>
                    <h3>Nama Teknisi</h3>
                    <p>Manager Teknologi</p>
                </div>

                <div class="person">
                    <div class="avatar">KA</div>
                    <h3>Nama Admin</h3>
                    <p>Kepala Administrasi</p>
                </div>
            </div>

            <!-- LEVEL 3: STAFF -->
            <div class="org-grid">
                <div class="person">
                    <div class="avatar">ST</div>
                    <h3>Staff Teknologi</h3>
                    <p>Technology Team</p>
                </div>

                <div class="person">
                    <div class="avatar">SA</div>
                    <h3>Staff Admin</h3>
                    <p>Administration</p>
                </div>

                <div class="person">
                    <div class="avatar">CS</div>
                    <h3>Customer Service</h3>
                    <p>Customer Support</p>
                </div>
            </div>

        </div>
    </section>
@endsection

@extends('layouts.dashboard')

@section('title', 'Dashboard - CV BIMA TECHNOLOGIES')

@section('content')
    <main class="dashboard">
        <!-- HEADER -->
        <div class="dashboard-header">
            <span class="label">COMPANY DASHBOARD</span>
            <h1>
                Selamat Datang, <span id="welcomeUser">Admin</span> 👋
            </h1>
            <p>Kelola informasi dan dokumen internal CV BIMA TECHNOLOGIES.</p>
        </div>

        <!-- ================= STATISTIK ================= -->
        <div class="stat-grid">
            <div class="stat-card">
                <span>PROJECT</span>
                <strong>12</strong>
            </div>

            <div class="stat-card">
                <span>PARTNER</span>
                <strong>8</strong>
            </div>

            <div class="stat-card">
                <span>DOKUMEN</span>
                <strong id="documentCount">0</strong>
            </div>

            <div class="stat-card">
                <span>STATUS</span>
                <strong class="status-online">ONLINE</strong>
            </div>
        </div>

        <!-- ================= DOCUMENT CENTER ================= -->
        <section class="dashboard-document-section">
            <div class="document-header">
                <div>
                    <span class="label">DOCUMENT CENTER</span>
                    <h2>Dokumen Perusahaan</h2>
                    <p>Masukkan dan kelola dokumen perusahaan melalui dashboard.</p>
                </div>

                <div class="document-count-box">
                    <span>TOTAL DOKUMEN</span>
                    <strong id="documentCountLarge">0</strong>
                </div>
            </div>

            <!-- FORM UPLOAD -->
            <div class="document-upload-box">
                <div class="upload-title">
                    <div class="upload-icon">+</div>
                    <div>
                        <h3>Masukkan Dokumen</h3>
                        <p>PDF, DOC, DOCX, XLS, XLSX, JPG, PNG</p>
                    </div>
                </div>

                <form id="documentForm">
                    @csrf
                    <div class="form-row">
                        <div class="form-group">
                            <label for="documentName">Nama Dokumen</label>
                            <input type="text" id="documentName" placeholder="Contoh: Proposal Kerja Sama" required>
                        </div>

                        <div class="form-group">
                            <label for="documentType">Jenis Dokumen</label>
                            <select id="documentType">
                                <option value="Proposal">Proposal</option>
                                <option value="Laporan">Laporan</option>
                                <option value="Kerja Sama">Kerja Sama</option>
                                <option value="Surat">Surat</option>
                                <option value="Dokumen Lainnya">Dokumen Lainnya</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="documentFile">Pilih File</label>
                        <input type="file" id="documentFile" accept=".pdf,.doc,.docx,.xls,.xlsx,.jpg,.jpeg,.png" required>
                    </div>

                    <button type="submit" class="btn">+ Masukkan Dokumen</button>
                </form>

                <div id="documentResult" class="document-result"></div>
            </div>

            <!-- LIST DOKUMEN -->
            <div class="document-list-section">
                <div class="document-list-header">
                    <div>
                        <span class="label">FILE PERUSAHAAN</span>
                        <h2>Dokumen Tersimpan</h2>
                    </div>

                    <button type="button" class="clear-document-btn" onclick="clearAllDocuments()">
                        Hapus Semua
                    </button>
                </div>

                <!-- LIST AKAN MUNCUL DI SINI DARI JS -->
                <div id="documentList" class="document-list"></div>
            </div>
        </section>
    </main>
@endsection

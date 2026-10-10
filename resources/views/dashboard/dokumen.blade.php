@extends('layouts.dashboard')

@section('title', 'Dokumen - CV BIMA TECHNOLOGIES')

@section('content')
    <section class="page-header">
        <span class="label">DOCUMENT CENTER</span>
        <h1>Dokumen Perusahaan</h1>
        <p>Masukkan dokumen perusahaan.</p>
    </section>

    <section class="section">
        <div class="document-box">
            <h2>Upload Dokumen</h2>
            <p>Format yang didukung: PDF, DOC, DOCX, XLS, XLSX, JPG, PNG.</p>

            <form id="documentForm">
                @csrf
                <label for="documentName">Nama Dokumen</label>
                <input type="text" id="documentName" placeholder="Contoh: Proposal Kerja Sama" required>

                <label for="documentType">Jenis Dokumen</label>
                <select id="documentType">
                    <option value="Proposal">Proposal</option>
                    <option value="Laporan">Laporan</option>
                    <option value="Kerja Sama">Kerja Sama</option>
                    <option value="Dokumen Lainnya">Dokumen Lainnya</option>
                </select>

                <label for="documentFile">Pilih File</label>
                <input type="file" id="documentFile" required>

                <button type="submit" class="btn">Masukkan Dokumen</button>
            </form>

            <div id="documentResult" class="document-result"></div>
        </div>
    </section>
@endsection

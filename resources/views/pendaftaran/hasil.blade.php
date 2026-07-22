@extends('layouts.app')

@section('title', 'Hasil Pendaftaran')

@section('content')
<style>
    .result-card {
        background: #ffffff;
        max-width: 700px;
        padding: 30px;
        border-radius: 12px;
        box-shadow: 0 4px 15px rgba(0,0,0,0.05);
        border: 1px solid #e2e8f0;
    }
    .result-card h2 {
        color: #1a365d;
        margin-bottom: 20px;
        border-bottom: 3px solid #2b6cb0;
        padding-bottom: 10px;
    }
    .result-card p { margin-bottom: 8px; color: #333; }
    .result-card ul { margin: 8px 0 16px 20px; color: #333; }
    .btn-back {
        display: inline-block;
        margin-top: 15px;
        background-color: #3182ce;
        color: white;
        text-decoration: none;
        padding: 10px 20px;
        border-radius: 6px;
        font-weight: 600;
    }
    .btn-back:hover { background-color: #2b6cb0; }
</style>

<div class="result-card">
    <h2>Hasil Pendaftaran</h2>
    <p><strong>Nama:</strong> {{ $d->nama }}</p>
    <p><strong>Tempat Lahir:</strong> {{ $d->tempat_lahir }}</p>
    <p><strong>Tanggal Lahir:</strong> {{ $d->tanggal_lahir }}</p>
    <p><strong>Jenis Kelamin:</strong> {{ $d->jk }}</p>
    <p><strong>Alamat:</strong> {{ $d->alamat }}</p>
    <p><strong>Sekolah Asal:</strong> {{ $d->sekolah_asal }}</p>
    <p><strong>Nama Sekolah:</strong> {{ $d->nama_sekolah }}</p>
    <p><strong>Nilai UAN:</strong></p>
    <ul>
        <li>Matematika: {{ $d->matematika }}</li>
        <li>Bahasa Inggris: {{ $d->inggris }}</li>
        <li>Bahasa Indonesia: {{ $d->indonesia }}</li>
    </ul>
    <p><strong>Jurusan Pilihan:</strong></p>
    <ul>
        <li>Pilihan 1: {{ $d->pilihan1 }}</li>
        <li>Pilihan 2: {{ $d->pilihan2 }}</li>
    </ul>
    <p><strong>Alasan Masuk UNIROW:</strong> {{ $d->alasan }}</p>
    <p><strong>Tanggal Daftar:</strong> {{ $d->created_at->translatedFormat('d F Y') }}</p>

    <a href="{{ route('pendaftaran.index') }}" class="btn-back">Lihat Semua Data</a>
</div>
@endsection

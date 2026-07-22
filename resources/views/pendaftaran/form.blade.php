@extends('layouts.app')

@section('title', 'Form Pendaftaran')

@section('content')
<style>
    .form-card {
        background: #ffffff;
        max-width: 700px;
        padding: 30px;
        border-radius: 12px;
        box-shadow: 0 4px 15px rgba(0,0,0,0.05);
        border: 1px solid #e2e8f0;
    }
    .form-card h2 {
        color: #1a365d;
        margin-bottom: 20px;
        border-bottom: 3px solid #2b6cb0;
        padding-bottom: 10px;
    }
    .form-group { margin-bottom: 18px; }
    .form-group label { display: block; font-weight: 600; color: #2c5282; margin-bottom: 6px; }
    .form-group input[type=text],
    .form-group input[type=date],
    .form-group select,
    .form-group textarea {
        width: 100%;
        padding: 10px 12px;
        border: 1px solid #cbd5e0;
        border-radius: 6px;
        font-size: 0.95rem;
    }
    .radio-group label { font-weight: normal; display: inline-block; margin-right: 15px; color: #333; }
    .btn-submit {
        background-color: #3182ce;
        color: white;
        border: none;
        padding: 12px 24px;
        border-radius: 6px;
        font-weight: 600;
        font-size: 1rem;
        cursor: pointer;
    }
    .btn-submit:hover { background-color: #2b6cb0; }
    .errors {
        background: #fff5f5;
        border: 1px solid #feb2b2;
        color: #c53030;
        padding: 12px 16px;
        border-radius: 6px;
        margin-bottom: 20px;
    }
</style>

<div class="form-card">
    <h2>Form Pendaftaran</h2>

    @if ($errors->any())
        <div class="errors">
            <ul style="margin-left: 18px;">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('pendaftaran.store') }}">
        @csrf

        <div class="form-group">
            <label>Nama</label>
            <input type="text" name="nama" value="{{ old('nama') }}">
        </div>

        <div class="form-group">
            <label>Tempat Lahir</label>
            <input type="text" name="tempat_lahir" value="{{ old('tempat_lahir') }}">
        </div>

        <div class="form-group">
            <label>Tanggal Lahir</label>
            <input type="date" name="tanggal_lahir" value="{{ old('tanggal_lahir') }}">
        </div>

        <div class="form-group radio-group">
            <label>Jenis Kelamin</label>
            <label><input type="radio" name="jk" value="Laki-laki" {{ old('jk') == 'Laki-laki' ? 'checked' : '' }}> Laki-laki</label>
            <label><input type="radio" name="jk" value="Perempuan" {{ old('jk') == 'Perempuan' ? 'checked' : '' }}> Perempuan</label>
        </div>

        <div class="form-group">
            <label>Alamat</label>
            <input type="text" name="alamat" value="{{ old('alamat') }}">
        </div>

        <div class="form-group radio-group">
            <label>Sekolah Asal</label>
            <label><input type="radio" name="sekolah_asal" value="SMA" {{ old('sekolah_asal') == 'SMA' ? 'checked' : '' }}> SMA</label>
            <label><input type="radio" name="sekolah_asal" value="MA" {{ old('sekolah_asal') == 'MA' ? 'checked' : '' }}> MA</label>
            <label><input type="radio" name="sekolah_asal" value="SMK" {{ old('sekolah_asal') == 'SMK' ? 'checked' : '' }}> SMK</label>
        </div>

        <div class="form-group">
            <label>Nama Sekolah</label>
            <input type="text" name="nama_sekolah" value="{{ old('nama_sekolah') }}">
        </div>

        <div class="form-group">
            <label>Nilai UAN - Matematika</label>
            <input type="text" name="matematika" value="{{ old('matematika') }}">
        </div>

        <div class="form-group">
            <label>Nilai UAN - Bahasa Inggris</label>
            <input type="text" name="inggris" value="{{ old('inggris') }}">
        </div>

        <div class="form-group">
            <label>Nilai UAN - Bahasa Indonesia</label>
            <input type="text" name="indonesia" value="{{ old('indonesia') }}">
        </div>

        <div class="form-group">
            <label>Jurusan Pilihan 1</label>
            <select name="pilihan1">
                <option value="TEKNIK INFORMATIKA" {{ old('pilihan1') == 'TEKNIK INFORMATIKA' ? 'selected' : '' }}>TEKNIK INFORMATIKA</option>
                <option value="SISTEM INFORMASI" {{ old('pilihan1') == 'SISTEM INFORMASI' ? 'selected' : '' }}>SISTEM INFORMASI</option>
            </select>
        </div>

        <div class="form-group">
            <label>Jurusan Pilihan 2</label>
            <select name="pilihan2">
                <option value="TEKNIK INFORMATIKA" {{ old('pilihan2') == 'TEKNIK INFORMATIKA' ? 'selected' : '' }}>TEKNIK INFORMATIKA</option>
                <option value="SISTEM INFORMASI" {{ old('pilihan2') == 'SISTEM INFORMASI' ? 'selected' : '' }}>SISTEM INFORMASI</option>
            </select>
        </div>

        <div class="form-group">
            <label>Alasan Masuk UNIROW</label>
            <textarea name="alasan" rows="4">{{ old('alasan') }}</textarea>
        </div>

        <div class="form-group">
            <label><input type="checkbox" name="setuju" required> Saya menyatakan data benar</label>
        </div>

        <button type="submit" class="btn-submit">Daftar</button>
    </form>
</div>
@endsection

@extends('layouts.app')

@section('title', 'Beranda - Ranspoint')

@section('content')
<style>
    .container {
        background: #ffffff;
        width: 100%;
        max-width: 900px;
        padding: 40px;
        border-radius: 16px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
        text-align: center;
        margin: 0 auto;
    }

    .container h1 {
        color: #1e3c72;
        font-size: 2rem;
        margin-bottom: 10px;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    .container .subtitle {
        color: #2a5298;
        font-size: 1.4rem;
        font-weight: 600;
        margin-bottom: 8px;
    }

    .container .description {
        color: #666;
        font-size: 1rem;
        margin-bottom: 35px;
    }

    .container table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 10px;
        overflow: hidden;
        border-radius: 8px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.03);
    }

    .container th {
        background: linear-gradient(135deg, #1e3c72, #2a5298);
        color: white;
        font-weight: 600;
        padding: 14px 16px;
        font-size: 0.95rem;
        text-transform: uppercase;
    }

    .container td {
        padding: 14px 16px;
        border-bottom: 1px solid #eef2f5;
        color: #4a5568;
        font-size: 0.95rem;
    }

    .container tr:hover {
        background-color: #f8fafc;
    }

    .btn-link {
        display: inline-block;
        background-color: #3498db;
        color: white;
        text-decoration: none;
        padding: 6px 14px;
        border-radius: 6px;
        font-size: 0.85rem;
        font-weight: 500;
        transition: all 0.2s ease;
    }

    .btn-link:hover {
        background-color: #2980b9;
        transform: translateY(-1px);
        box-shadow: 0 4px 8px rgba(52, 152, 219, 0.3);
    }
</style>

<div class="container">
    <h1>Beranda</h1>
    <p class="subtitle">Selamat Datang di Ranspoint</p>
    <p class="description">Tempat Top Up Game Murah, Cepat, dan Terpercaya.</p>

    <table>
        <thead>
            <tr>
                <th style="width: 8%;">No</th>
                <th style="width: 25%;">Menu</th>
                <th>Keterangan</th>
                <th style="width: 18%;">Lihat</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td style="font-weight: 600; color: #1e3c72;">Menu Game</td>
                <td>Top Up Game Pilihan</td>
                <td><a class="btn-link" href="{{ route('menugame') }}">Klik Di Sini</a></td>
            </tr>
            <tr>
                <td>2</td>
                <td style="font-weight: 600; color: #1e3c72;">Profil</td>
                <td>Informasi tentang toko kami</td>
                <td><a class="btn-link" href="{{ route('profil') }}">Klik Di Sini</a></td>
            </tr>
            <tr>
                <td>3</td>
                <td style="font-weight: 600; color: #1e3c72;">Form</td>
                <td>Pengisian Form</td>
                <td><a class="btn-link" href="{{ route('pendaftaran.create') }}">Klik Di Sini</a></td>
            </tr>
            <tr>
                <td>4</td>
                <td style="font-weight: 600; color: #1e3c72;">Data</td>
                <td>Hasil Data</td>
                <td><a class="btn-link" href="{{ route('pendaftaran.index') }}">Klik Di Sini</a></td>
            </tr>
        </tbody>
    </table>
</div>
@endsection

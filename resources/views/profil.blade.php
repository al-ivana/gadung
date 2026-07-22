@extends('layouts.app')

@section('title', 'Profil Toko - RANSPOINT')

@section('content')
<style>
    .page-title {
        color: #1a365d;
        margin-bottom: 30px;
        text-transform: uppercase;
        letter-spacing: 1px;
        border-bottom: 3px solid #2b6cb0;
        padding-bottom: 10px;
        display: inline-block;
    }

    .profile-container {
        background-color: #ffffff;
        border-radius: 12px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
        overflow: hidden;
        width: 100%;
        max-width: 800px;
        border: 1px solid #e2e8f0;
    }

    .profile-table {
        width: 100%;
        border-collapse: collapse;
        text-align: left;
    }

    .profile-table th {
        background-color: #2b6cb0;
        color: white;
        font-size: 1.1rem;
        padding: 15px 20px;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        text-align: center;
    }

    .profile-table td {
        padding: 15px 20px;
        border-bottom: 1px solid #e2e8f0;
        font-size: 1rem;
        line-height: 1.6;
    }

    .profile-table td:first-child {
        font-weight: 600;
        color: #2c5282;
        width: 30%;
        background-color: #f7fafc;
        border-right: 1px solid #e2e8f0;
    }

    .profile-table tr:last-child td {
        border-bottom: none;
    }
</style>

<h2 class="page-title">Profil Toko</h2>

<div class="profile-container">
    <table class="profile-table">
        <thead>
            <tr>
                <th colspan="2">Informasi Toko</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Nama Toko</td>
                <td>RANSPOINT (TopUp Game Online)</td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>Jl. Bancar No. 007, Tuban, Jawa Timur</td>
            </tr>
            <tr>
                <td>Telepon</td>
                <td>0878-2005-0540</td>
            </tr>
            <tr>
                <td>Email</td>
                <td>ranspoint@gmail.com</td>
            </tr>
            <tr>
                <td>Deskripsi</td>
                <td>
                    RANSPOINT adalah platform Top Up Game Online terpercaya yang hadir untuk memenuhi semua kebutuhan gaming kamu.
                    Kami menyediakan layanan pengisian In-Game Currency terlengkap, mulai dari Growtopia, Pixel Worlds, Point Blank,
                    hingga berbagai game populer lainnya dengan proses yang super cepat, instan, dan aman.
                    <br><br>
                    Keamanan dan legalitas adalah prioritas utama kami — bahkan, Dosen UNIROW (Universitas Ronggolawe) sudah pernah
                    melakukan top up dan memercayakan kebutuhan gaming mereka di sini! Didukung dengan harga yang sangat kompetitif,
                    ramah di kantong mahasiswa, serta layanan responsif, RANSPOINT siap menjadi partner mabar terbaikmu.
                    Top Up murah, cepat, dan terbukti tepercaya? Ya cuma di RANSPOINT!
                </td>
            </tr>
        </tbody>
    </table>
</div>
@endsection

@extends('layouts.app')

@section('title', 'Menu Game Favorit')

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

    .menu-cards {
        display: flex;
        gap: 25px;
        flex-wrap: wrap;
    }

    .card {
        background-color: #ffffff;
        border-radius: 12px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
        overflow: hidden;
        width: 300px;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        border: 1px solid #e2e8f0;
    }

    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 25px rgba(43, 108, 176, 0.15);
    }

    .card img {
        width: 100%;
        height: 180px;
        object-fit: cover;
        border-bottom: 4px solid #2b6cb0;
    }

    .card-content {
        padding: 20px;
        text-align: center;
    }

    .card-title {
        font-size: 1.4rem;
        font-weight: bold;
        color: #2c5282;
        margin-bottom: 10px;
    }

    .card-description {
        font-size: 0.95rem;
        color: #4a5568;
        line-height: 1.5;
        margin-bottom: 20px;
    }

    .btn {
        display: inline-block;
        background-color: #3182ce;
        color: white;
        padding: 10px 20px;
        text-decoration: none;
        border-radius: 6px;
        font-weight: 600;
        transition: background-color 0.2s ease;
    }

    .btn:hover {
        background-color: #2b6cb0;
    }
</style>

<h1 class="page-title">Daftar Menu Game</h1>

<div class="menu-cards">
    <div class="card">
        <img src="{{ asset('images/growtopia.jpg') }}" alt="Growtopia">
        <div class="card-content">
            <div class="card-title">Growtopia</div>
            <p class="card-description">Jelajahi dunia sandbox kreatif tanpa batas, bangun dunia impianmu, dan bertransaksi bersama jutaan pemain lainnya.</p>
            <a href="{{ route('pendaftaran.create') }}" class="btn">Mainkan</a>
        </div>
    </div>

    <div class="card">
        <img src="{{ asset('images/pixelworlds.jpg') }}" alt="Pixel Worlds">
        <div class="card-content">
            <div class="card-title">Pixel Worlds</div>
            <p class="card-description">Game MMO sandbox platformer dengan grafis piksel yang menawan. Buat duniamu sendiri dan jalani petualangan seru.</p>
            <a href="{{ route('pendaftaran.create') }}" class="btn">Mainkan</a>
        </div>
    </div>

    <div class="card">
        <img src="{{ asset('images/pointblank.jpg') }}" alt="Point Blank">
        <div class="card-content">
            <div class="card-title">Point Blank</div>
            <p class="card-description">Uji kemampuan menembakmu dalam game FPS legendaris yang penuh aksi dan pertempuran taktis yang menegangkan.</p>
            <a href="{{ route('pendaftaran.create') }}" class="btn">Mainkan</a>
        </div>
    </div>
</div>
@endsection

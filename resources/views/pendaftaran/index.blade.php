@extends('layouts.app')

@section('title', 'Data Pendaftaran')

@section('content')
<style>
    .data-wrap {
        background: #ffffff;
        padding: 25px;
        border-radius: 12px;
        box-shadow: 0 4px 15px rgba(0,0,0,0.05);
        border: 1px solid #e2e8f0;
        overflow-x: auto;
    }
    .data-wrap h2 {
        color: #1a365d;
        margin-bottom: 20px;
        border-bottom: 3px solid #2b6cb0;
        padding-bottom: 10px;
    }
    table.data-table {
        width: 100%;
        border-collapse: collapse;
        font-size: 0.85rem;
        white-space: nowrap;
    }
    table.data-table th {
        background: linear-gradient(135deg, #1e3c72, #2a5298);
        color: white;
        padding: 10px 12px;
        text-transform: uppercase;
        font-size: 0.75rem;
    }
    table.data-table td {
        padding: 10px 12px;
        border-bottom: 1px solid #eef2f5;
        color: #4a5568;
    }
    table.data-table tr:hover { background-color: #f8fafc; }
    .action-link {
        display: inline-block;
        padding: 4px 10px;
        border-radius: 5px;
        text-decoration: none;
        font-size: 0.8rem;
        font-weight: 600;
        margin-right: 4px;
    }
    .action-edit { background-color: #3182ce; color: white; }
    .action-edit:hover { background-color: #2b6cb0; }
    .action-delete { background-color: #e53e3e; color: white; border: none; cursor: pointer; }
    .action-delete:hover { background-color: #c53030; }
    .status-msg {
        background: #f0fff4;
        border: 1px solid #9ae6b4;
        color: #276749;
        padding: 10px 16px;
        border-radius: 6px;
        margin-bottom: 16px;
    }
    .empty-msg { padding: 20px; color: #718096; }
</style>

<div class="data-wrap">
    <h2>Data Pendaftaran</h2>

    @if (session('status'))
        <div class="status-msg">{{ session('status') }}</div>
    @endif

    @if ($data->isEmpty())
        <p class="empty-msg">Belum ada data pendaftaran.</p>
    @else
        <table class="data-table">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
                <th>Asal Sekolah</th>
                <th>Nama Sekolah</th>
                <th>Matematika</th>
                <th>B. Inggris</th>
                <th>B. Indonesia</th>
                <th>Pilihan 1</th>
                <th>Pilihan 2</th>
                <th>Alasan</th>
                <th>Aksi</th>
            </tr>
            @foreach ($data as $i => $d)
            <tr>
                <td>{{ $i + 1 }}</td>
                <td>{{ $d->nama }}</td>
                <td>{{ $d->tempat_lahir }}</td>
                <td>{{ $d->tanggal_lahir }}</td>
                <td>{{ $d->jk }}</td>
                <td>{{ $d->alamat }}</td>
                <td>{{ $d->sekolah_asal }}</td>
                <td>{{ $d->nama_sekolah }}</td>
                <td>{{ $d->matematika }}</td>
                <td>{{ $d->inggris }}</td>
                <td>{{ $d->indonesia }}</td>
                <td>{{ $d->pilihan1 }}</td>
                <td>{{ $d->pilihan2 }}</td>
                <td>{{ $d->alasan }}</td>
                <td>
                    <a class="action-link action-edit" href="{{ route('pendaftaran.edit', $d) }}"
                       onclick="return confirm('Yakin ingin mengubah data ini?')">Edit</a>

                    <form action="{{ route('pendaftaran.destroy', $d) }}" method="POST" style="display:inline;"
                          onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="action-link action-delete">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    @endif
</div>
@endsection

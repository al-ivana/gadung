<?php

namespace App\Http\Controllers;

use App\Models\Pendaftaran;
use Illuminate\Http\Request;

class PendaftaranController extends Controller
{
    /**
     * Tampilkan daftar data pendaftaran (dulu: formk/data.php)
     */
    public function index()
    {
        $data = Pendaftaran::orderBy('id')->get();

        return view('pendaftaran.index', compact('data'));
    }

    /**
     * Tampilkan form pendaftaran (dulu: formk/form.php)
     */
    public function create()
    {
        return view('pendaftaran.form');
    }

    /**
     * Simpan data baru (dulu: formk/kirim.php)
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'tempat_lahir' => 'nullable|string|max:255',
            'tanggal_lahir' => 'nullable|date',
            'jk' => 'nullable|string',
            'alamat' => 'nullable|string|max:255',
            'sekolah_asal' => 'nullable|string',
            'nama_sekolah' => 'nullable|string|max:255',
            'matematika' => 'nullable|string|max:10',
            'inggris' => 'nullable|string|max:10',
            'indonesia' => 'nullable|string|max:10',
            'pilihan1' => 'nullable|string',
            'pilihan2' => 'nullable|string',
            'alasan' => 'nullable|string',
        ]);

        $pendaftaran = Pendaftaran::create($validated);

        return view('pendaftaran.hasil', ['d' => $pendaftaran]);
    }

    /**
     * Tampilkan form edit (dulu: formk/edit.php)
     */
    public function edit(Pendaftaran $pendaftaran)
    {
        return view('pendaftaran.edit', ['d' => $pendaftaran]);
    }

    /**
     * Update data (dulu: formk/update.php)
     */
    public function update(Request $request, Pendaftaran $pendaftaran)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'tempat_lahir' => 'nullable|string|max:255',
            'tanggal_lahir' => 'nullable|date',
            'jk' => 'nullable|string',
            'alamat' => 'nullable|string|max:255',
            'sekolah_asal' => 'nullable|string',
            'nama_sekolah' => 'nullable|string|max:255',
            'matematika' => 'nullable|string|max:10',
            'inggris' => 'nullable|string|max:10',
            'indonesia' => 'nullable|string|max:10',
            'pilihan1' => 'nullable|string',
            'pilihan2' => 'nullable|string',
            'alasan' => 'nullable|string',
        ]);

        $pendaftaran->update($validated);

        return redirect()->route('pendaftaran.index')->with('status', 'Data berhasil diperbarui.');
    }

    /**
     * Hapus data (dulu: formk/hapus.php)
     */
    public function destroy(Pendaftaran $pendaftaran)
    {
        $pendaftaran->delete();

        return redirect()->route('pendaftaran.index')->with('status', 'Data berhasil dihapus.');
    }
}

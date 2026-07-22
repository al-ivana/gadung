# RANSPOINT (Laravel)

Ini adalah hasil konversi website "RANSPOINT" (toko gaming online) dari PHP native
(frameset + mysqli) menjadi project **Laravel 10**, siap dijalankan di **Laragon**.

## Apa yang berubah dari versi lama

- Frameset (`Index.php`, `Header.php`, `menu.php`) diganti jadi satu layout Blade
  (`resources/views/layouts/app.blade.php`) dengan header + sidebar menu, karena
  frameset sudah tidak didukung di HTML5.
- Halaman statis `beranda.php`, `menugame.php`, `profil.php` jadi Blade view di
  `resources/views/`, dilayani oleh `PageController`.
- Folder `formk/` (form pendaftaran pakai `mysqli` manual) diubah jadi:
  - Model `App\Models\Pendaftaran` + migration `pendaftarans`
  - `App\Http\Controllers\PendaftaranController` (index, create, store, edit, update, destroy)
  - View di `resources/views/pendaftaran/`
  - Query mentah diganti Eloquent + validasi, form pakai CSRF token & method spoofing
    (`@method('PUT')` / `@method('DELETE')`) sesuai standar Laravel.
- Gambar (`growtopia.jpg`, `pixelworlds.jpg`, `pointblank.jpg`) dipindah ke `public/images/`.

## Cara menjalankan di Laragon

1. **Extract** folder `ranspoint` ini ke folder `www` milik Laragon, misalnya:
   `C:\laragon\www\ranspoint`

2. **Buka terminal di folder project** (klik kanan folder di Laragon → "Web server" →
   atau klik kanan area kosong Laragon → Terminal), lalu masuk ke folder:
   ```
   cd C:\laragon\www\ranspoint
   ```

3. **Install dependency PHP** (Laragon sudah menyediakan Composer):
   ```
   composer install
   ```

4. **Siapkan file `.env`** (kalau belum ada otomatis, copy dari contoh):
   ```
   copy .env.example .env
   php artisan key:generate
   ```

5. **Buat database MySQL** bernama `ranspoint`:
   - Buka Laragon → klik menu **Database** (akan membuka HeidiSQL), atau buka
     `http://localhost/phpmyadmin` kalau kamu pakai phpMyAdmin.
   - Buat database baru dengan nama `ranspoint`.
   - `.env` sudah diset default: `DB_DATABASE=ranspoint`, `DB_USERNAME=root`,
     `DB_PASSWORD=` (kosong) — sama seperti default Laragon. Sesuaikan kalau
     konfigurasi MySQL kamu beda.

6. **Jalankan migration** untuk membuat tabel-tabel (termasuk tabel `pendaftarans`):
   ```
   php artisan migrate
   ```

7. **Jalankan project**:
   - Cara termudah: aktifkan Laragon (Start All), lalu buka
     `http://ranspoint.test` (Laragon otomatis membuat virtual host dari nama folder), atau
   - Cara alternatif tanpa virtual host:
     ```
     php artisan serve
     ```
     lalu buka `http://127.0.0.1:8000`

## Struktur halaman

| Halaman lama              | Route baru                  | Nama route            |
|----------------------------|------------------------------|------------------------|
| `beranda.php`              | `/beranda`                  | `beranda`              |
| `menugame.php`             | `/menu-game`                | `menugame`             |
| `profil.php`               | `/profil`                   | `profil`               |
| `formk/form.php`           | `/pendaftaran/create`       | `pendaftaran.create`   |
| `formk/kirim.php`          | `POST /pendaftaran`         | `pendaftaran.store`    |
| `formk/data.php`           | `/pendaftaran`              | `pendaftaran.index`    |
| `formk/edit.php`           | `/pendaftaran/{id}/edit`    | `pendaftaran.edit`     |
| `formk/update.php`         | `PUT /pendaftaran/{id}`     | `pendaftaran.update`   |
| `formk/hapus.php`          | `DELETE /pendaftaran/{id}`  | `pendaftaran.destroy`  |

## Catatan

- File lama `profil.com` (0 byte, kosong) tidak ikut dikonversi karena memang tidak berisi apa-apa.
- Kalau Laragon kamu memakai password root MySQL (bukan default kosong), ubah
  `DB_PASSWORD` di file `.env`.

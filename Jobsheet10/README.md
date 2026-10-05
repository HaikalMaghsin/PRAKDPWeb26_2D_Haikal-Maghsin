# Jobsheet 10 - Autentikasi & Manajemen Sesi

SIMPUS-Mini milik **Haikal Maghsin**, NIM **254107020189**, kelas **TI 2D**, berdasarkan [materi Pak Dimas](https://github.com/dimas1984/PemogramanWeb2026/tree/main/kode-praktikum/jobsheet-10).

## Laporan praktikum

[Buka laporan Jobsheet 10](../Dokumentasi/Laporan/Jobsheet10.md).

## Hasil pengembangan

- Registrasi dengan `password_hash()` dan login dengan `password_verify()`.
- Session login, regenerasi ID session, logout, dan navbar sesuai status pengguna.
- Beranda dan katalog buku dapat dibuka tamu.
- Form pengelolaan buku serta semua halaman anggota membutuhkan login.
- Tugas mandiri: hanya admin boleh menghapus anggota; petugas ditolak di server.

## Menjalankan

Gunakan database PostgreSQL `simpus_mini` dan jalankan skema di [sql/01_buku_anggota.sql](sql/01_buku_anggota.sql). Jalankan juga [sql/02_users.sql](sql/02_users.sql) untuk tabel akun.

Koneksi membaca `DB_HOST`, `DB_PORT`, `DB_NAME`, `DB_USER`, dan `DB_PASS`. Di komputer Haikal, kredensial dari Jobsheet 8 sudah disalin ke `includes/koneksi.local.php`, yang diabaikan Git.

Dari root repo, jalankan `php -S localhost:8000`, lalu buka `http://localhost:8000/Jobsheet10/index.php`.

Akun baru mendapat role `petugas`. Untuk menjadikan akun sendiri admin, ubah kolom `role` menjadi `admin` pada tabel `users` lewat pgAdmin, lalu login kembali.

[Dokumentasi materi Pak Dimas](Dokumentasi/README.md) tersedia sebagai bahan belajar.

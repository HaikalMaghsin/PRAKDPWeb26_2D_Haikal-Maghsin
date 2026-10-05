# Jobsheet 9 - CRUD Lengkap

SIMPUS-Mini milik **Haikal Maghsin**, NIM **254107020189**, kelas **TI 2D**, berdasarkan [materi Pak Dimas](https://github.com/dimas1984/PemogramanWeb2026/tree/main/kode-praktikum/jobsheet-09).

## Laporan praktikum

[Buka laporan Jobsheet 9](../Dokumentasi/Laporan/Jobsheet9.md).

## Hasil pengembangan

- Tambah, tampil, edit, dan hapus buku serta anggota melalui PostgreSQL.
- Hapus melalui POST dengan konfirmasi JavaScript.
- Pencarian server memakai `ILIKE` dan pagination lima data per halaman.
- Nilai dari database di-escape sebelum ditampilkan.

## Menjalankan

Gunakan database PostgreSQL `simpus_mini` dan jalankan skema di [sql/01_buku_anggota.sql](sql/01_buku_anggota.sql).

Koneksi membaca `DB_HOST`, `DB_PORT`, `DB_NAME`, `DB_USER`, dan `DB_PASS`. Di komputer Haikal, kredensial dari Jobsheet 8 sudah disalin ke `includes/koneksi.local.php`, yang diabaikan Git.

Dari root repo, jalankan `php -S localhost:8000`, lalu buka `http://localhost:8000/Jobsheet9/index.php`.

[Dokumentasi materi Pak Dimas](Dokumentasi/README.md) tersedia sebagai bahan belajar.

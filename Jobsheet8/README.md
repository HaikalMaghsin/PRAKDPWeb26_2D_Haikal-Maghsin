# Jobsheet 8 - Koneksi PostgreSQL

Pengembangan SIMPUS-Mini milik **Haikal Maghsin**, NIM **254107020189**, kelas **TI 2D**, berdasarkan [Jobsheet 8 Pak Dimas](https://github.com/dimas1984/PemogramanWeb2026/tree/275cf8e753cc0b113b9de4d62806b1fd17ef0fd7/kode-praktikum/jobsheet-08).

## Laporan praktikum

Laporan lengkap dapat dibuka di [Dokumentasi/Laporan/Jobsheet8.md](../Dokumentasi/Laporan/Jobsheet8.md).

## Hasil penggabungan

- Skema tabel `buku` dan `anggota` tersedia di `sql/01_buku_anggota.sql`.
- `includes/koneksi.php` menghubungkan aplikasi ke PostgreSQL melalui PDO.
- Tambah buku dan anggota memakai `INSERT` prepared statement.
- Daftar buku dan anggota memakai `SELECT` dari database.
- Kartu Total Buku dan Total Anggota pada beranda membaca `COUNT(*)` dari database.
- Konfigurasi database dapat memakai environment variable `DB_HOST`, `DB_PORT`, `DB_NAME`, `DB_USER`, dan `DB_PASS`.

## Menyiapkan database

1. Buat database bernama `simpus_mini`.
2. Jalankan isi file `sql/01_buku_anggota.sql` pada database tersebut.
3. Sesuaikan kredensial PostgreSQL melalui environment variable atau nilai default di `includes/koneksi.php`.
4. Jalankan dari root repo dengan `php -S localhost:8000`, lalu buka `http://localhost:8000/Jobsheet8/index.php`.

Data pada Jobsheet 8 tersimpan di database sehingga tetap ada setelah sesi browser berakhir.

## Materi sumber

[Dokumentasi Pak Dimas](Dokumentasi/README.md) disertakan sebagai bahan belajar.

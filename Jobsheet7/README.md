# Jobsheet 7 - PHP Dasar & Form Handling

Pengembangan SIMPUS-Mini milik **Haikal Maghsin**, NIM **254107020189**, kelas **TI 2D**, berdasarkan [Jobsheet 7 Pak Dimas](https://github.com/dimas1984/PemogramanWeb2026/tree/275cf8e753cc0b113b9de4d62806b1fd17ef0fd7/kode-praktikum/jobsheet-07).

## Laporan praktikum

Laporan lengkap dapat dibuka di [Dokumentasi/Laporan/Jobsheet7.md](../Dokumentasi/Laporan/Jobsheet7.md).

## Hasil penggabungan

- Halaman SIMPUS-Mini diubah dari `.html` menjadi `.php`.
- Navbar dan footer dipakai ulang melalui `includes/header.php` dan `includes/footer.php`.
- Form tambah buku dan anggota mengirim data dengan metode `POST`.
- `proses_tambah.php` memvalidasi input di server lalu menyimpannya sementara ke session.
- Daftar buku dan anggota dirender dengan `foreach`, serta menampilkan flash message setelah proses berhasil atau gagal.
- Validasi JavaScript, pencarian, tombol hapus, dan hamburger menu dari Jobsheet 5 tetap dipertahankan.

## Cara menjalankan

Jalankan dari root repo:

```bash
php -S localhost:8000
```

Lalu buka `http://localhost:8000/Jobsheet7/index.php`.

Data Jobsheet 7 disimpan di session, sehingga bersifat sementara. Penyimpanan permanen mulai diterapkan pada Jobsheet 8.

## Materi sumber

[Dokumentasi Pak Dimas](Dokumentasi/README.md) disertakan sebagai bahan belajar.

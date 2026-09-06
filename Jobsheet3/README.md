# Jobsheet 3 — Tampilan Responsif

Pengembangan SIMPUS-Mini milik **Haikal Maghsin**, NIM **254107020189**, kelas **TI 2D**, berdasarkan [Jobsheet 3 Pak Dimas](https://github.com/dimas1984/PemogramanWeb2026/tree/2db73f56ff348f4ed0502ea2f8aedd710fb38420/kode-praktikum/jobsheet-03).

## Hasil penggabungan

- Tujuh halaman dari Jobsheet 2 tetap tersedia: beranda, daftar/tambah/edit buku, serta daftar/tambah/edit anggota.
- Sepuluh data buku, sepuluh anggota, ringkasan 55/10/10, dan palet warna milik Haikal dipertahankan.
- Seluruh halaman mendapat meta viewport dan menu hamburger CSS menggunakan checkbox.
- Tabel buku dan anggota dapat digeser horizontal tanpa melebarkan halaman.
- Kartu ringkasan tampil satu kolom pada lebar hingga 480px, dua kolom mulai 481px, dan tiga kolom mulai 1024px.
- Menu horizontal tampil mulai 768px, mengikuti langkah praktikum utama. Contoh kode Pak Dimas menggunakan batas hamburger 480px; versi gabungan ini memakai 768px.
- Checkbox menu bisa diakses dengan Tab lalu Space. Area tabel juga dapat difokuskan untuk digeser menggunakan keyboard.

## Cara menjalankan

Buka [index.html](index.html) di browser atau gunakan Live Server. Folder ini memiliki CSS sendiri sehingga dapat dijalankan terpisah dari Jobsheet 2.

Uji beranda, dua halaman daftar, dan empat form pada lebar 375px/480px, 768px, dan 1024px. Periksa menu buka/tutup, jumlah kolom ringkasan, tabel yang dapat digeser, serta lebar input form.

Form dan tombol hapus masih berupa latihan statis, sama seperti tahap sebelumnya. Penyimpanan data dan JavaScript belum menjadi materi Jobsheet 3.

## Materi sumber

[Dokumentasi Pak Dimas](Dokumentasi/README.md) disertakan sebagai bahan belajar. Contoh potongan kode di dalamnya menjelaskan versi asli; breakpoint dan tema versi gabungan dijelaskan di atas. Sumber diambil dari commit `2db73f56ff348f4ed0502ea2f8aedd710fb38420`.

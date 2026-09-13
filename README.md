# SIMPUS-Mini

SIMPUS-Mini adalah proyek praktikum sederhana untuk mata kuliah Desain dan Pemrograman Web. Proyek ini dibuat bertahap dari HTML, CSS, responsive design, UI/UX, JavaScript DOM, sampai Fetch API dengan JSON lokal.

Proyek saat ini mencakup Jobsheet 1-6. Kode di folder utama adalah hasil Jobsheet 2, sedangkan versi lanjutan tersedia di folder `Jobsheet3/` sampai `Jobsheet6/`. Semua versi tetap memakai data proyek Haikal dan disesuaikan dengan materi Pak Dimas.

- [Buka Jobsheet 3](Jobsheet3/index.html) - [Penjelasan](Jobsheet3/README.md)
- [Buka Jobsheet 4](Jobsheet4/index.html) - [Wireframe dan user flow](Jobsheet4/docs/wireframe.md)
- [Buka Jobsheet 5](Jobsheet5/index.html) - [JavaScript DOM & Event](Jobsheet5/README.md)
- [Buka Jobsheet 6](Jobsheet6/index.html) - [Fetch API & JSON](Jobsheet6/README.md)

## Fitur

Fitur yang sudah dibuat pada tahap ini:

- Halaman beranda dengan ringkasan data.
- Halaman daftar buku.
- Form tambah dan edit buku.
- Halaman daftar anggota.
- Form tambah dan edit anggota.
- Navigasi antarhalaman.
- Tampilan halaman menggunakan satu file CSS per jobsheet.
- Navigasi menggunakan Flexbox.
- Kartu ringkasan menggunakan CSS Grid.
- Tampilan responsif dengan hamburger menu.
- Pencarian tabel, validasi form, dan konfirmasi hapus dengan JavaScript.
- Data daftar buku dan anggota pada Jobsheet 6 dimuat dari file JSON.

Tombol dan form sudah dapat digunakan untuk berpindah halaman dan mencoba interaksi front-end, tetapi belum dapat menambah, mengubah, atau menghapus data secara permanen.

## Struktur Proyek

```text
.
|-- index.html
|-- buku/
|-- anggota/
|-- assets/
|-- Jobsheet3/
|-- Jobsheet4/
|-- Jobsheet5/
|-- Jobsheet6/
`-- Dokumentasi/
    |-- Laporan/
    |   |-- Jobsheet1.md
    |   |-- Jobsheet2.md
    |   |-- Jobsheet3.md
    |   |-- Jobsheet4.md
    |   |-- Jobsheet5.md
    |   `-- Jobsheet6.md
    `-- img/
```

## Cara Menjalankan

Untuk Jobsheet 1 sampai 5, halaman dapat dibuka langsung dari file `index.html` masing-masing folder atau memakai Live Server.

Untuk Jobsheet 6, gunakan Live Server atau server lokal karena `fetch()` ke file JSON biasanya diblokir jika halaman dibuka langsung memakai `file://`.

Contoh dari root proyek:

```bash
php -S localhost:8000
```

Lalu buka:

```text
http://localhost:8000/Jobsheet6/index.html
```

## Dokumentasi

Penjelasan proses pengerjaan dan screenshot hasil dapat dibaca pada:

- **[Laporan Jobsheet 1](Dokumentasi/Laporan/Jobsheet1.md)**
- **[Laporan Jobsheet 2](Dokumentasi/Laporan/Jobsheet2.md)**
- **[Laporan Jobsheet 3](Dokumentasi/Laporan/Jobsheet3.md)**
- **[Laporan Jobsheet 4](Dokumentasi/Laporan/Jobsheet4.md)**
- **[Laporan Jobsheet 5](Dokumentasi/Laporan/Jobsheet5.md)**
- **[Laporan Jobsheet 6](Dokumentasi/Laporan/Jobsheet6.md)**

## Status Proyek

Jobsheet 1-2 tersedia di folder utama. Jobsheet 3-6 tersedia di folder masing-masing dan tetap dibuat tanpa framework. Jobsheet 5 menambahkan interaksi JavaScript, sedangkan Jobsheet 6 mulai memuat data dari JSON lokal.

Login, database, dan transaksi peminjaman belum diimplementasikan.

## Akses Website

Website dapat diakses melalui domain:

- **[haikalmaghsin.my.id](https://haikalmaghsin.my.id)**

## Pembuat

**Haikal Maghsin**  
NIM 254107020189  
Kelas TI 2D

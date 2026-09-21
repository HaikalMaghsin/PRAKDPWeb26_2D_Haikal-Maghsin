# SIMPUS-Mini

SIMPUS-Mini adalah proyek praktikum sederhana untuk mata kuliah Desain dan Pemrograman Web. Proyek ini dibuat bertahap dari HTML, CSS, responsive design, UI/UX, JavaScript DOM, sampai Fetch API dengan JSON lokal.

Proyek saat ini mencakup Jobsheet 1-8. Kode di folder utama adalah hasil Jobsheet 2, sedangkan versi lanjutan tersedia di folder `Jobsheet3/` sampai `Jobsheet8/`. Semua versi tetap memakai data proyek Haikal dan disesuaikan dengan materi Pak Dimas.

- [Buka Jobsheet 3](Jobsheet3/index.html) - [Penjelasan](Jobsheet3/README.md)
- [Buka Jobsheet 4](Jobsheet4/index.html) - [Wireframe dan user flow](Jobsheet4/docs/wireframe.md)
- [Buka Jobsheet 5](Jobsheet5/index.html) - [JavaScript DOM & Event](Jobsheet5/README.md)
- [Buka Jobsheet 6](Jobsheet6/index.html) - [Fetch API & JSON](Jobsheet6/README.md)
- [Buka Jobsheet 7](Jobsheet7/index.php) - [PHP Dasar & Form Handling](Jobsheet7/README.md)
- [Buka Jobsheet 8](Jobsheet8/index.php) - [Koneksi PostgreSQL](Jobsheet8/README.md)

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
- Form pada Jobsheet 7 diproses dan disimpan sementara dengan PHP session.
- Data pada Jobsheet 8 disimpan melalui PostgreSQL dan PDO.

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
|-- Jobsheet7/
|-- Jobsheet8/
`-- Dokumentasi/
    |-- Laporan/
    |   |-- Jobsheet1.md
    |   |-- Jobsheet2.md
    |   |-- Jobsheet3.md
    |   |-- Jobsheet4.md
    |   |-- Jobsheet5.md
    |   |-- Jobsheet6.md
    |   |-- Jobsheet7.md
    |   `-- Jobsheet8.md
    `-- img/
```

## Cara Menjalankan

Untuk Jobsheet 1 sampai 5, halaman dapat dibuka langsung dari file `index.html` masing-masing folder atau memakai Live Server.

Untuk Jobsheet 6 sampai 8, jalankan server lokal. Jobsheet 7 membutuhkan PHP, sedangkan Jobsheet 8 membutuhkan PHP dan PostgreSQL.

Contoh dari root proyek:

```bash
php -S localhost:8000
```

Lalu buka:

```text
http://localhost:8000/Jobsheet6/index.html
```

Untuk versi PHP, buka `http://localhost:8000/Jobsheet7/index.php` atau `http://localhost:8000/Jobsheet8/index.php`.

## Dokumentasi

Penjelasan proses pengerjaan dan screenshot hasil dapat dibaca pada:

- **[Laporan Jobsheet 1](Dokumentasi/Laporan/Jobsheet1.md)**
- **[Laporan Jobsheet 2](Dokumentasi/Laporan/Jobsheet2.md)**
- **[Laporan Jobsheet 3](Dokumentasi/Laporan/Jobsheet3.md)**
- **[Laporan Jobsheet 4](Dokumentasi/Laporan/Jobsheet4.md)**
- **[Laporan Jobsheet 5](Dokumentasi/Laporan/Jobsheet5.md)**
- **[Laporan Jobsheet 6](Dokumentasi/Laporan/Jobsheet6.md)**
- **[Laporan Jobsheet 7](Dokumentasi/Laporan/Jobsheet7.md)**
- **[Laporan Jobsheet 8](Dokumentasi/Laporan/Jobsheet8.md)**

## Status Proyek

Jobsheet 1-2 tersedia di folder utama. Jobsheet 3-8 tersedia di folder masing-masing dan tetap dibuat tanpa framework. Jobsheet 5 menambahkan interaksi JavaScript, Jobsheet 6 memuat data dari JSON lokal, Jobsheet 7 memproses form dengan PHP, dan Jobsheet 8 menggunakan PostgreSQL.

Login dan transaksi peminjaman belum diimplementasikan. Database dasar untuk buku dan anggota tersedia pada Jobsheet 8.

## Akses Website

Website dapat diakses melalui domain:

- **[haikalmaghsin.my.id](https://haikalmaghsin.my.id)**

## Pembuat

**Haikal Maghsin**  
NIM 254107020189  
Kelas TI 2D

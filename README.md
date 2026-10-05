# SIMPUS-Mini

SIMPUS-Mini adalah proyek praktikum sederhana untuk mata kuliah Desain dan Pemrograman Web. Proyek ini dibuat bertahap dari HTML, CSS, responsive design, UI/UX, JavaScript DOM, sampai Fetch API dengan JSON lokal.

Proyek saat ini mencakup Jobsheet 1-10. Kode di folder utama adalah hasil Jobsheet 2, sedangkan versi lanjutan tersedia di folder `Jobsheet3/` sampai `Jobsheet10/`. Semua versi tetap memakai data proyek Haikal dan disesuaikan dengan materi Pak Dimas.

- [Buka Jobsheet 3](Jobsheet3/index.html) - [Penjelasan](Jobsheet3/README.md)
- [Buka Jobsheet 4](Jobsheet4/index.html) - [Wireframe dan user flow](Jobsheet4/docs/wireframe.md)
- [Buka Jobsheet 5](Jobsheet5/index.html) - [JavaScript DOM & Event](Jobsheet5/README.md)
- [Buka Jobsheet 6](Jobsheet6/index.html) - [Fetch API & JSON](Jobsheet6/README.md)
- [Buka Jobsheet 7](Jobsheet7/index.php) - [PHP Dasar & Form Handling](Jobsheet7/README.md)
- [Buka Jobsheet 8](Jobsheet8/index.php) - [Koneksi PostgreSQL](Jobsheet8/README.md)
- [Buka Jobsheet 9](Jobsheet9/index.php) - [CRUD Lengkap](Jobsheet9/README.md)
- [Buka Jobsheet 10](Jobsheet10/index.php) - [Autentikasi & Manajemen Sesi](Jobsheet10/README.md)

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

Jobsheet 9 mendukung tambah, edit, dan hapus data permanen di PostgreSQL. Jobsheet 10 menambahkan login, registrasi, logout, dan pembatasan akses berdasarkan role.

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
|-- Jobsheet9/
|-- Jobsheet10/
`-- Dokumentasi/
    |-- Laporan/
    |   |-- Jobsheet1.md
    |   |-- Jobsheet2.md
    |   |-- Jobsheet3.md
    |   |-- Jobsheet4.md
    |   |-- Jobsheet5.md
    |   |-- Jobsheet6.md
    |   |-- Jobsheet7.md
    |   |-- Jobsheet8.md
    |   |-- Jobsheet9.md
    |   `-- Jobsheet10.md
    `-- img/
```

## Cara Menjalankan

Untuk Jobsheet 1 sampai 5, halaman dapat dibuka langsung dari file `index.html` masing-masing folder atau memakai Live Server.

Untuk Jobsheet 6 sampai 10, jalankan server lokal. Jobsheet 7 membutuhkan PHP, sedangkan Jobsheet 8 sampai 10 membutuhkan PHP dan PostgreSQL.

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
- **[Laporan Jobsheet 9](Dokumentasi/Laporan/Jobsheet9.md)**
- **[Laporan Jobsheet 10](Dokumentasi/Laporan/Jobsheet10.md)**

## Status Proyek

Jobsheet 1-2 tersedia di folder utama. Jobsheet 3-10 tersedia di folder masing-masing dan tetap dibuat tanpa framework. Jobsheet 5 menambahkan interaksi JavaScript, Jobsheet 6 memuat data dari JSON lokal, Jobsheet 7 memproses form dengan PHP, dan Jobsheet 8 menggunakan PostgreSQL.

CRUD lengkap tersedia pada Jobsheet 9. Autentikasi dan aturan hapus anggota khusus admin tersedia pada Jobsheet 10. Transaksi peminjaman belum diimplementasikan.

## Akses Website

Website dapat diakses melalui domain:

- **[haikalmaghsin.my.id](https://haikalmaghsin.my.id)**

## Pembuat

**Haikal Maghsin**  
NIM 254107020189  
Kelas TI 2D

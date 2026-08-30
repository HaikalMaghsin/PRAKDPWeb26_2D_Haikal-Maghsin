# SIMPUS-Mini

SIMPUS-Mini adalah proyek praktikum sederhana untuk mata kuliah Desain dan Pemrograman Web. Proyek ini dibuat sebagai latihan menyusun halaman web menggunakan HTML5.

Pada tahap Jobsheet 1, proyek masih menggunakan HTML tanpa CSS, JavaScript, dan database. Oleh karena itu, tampilannya masih menggunakan tampilan bawaan browser dan data yang ditampilkan masih berupa data dummy.

## Fitur

Fitur yang sudah dibuat pada tahap ini:

- Halaman beranda dengan ringkasan data.
- Halaman daftar buku.
- Form tambah dan edit buku.
- Halaman daftar anggota.
- Form tambah dan edit anggota.
- Navigasi antarhalaman.
- Validasi dasar pada beberapa input form.

Tombol dan form sudah dapat digunakan untuk berpindah halaman, tetapi belum dapat menambah, mengubah, atau menghapus data sebenarnya.

## Struktur Proyek

```text
.
├── index.html
├── buku/
│   ├── list.html
│   ├── tambah.html
│   └── edit.html
├── anggota/
│   ├── list.html
│   ├── tambah.html
│   └── edit.html
└── Dokumentasi/
    ├── Laporan/
    │   └── Jobsheet1.md
    └── img/
        └── Jobsheet1/
```

## Cara Menjalankan

Proyek ini tidak membutuhkan instalasi tambahan.

### Cara pertama

1. Unduh atau clone repository ini.
2. Buka folder proyek.
3. Klik dua kali file `index.html`.
4. Halaman akan terbuka di browser.

### Menggunakan Live Server

Jika menggunakan Visual Studio Code:

1. Buka folder proyek di Visual Studio Code.
2. Pasang extension Live Server jika belum tersedia.
3. Klik kanan pada `index.html`.
4. Pilih **Open with Live Server**.

## Daftar Halaman

| Halaman | Lokasi | Keterangan |
|---|---|---|
| Beranda | `index.html` | Menampilkan sambutan dan ringkasan |
| Daftar buku | `buku/list.html` | Menampilkan data buku |
| Tambah buku | `buku/tambah.html` | Menampilkan form tambah buku |
| Edit buku | `buku/edit.html` | Menampilkan form edit buku |
| Daftar anggota | `anggota/list.html` | Menampilkan data anggota |
| Tambah anggota | `anggota/tambah.html` | Menampilkan form tambah anggota |
| Edit anggota | `anggota/edit.html` | Menampilkan form edit anggota |

## Dokumentasi

Penjelasan proses pengerjaan dan screenshot hasil dapat dibaca pada:

**[Laporan Jobsheet 1](Dokumentasi/Laporan/Jobsheet1.md)**

## Status Proyek

Jobsheet 1 telah selesai. Pengembangan berikutnya akan melanjutkan tampilan halaman menggunakan CSS.

## Pembuat

**Haikal Maghsin**  
NIM 254107020189  
Kelas TI 2D

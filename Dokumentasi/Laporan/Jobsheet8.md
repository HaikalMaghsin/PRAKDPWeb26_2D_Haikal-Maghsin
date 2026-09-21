# Laporan Praktikum Jobsheet 8

## Koneksi PostgreSQL

### Identitas

| Keterangan | Isi |
|---|---|
| Nama | Haikal Maghsin |
| NIM | 254107020189 |
| Kelas | TI 2D |
| Mata Kuliah | Desain dan Pemrograman Web |

## 1. Tujuan

Jobsheet 8 bertujuan memindahkan penyimpanan data dari session ke PostgreSQL. Materi yang diterapkan adalah pembuatan tabel dengan SQL, koneksi PDO, `INSERT` prepared statement, `SELECT`, dan statistik data pada beranda.

## 2. Pengerjaan

Saya membuat folder `Jobsheet8` sebagai lanjutan dari Jobsheet 7. File `sql/01_buku_anggota.sql` berisi tabel `buku` dan `anggota`. Koneksi ke database dipusatkan pada `includes/koneksi.php` menggunakan PDO dengan driver `pgsql`.

Kode `proses_tambah.php` tidak lagi memasukkan data ke session. Data buku dan anggota dikirim dengan prepared statement ke tabel masing-masing. Halaman daftar memakai `SELECT * ... ORDER BY id DESC`, sedangkan beranda memakai `COUNT(*)` untuk membaca jumlah data yang tersimpan.

## 3. Hasil Pengujian

| No. | Pengujian | Hasil |
|---:|---|---|
| 1 | Struktur file PHP diperiksa dengan `php -l` | Berhasil |
| 2 | Driver `pdo_pgsql` pada PHP | Tersedia |
| 3 | Skema tabel buku dan anggota | Sudah disiapkan dalam file SQL |
| 4 | Tambah buku | Menggunakan `INSERT` prepared statement |
| 5 | Tambah anggota | Menggunakan `INSERT` prepared statement |
| 6 | Daftar dan ringkasan data | Menggunakan `SELECT` dan `COUNT(*)` |

## 4. Kendala

Fitur Edit dan Hapus belum melakukan perubahan pada database karena kodenya masih berupa tombol front-end. Pada tahap ini belum ada query `UPDATE` dan `DELETE`; fitur tersebut akan menjadi pengembangan berikutnya.

## 5. Kesimpulan

Pada Jobsheet 8, sumber data SIMPUS-Mini sudah berpindah dari session ke PostgreSQL. Data baru dapat disimpan melalui prepared statement dan dibaca kembali dari tabel database, sehingga tidak bergantung pada session browser.

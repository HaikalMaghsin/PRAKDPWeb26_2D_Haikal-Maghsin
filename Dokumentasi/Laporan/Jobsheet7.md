# Laporan Praktikum Jobsheet 7

## PHP Dasar & Form Handling

### Identitas

| Keterangan | Isi |
|---|---|
| Nama | Haikal Maghsin |
| NIM | 254107020189 |
| Kelas | TI 2D |
| Mata Kuliah | Desain dan Pemrograman Web |

## 1. Tujuan

Jobsheet 7 bertujuan mengubah halaman statis menjadi aplikasi PHP sederhana. Materi yang diterapkan adalah `include`, pengolahan form dengan `POST`, validasi di server, session, render tabel memakai `foreach`, dan flash message.

## 2. Pengerjaan

Saya membuat folder `Jobsheet7` dari pengembangan Jobsheet 6. Seluruh halaman sekarang menggunakan ekstensi `.php`. Bagian header dan footer dipisahkan ke folder `includes` agar tidak perlu ditulis ulang di setiap halaman.

Form tambah buku dan anggota dikirim ke `proses_tambah.php`. Kode tersebut memeriksa field wajib, tahun terbit, dan stok sebelum data dimasukkan ke `$_SESSION`. Setelah itu pengguna diarahkan ke halaman daftar dan mendapat pesan berhasil atau gagal.

Halaman daftar mengambil array dari session lalu membuat baris tabel menggunakan `foreach`. Saya juga menyimpan file session di folder proyek supaya aplikasi dapat berjalan tanpa bergantung pada pengaturan folder session bawaan PHP.

## 3. Hasil Pengujian

| No. | Pengujian | Hasil |
|---:|---|---|
| 1 | Seluruh file PHP diperiksa dengan `php -l` | Berhasil |
| 2 | Form tambah buku dengan data valid | Berhasil disimpan ke session |
| 3 | Data baru muncul pada daftar buku | Berhasil |
| 4 | Flash message setelah tambah data | Berhasil dan hanya tampil sekali |
| 5 | Form kosong atau tahun tidak valid | Ditolak oleh validasi server |
| 6 | Pencarian, hamburger menu, dan validasi JavaScript | Tetap berjalan |

## 4. Kendala

Data Jobsheet 7 belum permanen karena kode menyimpannya pada `$_SESSION`. Ketika session dihapus atau berakhir, array buku dan anggota ikut kosong. Tombol Edit dan Hapus juga masih hanya mengubah tampilan karena belum ada kode `UPDATE` atau `DELETE` di server.

## 5. Kesimpulan

Pada Jobsheet 7, SIMPUS-Mini sudah dapat menerima data melalui PHP dan menampilkan ulang data tersebut dari session. Validasi di server membuat form tetap aman diproses walaupun validasi JavaScript tidak dijalankan.

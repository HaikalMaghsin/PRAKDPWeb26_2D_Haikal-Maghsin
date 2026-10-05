# Laporan Praktikum Jobsheet 9

## CRUD Lengkap

### Identitas

| Keterangan | Isi |
|---|---|
| Nama | Haikal Maghsin |
| NIM | 254107020189 |
| Kelas | TI 2D |
| Mata Kuliah | Desain dan Pemrograman Web |

## 1. Tujuan

Tujuan Jobsheet 9 adalah melengkapi pengelolaan buku dan anggota dengan tambah, tampil, edit, dan hapus data yang tersimpan di PostgreSQL.

## 2. Pengerjaan

Saya membuat folder `Jobsheet9` sebagai lanjutan dari Jobsheet 8. Form edit mengambil data berdasarkan `id`, lalu `proses_edit.php` memperbaruinya dengan query `UPDATE ... WHERE id = :id`.

Tombol Hapus sekarang mengirim form POST ke `hapus.php`. Konfirmasi JavaScript dilakukan sebelum form dikirim, sehingga pengguna masih bisa membatalkan penghapusan. Saya juga menambahkan pencarian dengan `ILIKE` dan pagination lima data per halaman.

## 3. Improvisasi

Saya mempertahankan tema warna dari jobsheet sebelumnya. Nilai yang ditampilkan dari database juga memakai `htmlspecialchars()` agar teks yang mengandung tanda kutip tidak merusak form.

## 4. Hasil Pengujian

| Pengujian | Hasil |
|---|---|
| Tambah buku dan anggota | Berhasil tersimpan di database |
| Edit buku dan anggota | Berhasil memperbarui data |
| Hapus melalui POST | Berhasil menghapus data |
| Membuka hapus melalui GET | Ditolak, data tetap ada |
| Pencarian judul atau nama | Berhasil menemukan data |
| Enam buku pada pagination | Lima di halaman pertama, satu di halaman kedua |
| Edit tanpa id | Kembali ke halaman daftar |

## 5. Kendala

Filter JavaScript hanya memeriksa baris yang sedang tampil. Untuk mencari seluruh data, tombol Cari mengirim kata kunci ke query `ILIKE` di server.

## 6. Kesimpulan

Pada Jobsheet 9, proses CRUD buku dan anggota sudah berjalan langsung ke PostgreSQL. Perubahan data tetap tersimpan setelah halaman dimuat ulang.

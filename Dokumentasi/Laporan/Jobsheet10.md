# Laporan Praktikum Jobsheet 10

## Autentikasi & Manajemen Sesi

### Identitas

| Keterangan | Isi |
|---|---|
| Nama | Haikal Maghsin |
| NIM | 254107020189 |
| Kelas | TI 2D |
| Mata Kuliah | Desain dan Pemrograman Web |

## 1. Tujuan

Tujuan Jobsheet 10 adalah membuat registrasi, login, logout, serta membatasi akses pengelolaan data berdasarkan sesi pengguna.

## 2. Pengerjaan

Saya membuat folder `Jobsheet10` dari hasil Jobsheet 9 dan menambahkan tabel `users`. Password registrasi disimpan menggunakan `password_hash()`, lalu diperiksa dengan `password_verify()` saat login.

File `includes/auth.php` dipanggil sebelum halaman menghasilkan HTML. Tamu tetap bisa melihat beranda dan katalog buku, sedangkan pengelolaan buku dan halaman anggota membutuhkan login. Setelah login, navbar menampilkan nama pengguna dan menu Logout.

## 3. Improvisasi

Saya mengerjakan tugas mandiri pembatasan role: hanya admin yang boleh menghapus anggota. Tombolnya disembunyikan untuk petugas dan pengecekan tetap dilakukan pada `anggota/hapus.php`. ID session juga diperbarui setelah login berhasil.

## 4. Hasil Pengujian

| Pengujian | Hasil |
|---|---|
| Registrasi akun | Berhasil, password disimpan sebagai hash |
| Username yang sudah digunakan | Ditolak |
| Login dengan password salah | Ditolak |
| Login dengan data benar | Berhasil membuka halaman anggota |
| Membuka halaman terkunci sebagai tamu | Diarahkan ke Login |
| Membuka katalog buku sebagai tamu | Berhasil |
| Logout | Akses halaman terkunci kembali ditolak |
| Petugas mencoba hapus anggota | Ditolak dengan HTTP 403 |
| Admin mengakses hapus anggota | Diizinkan |

## 5. Kendala

Akun baru otomatis mendapat role `petugas`, sehingga belum bisa menghapus anggota. Hal ini terjadi karena `proses_register.php` menetapkan role tersebut dan `hapus.php` memeriksa role admin. Akun admin dapat disiapkan melalui pgAdmin.

## 6. Kesimpulan

Pada Jobsheet 10, SIMPUS-Mini sudah memiliki autentikasi dan pembatasan akses. Password disimpan sebagai hash, halaman pengelolaan dilindungi, dan tugas pembatasan role sudah diterapkan.


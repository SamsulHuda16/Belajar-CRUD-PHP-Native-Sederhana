# Aplikasi Sarana dan Prasarana (SAPRAS)

Aplikasi Sarana dan Prasarana (SAPRAS) adalah aplikasi CRUD (Create, Read, Update, Delete) berbasis PHP Native dan MySQL yang digunakan untuk mengelola data pengguna pada sistem inventaris sarana dan prasarana. Project ini dibuat sebagai media pembelajaran dan tugas praktik untuk memahami konsep dasar pengembangan aplikasi web menggunakan PHP Native.

## 🚀 Fitur

- Menampilkan data pengguna
- Menambahkan data pengguna
- Mengubah data pengguna
- Menghapus data pengguna
- Koneksi database menggunakan MySQLi
- Konfirmasi sebelum menghapus data

## 🛠️ Teknologi yang Digunakan

- PHP Native
- MySQLi
- XAMPP / Laragon

## 📁 Struktur Project

```
Aplikasi_Sapras/
│── config/
│   └── koneksi.php
│── index.php
│── From_tambah.php
│── edit_user.php
│── hapus_user.php
```

## ⚙️ Instalasi

1. Clone repository.

```bash
git clone https://github.com/USERNAME/Aplikasi_Sapras.git
```

2. Pindahkan folder project ke direktori web server (`htdocs` atau `www`).

3. Buat database baru dengan nama:

```
apk_sarpas
```

4. Import file database (`database.sql`) ke dalam database `apk_sarpas`.

5. Sesuaikan konfigurasi database pada file:

```
config/koneksi.php
```

```php
$koneksi = mysqli_connect("localhost", "root", "", "apk_sarpas");
```

6. Jalankan web server (XAMPP/Laragon), lalu buka browser:

```
http://localhost/Aplikasi_Sapras
```

## 📌 Fitur CRUD

- **Create** → Menambah data pengguna
- **Read** → Menampilkan seluruh data pengguna
- **Update** → Mengubah data pengguna
- **Delete** → Menghapus data pengguna

## 📷 Tampilan

Tambahkan screenshot aplikasi pada bagian ini agar pengunjung repository dapat melihat tampilan aplikasi.

## 👨‍💻 Pengembang

**Samsul Huda**

Project ini dibuat sebagai tugas pembelajaran CRUD PHP Native dan diharapkan dapat menjadi referensi bagi mahasiswa atau siswa yang sedang mempelajari dasar-dasar pengembangan aplikasi web.

## 📄 Lisensi

Project ini digunakan untuk tujuan pembelajaran dan pengembangan portofolio.

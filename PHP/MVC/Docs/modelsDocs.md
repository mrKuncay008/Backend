# Mainfunc Class
app/models/Mainfunc.php

`Mainfunc` adalah kelas PHP yang menyediakan metode untuk berinteraksi dengan database MySQL menggunakan PDO. Kelas ini menyederhanakan koneksi database dan pengambilan data pengguna.

## Prerequisites

Sebelum menggunakan kelas ini, pastikan Anda memenuhi persyaratan berikut:
- PHP terinstal di server Anda.
- Database MySQL terinstal dan berjalan.
- Database dan tabel sudah ada di MySQL.

## Koneksi Database

Kelas ini menggunakan PDO untuk koneksi ke database MySQL. Koneksi dilakukan di konstruktor kelas.

## Konstruktor

```php
public function __construct()
```

Deskripsi:

- Membuat koneksi ke database MySQL dengan menggunakan PDO.
- Menggunakan DSN mysql:host=localhost;dbname=Project_002B2 untuk menghubungkan ke database Project_002B2 di localhost dengan username root dan password kosong.

Penanganan Kesalahan:

- Jika koneksi gagal, PDOException akan ditangani dan pesan kesalahan akan ditampilkan.

## Metode
```php
public function getAllUsers()
```
Deskripsi:

- Mengambil semua data dari tabel USERS di database.
- Mengembalikan data dalam format array asosiatif.

Langkah-Langkah:

- Menyiapkan pernyataan SQL SELECT * FROM USERS.
- Menjalankan pernyataan.
- Mengambil semua hasil sebagai array asosiatif.

Contoh:

```php
<?php
// Membuat instance dari Mainfunc
$mainfunc = new Mainfunc();

// Mengambil semua pengguna
$users = $mainfunc->getAllUsers();

// Menampilkan data pengguna
print_r($users);
?>
```
Output:

Array asosiatif dari semua baris dalam tabel USERS, di mana setiap baris adalah array asosiatif dengan nama kolom sebagai kunci.
Error Handling

Jika terjadi kesalahan selama koneksi database, kesalahan akan ditangani dengan menampilkan pesan kesalahan. Pastikan untuk menangani kesalahan dengan hati-hati dalam aplikasi produksi.

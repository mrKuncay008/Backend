# MVC

## Deskripsi
Program mvc di PHP.

## Struktur Folder

- **`app/`**:Direktori ini berisi inti aplikasi, termasuk logika, konfigurasi, dan struktur:

- **`views/`**: Berisi file tampilan yang bertanggung jawab untuk merender konten HTML.
- **`config/`**: Menyimpan file konfigurasi yang menentukan konstanta, pengaturan database, dan konfigurasi lain yang diperlukan.
- **`control/`**: Berisi file pengontrol yang menangani input pengguna, berinteraksi dengan model, dan merender tampilan.
- **`core/`**: Kerangka inti atau fungsi dasar yang mendukung aplikasi.
- **`models/`**: Menyimpan file model yang mengelola data dan berinteraksi dengan database.
- **`init.php`**: File inisialisasi utama yang mengatur lingkungan aplikasi.
- **`.htaccess`**: File konfigurasi Apache untuk penulisan ulang URL dan pengaturan lainnya.

### `public/`
Direktori ini berisi aset yang dapat diakses oleh publik, seperti stylesheet, file JavaScript, dan gambar:

- **`css/`**: Berisi file CSS untuk menata gaya aplikasi.
- **`js/`**: Berisi file JavaScript untuk skrip sisi klien.
- **`img/`**: Menyimpan gambar yang digunakan dalam aplikasi.
- **`index.php`**: Titik masuk utama aplikasi yang menangani semua permintaan masuk.
- **`.htaccess`**: File konfigurasi Apache untuk mengelola akses dan penulisan ulang URL untuk direktori publik.

## Instalasi
1. **Clone Repository**:
    ```bash
    git clone https://github.com/mrKuncay008/Backend.git
    ```
2. **Masuk ke Direktori Proyek**:
    ```bash
    cd PHP/MVC
    ```

## Penggunaan
Jelaskan cara menjalankan aplikasi:
1. Akses aplikasi melalui browser di `http://localhost/MVC/public`.
2. Daftar atau login menggunakan form yang disediakan.

## Database Function

- (app/core/Database.php)

## Overview

Kelas `DB` adalah pembungkus ringan di sekitar ekstensi PDO (PHP Data Objects) PHP, yang dirancang untuk memfasilitasi interaksi basis data. Kelas ini menyediakan metode untuk terhubung ke basis data MySQL, menyiapkan dan menjalankan kueri SQL, dan mengambil hasil. Kelas ini merupakan pusat operasi basis data dalam aplikasi.

## Properti

- **`$host`**: Nama host atau alamat IP server basis data, yang ditetapkan oleh konstanta `DB_HOST`.
- **`$user`**: Nama pengguna untuk terhubung ke basis data, yang ditetapkan oleh konstanta `DB_USER`.
- **`$pass`**: Kata sandi yang dikaitkan dengan pengguna basis data, yang ditetapkan oleh konstanta `DB_PASS`.
- **`$db_name`**: Nama basis data untuk terhubung, yang ditetapkan oleh konstanta `DB_NAME`.
- **`$dbh`**: Handle basis data, contoh kelas PDO yang digunakan untuk berinteraksi dengan basis data.
- **`$stmt`**: Objek PDOStatement yang digunakan untuk menyiapkan dan menjalankan kueri SQL.

## Konstruktor

### `__construct()`
Konstruktor membuat koneksi ke basis data menggunakan ekstensi PDO.

- **Nama Sumber Data (DSN)**: Menggabungkan host dan nama basis data untuk membuat string DSN.

- **Opsi**:
- `PDO::ATTR_PERSISTENT`: Mengaktifkan koneksi persisten ke basis data.
- `PDO::ATTR_ERRMODE`: Mengatur mode pelaporan kesalahan ke pengecualian.

Jika koneksi gagal, konstruktor menangkap `PDOException` dan menghentikan skrip, menampilkan pesan kesalahan.

## Metode

### `query($query)`
Menyiapkan kueri SQL untuk dieksekusi.

- **$query**: String kueri SQL yang akan disiapkan.

### `bind($param, $value, $type = null)`
Mengikat nilai ke parameter dalam pernyataan SQL yang disiapkan.

- **$param**: Parameter placeholder dalam kueri SQL (misalnya, `:id`).
- **$value**: Nilai yang akan diikat ke parameter.
- **$type**: (Opsional) Tipe data parameter (misalnya, `PDO::PARAM_INT`). Jika tidak ditentukan, maka akan ditentukan berdasarkan tipe nilai.

### `execute()`
Mengeksekusi pernyataan yang telah disiapkan. Metode ini harus dipanggil setelah mengikat parameter yang diperlukan.

### `resultSet()`
Mengeksekusi pernyataan yang telah disiapkan dan mengembalikan semua hasil sebagai array asosiatif. Biasanya digunakan untuk mengambil beberapa baris dari kueri.

### `resultSingle()`
Mengeksekusi pernyataan yang telah disiapkan dan mengembalikan satu hasil sebagai array asosiatif. Biasanya digunakan untuk mengambil satu baris.

## Example Usage

```php
$db = new DB();

// Select multiple records
$db->query("SELECT * FROM users");
$users = $db->resultSet();

// Select a single record
$db->query("SELECT * FROM users WHERE id = :id");
$db->bind(':id', 1);
$user = $db->resultSingle();
```


# User list Function
/app/models/user_list,php


## Gambaran Umum

Kelas `users_list` adalah model yang berinteraksi dengan tabel `USER` dalam basis data. Kelas ini menggunakan kelas `DB` untuk menangani kueri basis data, khususnya untuk mengambil daftar semua pengguna dari tabel. Kelas ini biasanya digunakan untuk mengelola data pengguna dalam aplikasi.

## Properti

- **`$table`**: Nama tabel basis data, ditetapkan ke `'USER'`.
- **`$db`**: Contoh kelas `DB`, yang digunakan untuk menjalankan kueri basis data.

## Konstruktor

### `__construct()`
Konstruktor menginisialisasi kelas `users_list` dengan membuat contoh kelas `DB`. Contoh ini disimpan dalam properti `$db` dan digunakan untuk menjalankan kueri basis data.

## Metode

### `getAllUsers()`
Metode ini mengambil semua rekaman dari tabel `USER`.

- **Permintaan SQL**: Metode ini menyiapkan permintaan SQL untuk memilih semua kolom dari tabel `USER`.
- **Eksekusi**: Permintaan dieksekusi menggunakan metode `resultSet()` dari kelas `DB`, yang mengembalikan semua hasil sebagai array asosiatif.

#### Contoh Penggunaan

```php
$users = new users_list();
$allUsers = $users->getAllUsers();

foreach ($allUsers as $user) {
echo $user['username']; // Dengan asumsi 'username' adalah kolom dalam tabel USER
}
```
# Dom Content Function Javascript

```javascript
document.addEventListener('DOMContentLoaded', function() {...})
```

Metode yang digunakan untuk mengeksekusi kode JavaScript setelah seluruh konten HTML pada halaman web telah dimuat dan diproses oleh browser, tetapi sebelum semua gambar, style sheet, dan sub-frame selesai dimuat.

## Menunggu hingga DOM Sepenuhnya Dimuat:
- DOMContentLoaded adalah event yang di-trigger ketika seluruh struktur DOM (Document Object Model) dari halaman web telah sepenuhnya dimuat dan siap diakses. Namun, ini terjadi sebelum semua gambar, CSS, dan elemen lain yang memerlukan waktu untuk memuat selesai. Ini berarti bahwa Anda bisa mulai mengakses dan memanipulasi elemen-elemen HTML segera setelah halaman siap, tanpa menunggu elemen-elemen lainnya seperti gambar atau stylesheet selesai dimuat.

## Memastikan Elemen HTML Ada:
- Dengan menggunakan event ini, Anda memastikan bahwa semua elemen HTML yang Anda coba akses atau manipulasi dengan JavaScript sudah ada dan dapat diakses. Jika Anda mencoba mengakses elemen-elemen ini sebelum halaman sepenuhnya dimuat, maka elemen-elemen tersebut mungkin belum ada di DOM, yang dapat menyebabkan kesalahan atau perilaku yang tidak diinginkan.

Dalam Kasus Login di buat seperti berikut: 

```javascript
document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('loginForm').addEventListener('submit', function(event) {
    // Isi Logika
    /* 
        - loginForm = dari Id di form html
        - submit = untuk fungsi name='submit' di button html project
    */
    });
});

```
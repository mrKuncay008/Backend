## Membuat Gallery Kucing

- Membuat Page untuk menampilkan gallery flex box
- di buat light box saat di klick maka akan muncul nama kucing dan sifat nya.

# Documentation

## Mengabil data Api
Untuk menyimpan data API ke dalam variable Js, ini membutuhkan metode Asycronus atau Promise.
Dengan ini tidak perlu mendowload data json dan di simpan ke dalam array karena akan memakan banyak line atau membuat tidakk rapih.

Contoh:
```js
// URL API
const catsApi = 'https//:url-api';

// Fungsi untuk mendapatkan data dari API
async function fetchData() {
  try {
    // Mengambil data dari API
    const response = await fetch(apiUrl);

    // Memeriksa apakah response OK
    if (!response.ok) {
      throw new Error('Network response was not ok');
    }

    // Mengonversi data JSON ke JavaScript
    const dataArray = await response.json();

    // Menampilkan data di konsol (atau menyimpannya di variabel lain)
    console.log(dataArray); 
} catch(eror){
  // Code eror
}}
```

Untuk Mencari atau menampilkan object sesuai parameter.
```js
const findAllCat = catArray.filter(({origin}) => origin == 'United States'); // Menampilkan Object pertama menurut dari tempat asal
        console.log(findAllCat);
```

## Axios

## Axios vs Fetch
fetch API:
Ketika menggunakan fetch, respons yang Anda terima adalah objek Response yang memiliki metode seperti .json(), .text(), dll. Untuk mendapatkan data JSON dari respons tersebut, Anda harus memanggil response.json().
    
Axios:
Axios adalah library HTTP yang lebih tinggi tingkatnya dibandingkan dengan fetch. Axios secara otomatis mengonversi data respons menjadi format yang sesuai (misalnya, JSON) dan meletakkannya dalam properti data dari objek respons. Oleh karena itu, Anda langsung bisa mengakses data JSON melalui res.data tanpa perlu melakukan konversi manual.

Sintax Axios:
Dalam Axios, respons dari permintaan HTTP disertakan dalam objek yang biasanya disebut response.
Objek ini memiliki beberapa properti, termasuk:

- data: Mengandung data respons yang sudah diproses dan siap digunakan.
- status: Status HTTP dari respons (misalnya, 200, 404, 500).
- headers: Header dari respons.
- config: Konfigurasi permintaan yang digunakan.
- request: Objek permintaan yang digunakan.

## Api Command Cat_api
`${https://api.thecatapi.com/v1/breeds/id}` mengambil data sesuai id

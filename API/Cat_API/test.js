// https://api.thecatapi.com/v1/breeds
const catsApi = 'https://api.thecatapi.com/v1/breeds';

const fetchData = async () => {

    console.log("Please Wait !! .....\n");

    try{
        // Mengambil data api
        const respon = await fetch(catsApi);
        // Check Connect jika gagal makan failed
        if(!respon.ok) {
            throw new Error("Sysncronation Failed !!");
        }
        // Menconversi data API menjadi json dagar bisa di masukan ke js array
        const catArray = await respon.json();

        //const findCat = catArray.find(({origin}) => origin == 'United States'); // Mencari Object pertama menurut dari tempat asal
        // console.log(findCat);

        // const findAllCat = catArray.filter(({origin}) => origin == 'United States'); // Menampilkan Object pertama menurut dari tempat asal
        // console.log(findAllCat);
        // console.log(`Jumlah Total Data: ${findAllCat.length}`);
        
        console.log(catArray.length);
        console.log(typeof catArray);
        
        return catArray;
    } catch(error) {
        // Menangani eror jika terjadi eror
        console.error('Erorr Jhonn !!', error);
    }
}

fetchData();

// Menggunakan Libary Axios
const axios = require('axios');

const getCat = async () => {
    try {
        const res = await axios.get(catsApi);

        // Menconversi data API menjadi json dagar bisa di masukan ke js array
        const axiosArr = await res.data;
        
        const findCat = axiosArr.filter(({origin}) => origin == 'United States'); // Mencari Object pertama menurut dari tempat asal
        console.log(findCat);

        return axiosArr;
        
    } catch (error) {
        console.error("Error Massee !!", error);
    }
}

getCat();
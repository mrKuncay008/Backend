// API https://icanhazdadjoke.com/

// const jokes = document.querySelector('#joke');
// const tombol = document.querySelector('button');

// const addFunc = async () => {
//   const funcText = await getFunc();
//   const newLi = document.createElement('li');
//   newLi.append(funcText);
//   jokes.append(newLi);
// };

// const getFunc = async () => {
//     try {
//         const config = {
//             headers: {
//                 Accept: 'application/json',
//             },
//         };
//         const respon = await axios.get('https://imamrenaldygumay.com/sipwpusri/api/blogs',config);
//         const joke = respon.data.results; // results adalah jumlah semua array data 
//         
//         const jokeList = document.getElementById('joke');
//         jokeList.innerHTML = '';
// 
//         joke.forEach(jokeData => {
//             // Buat elemen <li> untuk menampilkan joke
//             const textJoke = document.createElement('li');
//             textJoke.textContent = jokeData.joke;
//             jokeList.appendChild(textJoke);
//         });
//         
//         console.log(respon);   
//         // return respon.data;
// 
//     } catch (error) {
//         console.error(`Not Avaible Jokes ${error}`);
//     }
// };
// Define the API URL
const apiUrl = 'https://imamrenaldygumay.com/sipwpusri/api/blogs';
const jokes = document.querySelector('#joke');
const tombol = document.querySelector('button');
const newLi = document.createElement('li');

fetch(apiUrl)
  .then(response => {
    if (!response.ok) {
        throw new Error('Network response was not ok');
    }
    return response.json();
  })
  .then(data => {
    console.log(data);
  })
  .catch(error => {
    console.error('Error:', error);
  });

// const axios = require('axios');
// 
// const jokeFunc = async() => {
//     try {
//         const config = { headers: {
//                             Accept: 'application/json',
//                         },
//                     };
//         const respon = await axios.get('https://icanhazdadjoke.com/search',config);
//         const joke = respon.data.results; // results adalah jumlah semua array data
//         
//         console.log(joke.length);
// 
//     } catch (error) {
//         console.error(`Not Avaible Jokes ${error}`);
//     } 
// }
// jokeFunc();
// tombol.addEventListener('click', addFunc);
const data = {
    "current": {
       "dt":1684929490,
       "sunrise":1684926645,
       "sunset":1684977332,
       "temp":292.55,
       "feels_like":292.87,
       "pressure":1014,
       "humidity":89,
       "dew_point":290.69,
       "uvi":0.16,
       "clouds":53,
       "visibility":10000,
       "wind_speed":3.13,
       "wind_deg":93,
       "wind_gust":6.71,

    }
}

// contoh check JSON file di browser, mengunakan JSON.parse(nama_var)
// contoh: data.current.feels_like 

// contoh JSON.stringify

const Kucing = {
    "Kuncay": {
        "JK": "L",
        "TGL": "20-02-2021",
        "Warna": "Hitam"
    },
    "Popy": {
        "JK": "L",
        "TGL": "20-02-2022",
        "Warna": "Hitam-Putih"
    },
    "Oren": {
        "JK": "L",
        "TGL": "20-07-2022",
        "Warna": "Oren Belang"
    }
}
const Val = JSON.stringify(Kucing);
console.log(Val);

const Var = JSON.stringify(data)
console.log(Var);

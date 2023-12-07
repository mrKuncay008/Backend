<?php
    // Konfigurasi koneksi ke database /htdocs
    $host = "localhost";
    $username = "root";
    $password = "password";
    $database = "pren";
    
    $conn = new mysqli($host, $username, $password, $database);
    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    // Endpoint untuk menerima permintaan dari aplikasi React
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        $result = array();
        // GET untuk menampilkan pesan Kalau POST baru menerima data yang di ambil dari server
        // Di sini Anda dapat menulis kode untuk berinteraksi dengan database
        // Misalnya, membaca data dari database dan mengirimkannya sebagai respons
        $query = "SELECT * FROM user_details";
        $query_result = $conn->query($query);
    
        if ($query_result->num_rows > 0) {
            while ($row = $query_result->fetch_assoc()) {
                $result[] = $row;
            }
        }
    
        // Mengirim respons sebagai JSON
        header('Content-Type: application/json');
        echo json_encode($result);
    } else {
        // Metode HTTP tidak didukung
        echo ("Hallo Dari Backend");
        header('Allow: POST');
    }
    
    $conn->close();
    
?>
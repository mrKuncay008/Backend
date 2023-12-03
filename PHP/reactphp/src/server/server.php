<?php
    header('Access-Control-Allow-Origin: http://localhost:3000');
    $user = $_POST['name'];
    echo("Hallo Dari Server $~$user ");

    $servername = "localhost";
    $username = "root";
    $password = "";
    
    // Create connection
    $conn = mysqli_connect($servername, $username, $password);
    
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    echo "Connected successfully";
    
?>

<!-- folder C://htdocs/cobareact -->
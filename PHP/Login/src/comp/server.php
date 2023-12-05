<?php 
    header("Access-Control-Allow-Origin: http://localhost:5173");
    header("Access-Control-Allow-Headers: *");
    header("Access-Control-Allow-Methods: POST");
    $conn = new mysqli("localhost", "root", "password", "login");

    if (mysqli_connect_error()) {
        echo mysqli_connect_error();
        exit();
    } else {
        $eData = file_get_contents("php://input");
        $dData = json_decode($eData, true);

        $user = isset($dData["User"]) ? $dData["User"] : "";
        $pass = isset($dData["Pass"]) ? $dData["Pass"] : "";
        $result = "";

        if ($user != "" and $pass != "") {
            $sql = "SELECT * FROM user_details WHERE username='$user' AND password='$pass';";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("ss", $user, $pass);
            $stmt->execute();
            $res = $stmt->get_result();

            if ($res->num_rows != 0) {
                $row = $res->fetch_assoc();
                if ($pass != $row['Pass']) {
                    $result = "Password Salah";
                } else {
                    $result = "Loggin berhasil !! Please Waiting ....";
                }
            } else {
                $result = "Username Salah !!";
            }
            error_log("Ada Yang salah");
        } 
        $conn->close();
        $response = array("result" => $result);
        echo json_encode($response);
        error_log("Failed to connect to database!", 0);
    }
    
?>
<?php
    header("Access-Control-Allow-Origin: http://localhost:5173");
    header("Access-Control-Allow-Headers: *");
    header("Access-Control-Allow-Methods: POST");
    $conn = new mysqli("localhost", "root", "password", "basisdata_tugas10");

    if (mysqli_connect_error()) {
        echo mysqli_connect_error();
        echo "Connect success";
        exit();
    } else {
        $eData = file_get_contents("php://input");
        $dData = json_decode($eData, true);

        $user = isset($dData["User"])
        $pass = isset($dData["Pass"])
        $result = "";

        if ($user != "" and $pass != "") {
            $sql = "SELECT * FROM STUDENT WHERE first_name='$user'  Address='$pass';";
            $res = mysqli_query($conn, $sql);

            if (mysqli_num_rows($res) !=0) {
              $row = mysqli_fetch_array($res);
              if ($pass != $row['Pass']) {
                $result = "Password Salah !!";
              }
              else {
                $result = "Login Berhasil!! Please Wait !!"
              }
            }
            else {
                $result = "Username Salah !!";
            }
            error_log("Ada Yang salah");
        }
        $conn->close();
        $response = array("result" => $result);
        echo json_encode($response);
    }

?>

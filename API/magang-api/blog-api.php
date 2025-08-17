<?php 
	
	//  Koneksi Database
	$conn = mysqli_connect('localhost','root','','flutter_test');
    if (!$conn) {
        die("Connection Failed");
    }

    $query = "SELECT id, `author`, `image_base64`, `topics`, `title`, `synopsis` FROM images";
    $res = mysqli_query($conn, $query);

    if(mysqli_num_rows($res) > 0 ){
        $response = array();
        $response["data"] = array();

        while($row = mysqli_fetch_assoc($res)){
            $data = array();
            $data["id"] = $row["id"];
            $data['author'] = $row["author"];
            $data['image_base64'] = $row["image_base64"];
            $data['topics'] = $row["topics"];
            $data['title'] = $row["title"];
            $data['synopsis'] = $row["synopsis"];
            
          array_push($response["data"], $data);
        }
        echo json_encode($response);

      }else {
        $response["message"]="tidak ada data";
        echo json_encode($response);
      } 
      
      mysqli_close($conn);
 ?>
<?php 
	
	//  Koneksi Database
	$con = mysqli_connect('localhost','root','0343Ahub6453@','Latihan');
	
	function query($query) {

		global $con;
		$select = mysqli_query($con, $query);
		$rows = [];
		while ($tampil = mysqli_fetch_assoc($select)) {
			
			$rows[] = $tampil;
		}
		return $rows;
	}

	function add($data){

		global $con;
		// ambil data dari tiap form
		$n= $data['Nama'];
		$j= $data['Jumlah'];
		$p= $data['Pabrik'];
		$a= $data['AKL'];
		$e= $data['EXP'];
	
		// Query insert data
		$query = "INSERT INTO GudangSumifin VALUES ('0','$n','$j','$p','$a','$e')";
		mysqli_query($con,$query);
		return mysqli_affected_rows($con);
	}

 ?>
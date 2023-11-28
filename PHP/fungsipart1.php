<?php 
	// koneksi DB
	$connect = mysqli_connect('localhost','root','0343Ahub6453@','latihan1');

	function query($query) {
		global $connect;
		$hasil= mysqli_query($connect, $query);
		$rows = [];
		while ($output = mysqli_fetch_assoc($hasil)) {
			$rows[] = $output;
		}
		return $rows;
	}

 ?>
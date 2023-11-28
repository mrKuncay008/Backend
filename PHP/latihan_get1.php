<?php 
	if (!isset($_GET["Nama"])) {
		header("Location: latihan_get0.php");
		exit;
	}
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Detail Mahasiswa </title>
</head>
<body>
	<img src="img/<?php $_GET["gambar"]; ?>">
	<ul>
	 <!-- <img src="uwu.jpg" style="width: 100px; height: 95px;">  -->
		<li> 
			<?php 
				$nama = $_GET["Nama"];
				 echo $nama;?>
		</li>
			
		<li> 
			<?php 
				$nim = $_GET["nim"];
				echo $nim; ?>
		</li>
		
		<li>
			<?php 
				$prodi = $_GET["prodi"];
				echo $prodi; ?>
		</li>

		<li>
			Suka Makan Bersama asima meo
		</li>
	</ul>
	<p>
		<a href="latihan.php">
		Kembali
	</p>
</h3>
</body>
</html>
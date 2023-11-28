<?php 

require 'functions.php';
	if ( isset($_POST["submit"])) {
		// var_dump($_POST);
		
		// chek susses / not
		if (add($_POST) > 0) {
			echo "
					<script>
							alert('Data is Succsess add');
							document.location.href = 'index.php'
					</script>
				";
		}
		else {
			echo "
					<script>
							alert('Data is Failed to add!');
					</script>
				";
			echo "<br>";
			echo mysqli_error($con);
		}
	}

 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Input New</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<style type="text/css">
		
		body {
			
			max-width: 500px; 
			margin: auto; 
			background: whitesmoke; 
			padding: 10px;	
		}
	</style>
</head>
<body>
	<h2>Tambah Barang</h2>

	<form action="" method="post">

		<div class="input-group mb-3">
		  <span class="input-group-text">Nama</span>
		  <input type="text" name="Nama" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" id="Nama">
		</div>

		<div class="input-group mb-3">
		  <span class="input-group-text" >Jumlah</span>
		  <input type="text" name="Jumlah" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" id="Jumlah">
		</div>

		<div class="input-group mb-3">
		  <span class="input-group-text" id="inputGroup-sizing-default">Pabrik</span>
		  <input type="text" name="Pabrik" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" id="Pabrik">
		</div>

		<div class="input-group mb-3">
		  <span class="input-group-text" id="inputGroup-sizing-default">AKL</span>
		  <input type="text" name="AKL" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" id="AKL">
		</div>

		<div class="input-group mb-3">
		  <span class="input-group-text" id="inputGroup-sizing-default">Expaied</span>
		  <input type="text" name="EXP" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" id="EXP">
		</div>
		<button type="submit" name="submit" class="btn btn-dark">Submit</button>
	</form>
</body>
</html>
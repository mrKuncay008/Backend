<?php 
	//  Koneksi Database
	$con = mysqli_connect('localhost','root','0343Ahub6453@','Latihan');
	$select = mysqli_query($con, "SELECT * FROM GudangSumifin");

	// $gud = mysqli_fetch_row($select);
	// var_dump($gud[4]);
	// $gud = mysqli_fetch_assoc($select);
	// var_dump($gud["Nama"])
	// $gud = mysqli_fetch_object($select);
	// var_dump($gud -> Nama);

	// 	while ($gud = mysqli_fetch_assoc($select)) {
	// 	var_dump($gud);
	// }

 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Latihan input data</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body style="max-width: 500px; margin: auto; background: whitesmoke; padding: 10px;">

	<h2 style="font-weight: bold; color: gray;">Gudang Sumifin</h2>
	<table class="table table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Action</th>
      <th scope="col">Nama</th>
      <th scope="col">Jumlah</th>
      <th scope="col">Pabrik</th>
      <th scope="col">AKL</th>
      <th scope="col">Exp</th>
    </tr>
  </thead>
  <tbody>
  		<?php $i = 1; ?>
    	<?php while($tampil = mysqli_fetch_assoc($select)) :?>
    <tr>
      <th scope="row"> <?= $i;?></th>
      <td> <a href=""> Edit </a> / <a href=""> Delete </a> </td>
      	php jika di dalam html wajib menggunakan ?= 
      <td> <?= $tampil["Nama"]; ?> </td>
      <td> <?= $tampil["Jumlah"]; ?> </td>
      <td> <?= $tampil["Pabrik"]; ?> </td>
      <td> <?= $tampil["AKL"]; ?> </td>
      <td> <?= $tampil["EXP"]; ?> </td>
    </tr>
    	<?php $i++; ?>
  		<?php endwhile; ?>
  </tbody>
</table>

</body>
</html>
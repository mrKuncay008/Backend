<?php 
  require 'fungsipart1.php';

  //ambil data dari table Datasiswa
  $hasil = mysqli_query($connect, "SELECT * FROM Datasiswa");
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<title>input data</title>
</head>
<body>
	<h1>hallo</h1>
	<table class="table">
  <thead class="table-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Action</th>
      <th scope="col">Photo</th>
      <th scope="col">Name</th>
      <th scope="col">Nim</th>
      <th scope="col">Fakultas</th>
    </tr>
  </thead>
  <tbody> 
    <?php $i = 1; ?>
    <?php foreach ($hasil as $output) : ?>
    <tr>
      <th scope="row"><?= $i; ?></th>
      <td><button type="button" class="btn btn-info btn-sm">Add | Del</button></td>
      <td><img src="gambarsis/<?= $output["Photo"]; ?>" width="60" height="40"></td>
      <td><?= $output["Nama"]; ?></td>
      <td><?= $output["Nim"]; ?></td>
      <td><?= $output["Fakultas"]; ?></td>
    </tr>
    <?php $i++; ?>
    <?php endforeach; ?>
  </tbody>
</table>
</body>
</html>
<?php
echo "<br>";
$k = [
["mansur hura","Lagi Blajar Array"],
["Bareng Kuncay","Belajar PHP",
"gambar" => "uwu.jpg"],
];
$ti = [
[   "Nama" => "Muhammad Frendi", 
"NIM" => "41122105",
"Prodi" => "T.Informatika",
"gambar" => "uwu.jpg"
],
[
"Nama" =>"Muhammad Mansur",
"NIM" => "41123225", 
"Prodi" =>"T.Informatika",
"gambar" => "mansur.jpg"
],
[    
"Nama" =>"Muhammad Kuncay", 
"NIM" => "41122434", 
"Prodi" =>"T.Informatika"
],
[    "Nama" =>"Aisma Meo Meo", 
"NIM" => "41122234", 
"Prodi" =>"Ilmu.Komunikasi"
],
];
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP Learning </title>
  </head>
  <body>
    <h1>Lagi belajar PHP
    </h1>
    <img src="mansur.jpg" style="width: 100px; height: 90px;">
    <table class="table table-dark table-striped">
      <thead>
        <tr>
          <th scope="col">#
          </th>
          <th scope="col">Nama Mahasiswa
          </th>
          <th scope="col">Kampus
          </th>
          <th scope="col">Alamat
          </th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1
          </th>
          <td>
            <a href="latihan_get1.php?Nama=<?php echo $ti[0]["Nama"]; ?>
                     &nim=<?php echo $ti[0]["NIM"]; ?>
                     &prodi=<?php echo $ti[0]["Prodi"]; ?>
                     &gambar=<?php echo $ti[0]["gambar"] ?>"> 
              <?php echo $ti[0]["Nama"]; ?> 
            </a>
          </td>
          <td>Undira</td>
          <td> Jakarta </td>
        </tr>
        <tr>
          <th scope="row">2
          </th>
          <td>
            <a href="latihan_get1.php?Nama=<?php echo $ti[1]["Nama"];?>
                    &nim=<?php echo $ti[1]["NIM"]; ?>
                    &prodi=<?php echo $ti[1]["Prodi"]; ?>"> 
              <?php echo $ti[1]["Nama"]; ?>
              </td>
          <td>Mercu Buana</td>
          <td> Tangerang </td>
        </tr>
        <tr>
          <th scope="row">3
          </th>
          <td> 
            <a href="latihan_get1.php?Nama=<?php echo $ti[2]["Nama"];?>
                    &nim=<?php echo $ti[2]["NIM"]; ?>
                    &prodi=<?php echo $ti[2]["Prodi"]; ?>"> 
              <?php echo $ti[2]["Nama"]; ?>
             <td>Univ Indo </td>
             <td> Nganjuk </td>
              </tr>
            <tr>
              <th scope="row">4
              </th>
              <td> 
                <a href="latihan_get1.php?Nama=<?php echo $ti[3]["Nama"];?>
                         &nim=<?php echo $ti[3]["NIM"]; ?>
                         &prodi=<?php echo $ti[3]["Prodi"]; ?>"> 
                  <?php echo $ti[3]["Nama"]; ?>
                 <td> STT Pomosda </td>
                 <td> Depok </td>
              </tr>
      </tbody>
    </table>
        <br>
        <h2> Foreach function 
          <br>
        </h2>
        <h2> 
          <?php foreach ($k as $manggil): ?> 
        </h2>
        <img src="img/
                  <?php $manggil["gambar"]; ?>">
        <p> 
          <?php echo $manggil[0];?> 
      </P>
      <p> 
        <?php var_dump ($manggil[1]);?> 
      </p> 
      <?php endforeach; ?> 
      <h2> Endforeach function 
        <br>
      </h2>
      </body>
    </html>

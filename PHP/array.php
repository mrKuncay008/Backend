<?php

    echo "<br>";

    $k = [
            ["mansur hura","Lagi Blajar Array"],
            ["Bareng Kuncay","Belajar PHP"],
        ];

    $ti =
        [
            [   "Nama" => "Muhammad Frendi", 
                "NIM" => "41122105",
                "Prodi" => "T.Informatika"
            ],

            [
                 "Nama" =>"Muhammad Mansur",
                 "NIM" => "41123225", 
                 "Prodi" =>"T.Informatika"
            ],

            [    "Nama" =>"Muhammad Kuncay", 
                 "NIM" => "41122434", 
                 "Prodi" =>"T.Informatika"
            ],
        ];
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP Learning</title>
</head>
<body>

    <h1>Lagi belajar PHP</h1>
    <table class="table table-dark table-striped">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Nama Mahasiswa</th>
                      <th scope="col">NIM</th>
                      <th scope="col">Prodi</th>
                    </tr>
                  </thead>
                  <tbody>q
                <tr>
                      <th scope="row">1</th>
                      <td><?php echo $ti[0]["Nama"]?></td> 
                      <td><?php echo $ti[0]["NIM"]?></td> 
                      <td><?php echo $ti[0]["Prodi"]?></td>
                </tr>

                <tr>
                      <th scope="row">2</th>
                      <td><?php echo $ti[1]["Nama"]?></td> 
                      <td><?php echo $ti[1]["NIM"]?></td> 
                      <td><?php echo $ti[1]["Prodi"]?></td> 
                </tr>

                <tr>
                      <th scope="row">3</th>
                      <td><?php echo $ti[2]["Nama"]?></td> 
                      <td><?php echo $ti[2]["NIM"]?></td> 
                      <td><?php echo $ti[2]["Prodi"]?></td> 
            </tr>
        </tbody>
    </table>
    <br>

    <h2>
        Foreach function <br>
    </h2>
    
    <h2>    
        <?php foreach ($k as $manggil): ?>
    </h2>
            <p> <?php echo $manggil[0];?> </P>
            <h3> <?php echo $manggil[1];?> </h3>
        
        <?php endforeach; ?>
        <h2>
            Endforeach function <br>
        </h2>
    </body>
</html>

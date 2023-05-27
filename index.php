<?php
require 'functions.php';
$car = query("SELECT * FROM mobil");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CariMobilku</title>
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
    <nav class="atas">
          <p><img src="img/headerr.jpg"width="100%" height="250"></p>
            

        
    <nav class="menu">
        <h1><img src="img/logo.jpeg"width="100"></h1>
        <ul>
            <li><a href="index.php">HOME</a></li>
            <li><a href="index.php">DAFTAR MOBIL</a>
                <ul class="dropdown">
                    <li><a href="honda.php">Honda</a></li>
                    <li><a href="suzuki.php">Suzuki</a></li>
                    <li><a href="toyota.php">Toyota</a></li>
                    <li><a href="daihatsu.php">Daihatsu</a></li>
                </ul>
            </li>
            <li><a href="">ADMIN</a>
            <ul class="dropdown">
                    <li><a href="login.php">Log in</a></li>
                </ul>
            </li>
        </ul>
        
<br><br> 
<br><br>          

    <br><br>
    <table border="1" cellpadding ="30" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>ID Mobil</th>
            <th>Merk</th>
            <th>Warna</th>
            <th>Tahun Pembuatan</th>
            <th>Status Pajak</th>
            <th>Gambar</th>
            <th>Beli</th>
            <th>Status</th>
        </tr>
<?php $i =1; ?>
<?php foreach ($car as $row) : ?>
        <tr>
            <td><?=$i; ?></td>
            <td><?= $row["idmobil"]; ?></td>
            <td><?= $row["merk"]; ?></td>
            <td><?= $row["warna"]; ?></td>
            <td><?= $row["tahunpembuatan"]; ?></td>
            <td>
            <a href="cekpajak.php?id=<?=$row["idmobil"]; ?>">CEK PAJAK</a>
            </td>
            <td><img src="img/<?= $row["gambar"]; ?>" width="100"></td>
            <td>
            <a href="pembeli.php?id=<?=$row["idmobil"]; ?>">Beli</a>
            </td>
            <td><img src="img/<?= $row["terjual"]; ?>" width="100"></td>
            
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>

</body>
</html>



<?php
require 'functions.php';
$car = query("SELECT * FROM mobil where merk = 'Daihatsu'");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<nav class="atas">
          <p><img src="img/headerr.jpg"width="100%" height="250"></p>
<nav class="menu">
        <h1><img src="img/logo.jpeg"width="100"></h1>
        <ul>
            <li><a href="index.php">HOME</a></li>
            <li><a href="">DAFTAR MOBIL</a>
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

    <table border="1" cellpadding ="50" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>ID Mobil</th>
            <th>Merk</th>
            <th>Tahun Pembuatan</th>
            <th>Pajak Berakhir</th>
            <th>Status Pajak</th>
            <th>Gambar</th>
        </tr>
<?php $i =1; ?>
<?php foreach ($car as $row) : ?>
        <tr>
            <td><?=$i; ?></td>
            <td><?= $row["idmobil"]; ?></td>
            <td><?= $row["merk"]; ?></td>
            <td><?= $row["tahunpembuatan"]; ?></td>
            <td><?= $row["pajakberakhir"]; ?></td>
            <td><?= $row["statuspajak"]; ?></td>
            <td><img src="img/<?= $row["gambar"]; ?>" width="80"></td>
            
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>

    </table>
</body>
</html>
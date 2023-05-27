<?php
require 'functions.php';
$car = query("SELECT detailbeli.idbeli, detailbeli.tanggalpembelian, pembeli.* from pembeli join detailbeli ON detailbeli.idpembeli = pembeli.idpembeli");
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
            <li><a href="">DAFTAR MOBIL</a>
                <ul class="dropdown">
                    <li><a href="honda.php">Honda</a></li>
                    <li><a href="suzuki.php">Suzuki</a></li>
                    <li><a href="toyota.php">Toyota</a></li>
                    <li><a href="daihatsu.php">Daihatsu</a></li>
                </ul>
            </li>
            <li><a href="admin.php">ADMIN</a>
</li> 

           </ul>


<table border="1" cellpadding ="20" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>ID Beli</th>
            <th>ID Pembeli</th>
            <th>Tanggal Pembelian</th>
            <th>No. KTP</th>
            <th>Nama</th>
            <th>TTL</th>
            <th>Gender</th>
            <th>Alamat</th>
            <th>No. HP</th>
            <th>Pembayaran</th>
            <th>ID Mobil</th>
            <th>Aksi</th>
            
        </tr>
<?php $i =1; ?>
<?php foreach ($car as $row) : ?>
        <tr>
            <td><?=$i; ?></td>
            <td><?= $row["idbeli"]; ?></td>
            <td><?= $row["idpembeli"]; ?></td>
            <td><?= $row["tanggalpembelian"]; ?></td>
            <td><?= $row["noktp"]; ?></td>
            <td><?= $row["nama"]; ?></td>
            <td><?= $row["ttl"]; ?></td>
            <td><?= $row["gender"]; ?></td>
            <td><?= $row["alamat"]; ?></td>
            <td><?= $row["nohp"]; ?></td>
            <td><?= $row["pembayaran"]; ?></td>
            <td><?= $row["idmobil"]; ?></td>
            <td>
           <a href="hapuspembelian.php?id=<?=$row["idmobil"]; ?>"onclick="return confirm('Apakah anda yakin akan menghapus data ini?');">Hapus</a>
            </td>
           
            
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>

</body>
</html>



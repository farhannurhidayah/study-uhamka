<?php 
// isset untuk mengecek variabel ada atau tidak ada
if( !isset($_GET["nama"]) ||
    !isset($_GET["penulis"]) ||
    !isset($_GET["tahun"]) ||
    !isset($_GET["gambar"]))  {
    // redirect
    header("Location: Dasar6(Get-Post).php"); //memindahkan lokasi web
    exit;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Buku</title>
</head>
<body>

<ul>
    <li><img src="img/<?= $_GET["gambar"]  ?>"></li>
    <li> <?= $_GET["nama"]  ?> </li>
    <li> <?= $_GET["penulis"]  ?></li>
    <li> <?= $_GET["tahun"]  ?></li>
</ul>

<a href="Dasar6(Get-Post).php">kembali ke menu awal</a>
    
</body>
</html>
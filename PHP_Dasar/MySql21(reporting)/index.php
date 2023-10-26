<!-- <div style="position:absolute;top: 0;bottom: 0;left: 0;right: 0;background-color: black;font-size: 100px;color: red;text-align: center;"> WKWKWKWK ANDA TELAH DIHACK!!!!</div> -->

<?php 
session_start();
if( !isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;

}

require 'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa");

// Mengecek tombol di tekan
if( isset($_POST["cari"])) {
    $mahasiswa = cari($_POST["keyword"]);
}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
      
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Halaman Admin</title>
        <script src="js/code.jquery.com_jquery-3.7.0.min.js"></script>
        <script src="js/script.js"></script>
    
    <style>
        .loader {
            width: 250px;
            position: absolute;
            top: 90px;
            left: 110px;
            z-index: -1;
            display: none;
     
        }

        @media print {
            .logout, .tambah, .cari, .aksi {
                display: none;
            }
        }

    </style>
</head>
<body>
    
<a href="logout.php" class="logout">Logout</a> | <a href="cetak.php" target="_blank">Cetak</a><br><br>

<h1>Daftar Mahasiswa</h1>


<a href="tambah.php" class="tambah">Tambah Data Mahasiswa</a>
<br><br>

<form action="" method="post" class="cari">
    <input type="text" name="keyword" size="25" autofocus placeholder="Ketikan Disini" autocomplete="off" id="keyword">
    <button type="submit" name="cari" id="tombol-cari">Cari!</button>
    <img src="img/loader.gif" alt="loader" id="loader" class="loader">
</form>
<br><br>
<div class="container" id="container">

<table border="1" cellpadding="10" cellspacing="0">

    <tr>
        <th>No.</th>
        <th class="aksi">Aksi</th>
        <th>Gambar</th>
        <th>NRP</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Jurusan</th>
    </tr>
    <?php $i = 1; ?>
    <?php foreach ($mahasiswa as $mhs) : ?>
    <tr>
        <td><?= $i; ?></td>
        <td class="aksi">
            <a href="ubah.php?id=<?= $mhs["id"]; ?>">Ubah</a> |
            <a href="hapus.php?id=<?= $mhs["id"]; ?>" onclick="return confirm('yakin?');">Hapus</a>
        </td>
        <td>
            <img src="img/<?= $mhs["gambar"]; ?>" width="50" >
        </td>
        <td><?= $mhs["nrp"]; ?></td>
        <td><?= $mhs["nama"]; ?></td>
        <td><?= $mhs["email"]; ?></td>
        <td><?= $mhs["jurusan"]; ?></td>
    </tr>
    <?php $i++; ?>
    <?php endforeach; ?>

</table>
</div>
<!-- <script src="js/tes.js"></script> -->
    
</body>
</html>
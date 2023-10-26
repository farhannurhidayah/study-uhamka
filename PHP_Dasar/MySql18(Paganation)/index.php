<!-- <div style="position:absolute;top: 0;bottom: 0;left: 0;right: 0;background-color: black;font-size: 100px;color: red;text-align: center;"> WKWKWKWK ANDA TELAH DIHACK!!!!</div> -->

<?php 
session_start();
if( !isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;

}

require 'functions.php';

// pagination 
// konfigurasi
$jumlahDataPerHalaman = 3;
$jumlahData = count(query("SELECT * FROM mahasiswa"));
$jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);
$halamanAktif = ( isset($_GET["halaman"])) ? $_GET["halaman"] : 1;
$awalData = ($jumlahDataPerHalaman * $halamanAktif) - $jumlahDataPerHalaman;

var_dump($halamanAktif);
// floor bulat ke bawah
// round
// ceil bulat ke atas
// var_dump($jumlahHalaman);
// $jumlahData = mysqli_num_rows($result);
// var_dump($jumlahHalaman);

$mahasiswa = query("SELECT * FROM mahasiswa LIMIT $awalData, $jumlahDataPerHalaman ");

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
</head>
<body>

<h1>Daftar Mahasiswa</h1>

<a href="logout.php">Logout</a> <br><br>

<a href="tambah.php">Tambah Data Mahasiswa</a>
<br><br>

<form action="" method="post">
    <input type="text" name="keyword" size="25" autofocus placeholder="Ketikan Disini" autocomplete="off">
    <button type="submit" name="cari">Cari!</button>
</form>

<br>
<!-- navigasi pagination -->
<?php if( $halamanAktif > 1) : ?>
<a href="?halaman=<?= $halamanAktif - 1; ?>">&lt;</a>
<?php endif; ?>

<?php for($i = 1; $i <= $jumlahHalaman; $i++) : ?>
    <?php if( $i == $halamanAktif) : ?>
        <a href="?halaman=<?=$i; ?>" style="font-weight: bold; color:red"><?= $i; ?></a>
        <?php else : ?>
            <a href="?halaman=<?=$i; ?>"><?= $i; ?></a>
            <?php endif; ?>
            <?php endfor; ?>
        
      <?php if( $halamanAktif < $jumlahHalaman) : ?>
      <a href="?halaman=<?= $halamanAktif + 1; ?>">&gt;</a>
      <?php endif; ?>
<br><br>

<table border="1" cellpadding="10" cellspacing="0">

    <tr>
        <th>No.</th>
        <th>Aksi</th>
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
        <td>
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

    
</body>
</html>
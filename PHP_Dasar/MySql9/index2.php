<?php 
// Koneksi ke database
$db = mysqli_connect("localhost","root","","phpbelajar");

// Ambil Data
$result =  mysqli_query($db, "SELECT * FROM mahasiswa");
// if( !$result) {
//     echo mysqli_error($db);
// }
// var_dump($result);

// ambil data (fetch) mahasiswa dari object result
// mysqli_fetch_row() // mengembalikan nilai numerik
// mysqli_fetch_assoc() // mengembalikan nilai assosiatif
// mysqli_fetch_array() // mengambalikan keduanya
// mysqli_fetch_object() // mengambalikan object

// while( $mhs = mysqli_fetch_assoc($result)) {
//     var_dump($mhs);
// }

// $mhs = mysqli_fetch_row($result);
// var_dump($mhs[3]);
 

// $mhs = mysqli_fetch_array($result);
// var_dump($mhs);

// $mhs = mysqli_fetch_object($result);
// var_dump($mhs->nama);


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
    <?php while($row = mysqli_fetch_assoc($result)) :  ?>
    <tr>
        <td><?= $i; ?></td>
        <td>
            <a href="">Ubah</a> |
            <a href="">Hapus</a>
        </td>
        <td>
            <img src="img/<?= $row["gambar"]; ?>" width="50" >
        </td>
        <td><?= $row["nrp"]; ?></td>
        <td><?= $row["nama"]; ?></td>
        <td><?= $row["email"]; ?></td>
        <td><?= $row["jurusan"]; ?></td>
    </tr>
    <?php $i++; ?>
    <?php endwhile; ?>

</table>

    
</body>
</html>
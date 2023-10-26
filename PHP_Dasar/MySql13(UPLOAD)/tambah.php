<?php 
    require 'functions.php';
   
        if( isset($_POST["submit"])) {

            // var_dump($_POST); 
            // var_dump($_FILES);die;
        if( tambah($_POST) > 0) {
            echo "
            <script>
                    alert('data berhasil ditambahkan!');
                    document.location.href = 'index.php'; // memindahkan lokasi di js
                </script>    
            ";
        } else {
            echo "
                <script>
                    alert('data gagal ditambahkan!');
                </script>    
            ";
        }


    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Maha</title>
</head>
<body>
    <h1>Tambah Data Mahasiswa</h1>
    

    <form action="" method="post" enctype="multipart/form-data">
        <!-- enctype membuat 2 jalur = yaitu ke superglobal $_FILES -->

    <ul>
        <li>
            <label for="nrp">NRP :</label>
            <input type="text" name="nrp" id="nrp" required>
        </li>
        <li>
            <label for="nama">Nama :</label>
            <input type="text" name="nama" id="nama">
        </li>
        <li>
            <label for="email">email :</label>
            <input type="text" name="email" id="email">
        </li>
        <li>
            <label for="jurusan">jurusan :</label>
            <input type="text" name="jurusan" id="jurusan">
        </li>
        <li>
            <label for="gambar">gambar :</label>
            <input type="file" name="gambar" id="gambar">
        </li>
        <li>
            <button type="submit" name="submit">Tambah Data!</button>
        </li>
    </ul>

    </form>
    <a href="index.php">Kembali ke menu awal</a>
</body>
</html>
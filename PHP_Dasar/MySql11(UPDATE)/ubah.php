<?php 
    require 'functions.php';

    // Ambil data di URL
    $id = $_GET["id"];
    // var_dump($id);
    
    // query data mahasiswa berdasarkan id
    $mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];
    // var_dump($mhs);

        if( isset($_POST["submit"])) {
        if( ubah($_POST) > 0) {  
            echo "
            <script>
                    alert('data berhasil diubah!');
                    document.location.href = 'index.php'; // memindahkan lokasi di js
                </script>    
            ";
        } else {
            echo "
                <script>
                    alert('data gagal diubah!');
                    document.location.href = 'index.php';
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
    <h1>Ubah Data Mahasiswa</h1>
    

    <form action="" method="post">
        <input type="hidden" name="id" id="id" value="<?= $mhs["id"]; ?>" >

    <ul>
      
        <li>
            <label for="nrp">NRP :</label>
            <input type="text" name="nrp" id="nrp" value="<?= $mhs["nrp"] ?>" required>
        </li>
        <li>
            <label for="nama">Nama :</label>
            <input type="text" name="nama" id="nama" value="<?= $mhs["nama"] ?>">
        </li>
        <li>
            <label for="email">email :</label>
            <input type="text" name="email" id="email" value="<?= $mhs["email"] ?>">
        </li>
        <li>
            <label for="jurusan">jurusan :</label>
            <input type="text" name="jurusan" id="jurusan"value="<?= $mhs["jurusan"] ?>">
        </li>
        <li>
            <label for="gambar">gambar :</label>
            <input type="text" name="gambar" id="gambar" value="<?= $mhs["gambar"] ?>">
        </li>
        <li>
            <button type="submit" name="submit">Ubah Data!</button>
        </li>
    </ul>

    </form>
</body>
</html>
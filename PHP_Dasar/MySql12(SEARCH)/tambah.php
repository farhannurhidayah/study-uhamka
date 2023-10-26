<?php 
    require 'functions.php';
    // Koneksi Database
    // $db = mysqli_connect("localhost", "root", "", "phpbelajar");
    // apakah tombol submit duah ditekan atau belum
    // // Ambil data dari tiap elemen form
    // $nrp = $_POST["nrp"];
        // $nama = $_POST["nama"];
        // $email = $_POST["email"];
        // $jurusan = $_POST["jurusan"];
        // $gambar = $_POST["gambar"];
        
        
        // query insert data
        // $query = "INSERT INTO mahasiswa VALUES
        //         ('', '$nama', '$nrp' , '$email', '$jurusan', '$gambar')
        //         ";
        // mysqli_query($db, $query);
        
        // Cek apakah data berhasil di tambahkan atau tidak 
        // var_dump(mysqli_affected_rows($db));
        // if( mysqli_affected_rows($db) > 0) {
            //     echo "berhasil";
            // } else {
                //     echo "Gagal!";
        //     echo "<br>";
        //     echo mysqli_error($db);
        // }

        if( isset($_POST["submit"])) {
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
    

    <form action="" method="post">

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
            <input type="text" name="gambar" id="gambar">
        </li>
        <li>
            <button type="submit" name="submit">Tambah Data!</button>
        </li>
    </ul>

    </form>
</body>
</html>
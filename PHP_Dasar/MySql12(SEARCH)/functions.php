<?php 
// Koneksi ke database
$db = mysqli_connect("localhost","root","","phpbelajar");

function query($query) {
    global $db;
    $result = mysqli_query($db, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}



function tambah($data) {
       global $db;
       $nrp = htmlspecialchars($data["nrp"]);
       $nama = htmlspecialchars($data["nama"]);
       $email = htmlspecialchars($data["email"]);
       $jurusan = htmlspecialchars($data["jurusan"]);
       $gambar = htmlspecialchars($data["gambar"]);

       $query = "INSERT INTO mahasiswa VALUES
       ('', '$nama', '$nrp' , '$email', '$jurusan', '$gambar')
       ";
        mysqli_query($db, $query);

    return mysqli_affected_rows($db);
} 

function hapus($id) {
    global $db;
    mysqli_query($db, "DELETE FROM mahasiswa WHERE id = $id");

    return mysqli_affected_rows($db);
}

function ubah($data) {
    // echo $data;
    global $db;
       $id =  $data["id"];
       $nrp = htmlspecialchars($data["nrp"]);
       $nama = htmlspecialchars($data["nama"]);
       $email = htmlspecialchars($data["email"]);
       $jurusan = htmlspecialchars($data["jurusan"]);
       $gambar = htmlspecialchars($data["gambar"]);

       $qury = "UPDATE mahasiswa SET 
       nrp = '$nrp',
       nama = '$nama',
       email = '$email',
       jurusan = '$jurusan',
       gambar = '$gambar'
       WHERE id = $id
       ";
        mysqli_query($db, $qury);

    return mysqli_affected_rows($db);

}

    function cari($keyword) {
        // $query = "SELECT * FROM mahasiswa WHERE nama = '$keyword'";
        $query = "SELECT * FROM mahasiswa WHERE 
         nama LIKE '%$keyword%' OR
        nrp LIKE '%$keyword%' OR 
        email LIKE '%$keyword%' OR 
        jurusan LIKE '%$keyword%'";

        return query($query);
    }

?>
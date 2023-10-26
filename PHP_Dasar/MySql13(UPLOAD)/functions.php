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
        // upload Gambar
        $gambar = upload();
        if ( !$gambar ) {
            return false;
        }
    //    $gambar = htmlspecialchars($data["gambar"]);

       $query = "INSERT INTO mahasiswa VALUES
       ('', '$nama', '$nrp' , '$email', '$jurusan', '$gambar')
       ";
        mysqli_query($db, $query);

    return mysqli_affected_rows($db);
} 


// error in aarray $_FILES
// 0 => 'There is no error, the file uploaded with success',
// 1 => 'The uploaded file exceeds the upload_max_filesize directive in php.ini',
// 2 => 'The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form',
// 3 => 'The uploaded file was only partially uploaded',
// 4 => 'No file was uploaded',
// 6 => 'Missing a temporary folder',
// 7 => 'Failed to write file to disk.',
// 8 => 'A PHP extension stopped the file upload.',

function upload() {

    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];
    // return false;
    
    // Cek apakah tidak ada gambar yang diupload
    if( $error === 4) {
        echo " <script>
        alert('pilih gambar terlebih dahulu!');
        </script>";
        return false;
    }

    // Cek apakah yang diupload gambar
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.',$namaFile); // memecah nama file
    $ekstensiGambar = strtolower(end($ekstensiGambar)); // mengambil nilai akhir
    if( !in_array($ekstensiGambar, $ekstensiGambarValid)) {// menacari (jarum, jerami)
        echo " <script>
        alert('Yang diupload bukan gambar');
        </script>";
        return false;
    // strtolower() = menjadi kecil semua
    // strtoupper() = menjadi besar
    }

    // Cek Ukuran jika terlalu besar
    if( $ukuranFile > 1000000) {
        echo " <script>
        alert('Ukuran gambar terlalu besar');
        </script>";
        return false;
    }

    // Lolos pengecekan, gambar siap diupload
    // generate nama gambar baru
    $namaFileBaru = uniqid(); // angka random
    $namaFileBaru .= '.'; // .= merangkai file
    $namaFileBaru .= $ekstensiGambar;

    move_uploaded_file($tmpName,'img/'.$namaFileBaru); //untuk memindahkan file ke directory

    return $namaFileBaru;
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
       $gambarLama = htmlspecialchars($data["gambarLama"]);

        // cek apakah user pilih gambar atau tidak
        if( $_FILES['gambar']['error'] === 4) {
            $gambar = $gambarLama;
        } else {
            $gambar = upload();
        }
     

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
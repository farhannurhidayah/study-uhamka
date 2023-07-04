<!-- Farhan NUrhidayah -->
<!-- 4B -->
<!-- 2103015243 -->
<!-- Pemograman Web -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="bootstrap-5.3.0-alpha3-dist/css/bootstrap.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Daftar Coding</title>
</head>
<body bgcolor="brown">
    <form method="post" action="daftar_coding.php">
        <table>
            <tr>
                <td>Nama: </td>
                <td><input type="text" id="nama" name="nama" required placeholder="Nama Panggilan" class="form-control form-control-lg"></td>
            </tr>
            <tr>
                <td>Nomor Telepon: </td>
                <td><input type="text" id="phone" name="phone" pattern="[0-9]{12}" class="form-control form-control-sm"> </td>
            </tr>
            <tr>
                <td>Email: </td>
                <td><input type="email" id="email" name="email" class="form-control "> </td>
            </tr>
                <td>Tangal Lahir: </td>
                <td><input type="date" id="TTl" name="TTL" > </td>
            </tr>
            <tr>
                <td>Jenis Kelamin: </td> 
                <td >
                    <input type="radio" id="Pria" name="kelamin" value="Laki-laki" class="form-check-input"> 
                    <label for="Pria" class="form-check-label">Laki-laki</label>
                    <input type="radio" id="Wanita" name="kelamin" value="Perempuan" class="form-check-input"> 
                    <label for="Wanita" class="form-check-label">Perempuan</label>
                </td>
            </tr>
            <tr>
                <td> Les Yang Ingin Diikuti</td>
                <td>
                    <input type="checkbox" id="html" name="html" value="html" class="form-check-input" >
                    <label for="html" class="form-check-label" > html </label>
                    <input type="checkbox" id="css" name="css" value="css" class="form-check-input">
                    <label for="css" class="form-check-label"> css </label>
                    <input type="checkbox" id="javascript" name="javascript" value="javascript" class="form-check-input">
                    <label for="javascript" class="form-check-label"> javascript </label>
                    <input type="checkbox" id="PHP" name="PHP" value="PHP" class="form-check-input">
                    <label for="PHP" class="form-check-label"> PHP </label>
                </td>
            </tr>
            <tr><td>Tingkat Pendidikan</td>
            <td>
                <select name="pendidikan" id="pendidikan" style="width: 400px;" class="form-select">
                    <option value="Beginner">Beginner</option>
                    <option value="Intermediate">Intermediate</option>
                    <option value="Advanced">Advanced</option>
                </select>
            </td>
            </tr>
            <tr>
                <td>Upload CV</td> 
                <td><input type="file"> </td>
            </tr>
            <tr></tr>
            <tr>
                <td>Komentar dan Saran</td>
                <td><textarea name="komentar" id="komentar" cols="60" rows="4"></textarea> </td>
            </tr>
        </table>
        <input type="submit" name="kirim" value="Kirim" class="btn btn-success btn-lg" style="width: 200px; margin-left: 800px;">
    </form> 

    <div id="hasil">
        <?php 
            if(isset($_POST['kirim'])) {

                echo "Profil Pendaftar : ";
                $nama=$_POST['nama'];
                $phone=$_POST['phone'];
                $email=$_POST['email'];
                $TTL=$_POST['TTL'];
                $kelamin=$_POST['kelamin'];
                $pendidikan=$_POST['pendidikan'];

                // Pembuatan algoritma checkbox
                $a=-1;
                $les=array();
                if (isset($_POST['html'])){
                    array_push($les, "html");
                    $a=$a+1;
                }
                if (isset($_POST['css'])){
                    array_push($les, "css");
                    $a=$a+1;
                }
                if (isset($_POST['javascript'])){
                    array_push($les, "javascript");
                    $a=$a+1;
                }
                if (isset($_POST['PHP'])){
                    array_push($les, "PHP");
                    $a=$a+1;
                }

                // perhitungan biaya
                if($pendidikan=="Beginner") {
                    $biayakursus=($a+1)*500000;
                } else if($pendidikan=="Intermediate"){
                    $biayakursus=($a+1)*1000000;
                } else $biayakursus=($a+1)*1500000;
                

                

                echo "
                <table class='table'>
                    <tr><td> Nama Pendaftar</td><td>: $nama</td><tr>
                    <tr><td> Nomor Telepon</td><td>: $phone</td><tr>
                    <tr><td> Email</td><td>: $email</td><tr>
                    <tr><td> Tanggal Lahir</td><td>: $TTL</td><tr>
                    <tr><td> Jenis Kelamin</td><td>: $kelamin</td><tr>
                    <tr><td> Level yang diambil</td><td>: $pendidikan</td><tr>
                    <tr><td> Kursus Yang Diikuti</td><td>:";

                    if($a != -1) {
                        for ($i = 0; $i <= $a; $i++) {
                            echo " $les[$i],";
                        }
                    }
                    
                echo " </td></tr > 
                <tr><td> Biaya Kursus</td><td>: $biayakursus</td><tr>
    
                  </table>";
            }
        ?>
    </div>
</body>
</html>
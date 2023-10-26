<?php 
// array
$nama = array("mamah","asd", "asdas");
$bulan = ["hari", "tanggal", "bulan"];
$arr = [100, true, "Saya"];

// Menampilkan Array
var_dump($nama);
echo "<br>";
var_dump($bulan);
echo "<br>";
echo "$arr[0]";
echo "<br>";

// array asosiatif
$mahasiswa = [ 
    [
             "nama" => "Farhan", 
              "nrp" => "21939123",
              "email" => "21939123",
              "jurusan" => "teknik informatika",
              "gambar" => "islam2.jpeg"
    ],   
    [
        "nama" => "Aan", 
         "nrp" => "21939212",
         "email" => "21931414",
         "jurusan" => "teknik mesin",
         "gambar" => "islam3.jpeg"
        //  "tugas" => [90, 12, 13]
    ]      
];

     echo $mahasiswa [1]["tugas"][0];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .kotak {
            width: 30px;
            height: 30px;
            background-color: blueviolet;
            text-align: center;
            line-height: 30px;
            margin: 3px;
            float: left;
            transition: 0.5s;
        }

        .kotak:hover {
            transform: rotate(360deg);
            border-radius: 50%;
        }

        .clear {
            clear: both;
        }
    </style>
</head>
<body>
    <?php 
        $angka = [
            [1,2,3],
            [4,5,6],
            [7,8,9]
        ];
        // echo $angka[2][2];
    ?>
     <?php foreach($angka as $a) : ?>
        <?php foreach($a as $b) : ?>
    <div class="kotak"> <?= $b;  ?> </div>
        <?php endforeach; ?>
    <div class="clear"></div>
     <?php endforeach; ?>

     <h1>Daftar Mahasiswa</h1>
<h4>Array asosiatif</h4>
<?php foreach( $mahasiswa as $mhs ) : ?>
<ul>
	<li>Nama : <?= $mhs["nama"]; ?></li>
	<li>NRP : <?= $mhs["nrp"]; ?></li>
	<li>Jurusan : <?= $mhs["jurusan"]; ?></li>
	<li>Email : <?= $mhs["email"]; ?></li>
    <li>
        <img src="img/<?= $mhs["gambar"]; ?>"  >
    </li>
</ul>
<?php endforeach; ?>
 
</body>
</html>
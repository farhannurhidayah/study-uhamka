<?php 
    // Array
    // Membuat Array
    // $array = ["satu","dua","tiga"];
    // var_dump($array) ;
    // print_r($array);

?>

<?php 
// Pengulangan pada array
for / foreach
$angka = [3,2,15,20,11,88,1,45];
$mahasiswa = [
	["Sandhika Galih", "043040023", "Teknik Informatika", "sandhikagalih@unpas.ac.id"],
	["Doddy Ferdiansyah", "033040001", "Teknik Industri", "doddy@yahoo.com"],
	["023040123", "Erik", "Teknik Planologi", "erik@gmail.com"]
];


?>
<!DOCTYPE html>
<html>
<head>
	<title>Latihan 2</title>
	<style>
		.kotak {
			width: 50px;
			height: 50px;
			background-color: salmon;
			text-align: center;
			line-height: 50px;
			margin: 3px;
			float: left;
		}
		.clear { clear: both; }
	</style>
</head>
<body>

<?php for( $i = 0; $i < count($angka); $i++ ) { ?>
	<div class="kotak"><?php echo $angka[$i]; ?></div>
<?php } ?>

<div class="clear"></div>

<?php foreach( $angka as $a ) { ?>
	<div class="kotak"><?php echo $a; ?></div>
<?php } ?>

<div class="clear"></div>

<?php foreach( $angka as $a ) : ?>
	<div class="kotak"><?= $a; ?></div>
<?php endforeach; ?>

<br><br>
<br><br>
<h1>Daftar Mahasiswa</h1>
<h4>Array Numerik</h4>
<?php foreach( $mahasiswa as $mhs ) : ?>
<ul>
	<li>Nama : <?= $mhs[0]; ?></li>
	<li>NRP : <?= $mhs[1]; ?></li>
	<li>Jurusan : <?= $mhs[2]; ?></li>
	<li>Email : <?= $mhs[3]; ?></li>
</ul>
<?php endforeach; ?>





</body>
</html>
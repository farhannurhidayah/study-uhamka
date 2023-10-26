<?php 
// Variabel Global
$x = 10;

// Variabel SuperGlobal
// var_dump($_SERVER);
// $_ENV
// $_GET
// $_POST
// $_COOKIE
// $_SERVER
// $_REQUEST
// $_SESSION

// $_GET["nama"] = "Farhan Nurhidayah";
// $_GET["nrp"] = 2123121124;
// $_GET["nim"] = 21030212;
var_dump($_GET);


// Variabel Scope /Lokal
function tampilX() {
    // $x = 20; 
    global $x; 
    echo $x;
}

// Menampilkan Output
echo "<br>";
tampilX();
// echo $x;

?>

<?php 
    $Buku = [
        [
            "NamaBuku" => "Jendela Islam",
            "Penulis" => "Rudi",
            "Tahun" => "2011",
            "gambar" => "islam1.jpeg"
        ],
        [
            "NamaBuku" => "Qolbu",
            "Penulis" => "Mumun",
            "Tahun" => "2001",
            "gambar" => "islam2.jpeg"
        ],
        [
            "NamaBuku" => "Siraman Hati",
            "Penulis" => "Kaloo",
            "Tahun" => "2002",
            "gambar" => "islam3.jpeg"
        ],
        [
            "NamaBuku" => "Tersirat Hati",
            "Penulis" => "Veneu",
            "Tahun" => "2008",
            "gambar" => "islam4.jpeg"
        ],
        [
            "NamaBuku" => "Kuperinat hati",
            "Penulis" => "Selena",
            "Tahun" => "2004",
            "gambar" => "saintek.jpeg"
        ],
        [
            "NamaBuku" => "Peringati hati",
            "Penulis" => "Balmond",
            "Tahun" => "2008",
            "gambar" => "bunga_rampai.jpg"
        ],
        [
            "NamaBuku" => "Sariung Hati",
            "Penulis" => "Grock",
            "Tahun" => "2024",
            "gambar" => "fiksi1.jpeg"
        ],
        [
            "NamaBuku" => "Kuperdasi kamu",
            "Penulis" => "Nata",
            "Tahun" => "2022",
            "gambar" => "fiksi2.jpeg"
        ],
        [
            "NamaBuku" => "kubelangakangi",
            "Penulis" => "Kadita",
            "Tahun" => "2021",
            "gambar" => "fiksi3.jpeg"
        ],
        [
            "NamaBuku" => "Dusta",
            "Penulis" => "chouu",
            "Tahun" => "2007",
            "gambar" => "gunung4.jpg"
        ]


    ];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get</title>
</head>
<body>
    
    <h1>Daftar Buku</h1>
    <ul>
        <?php foreach($Buku as $a) : ?>
            <li>
                <a href="Dasar6(Get-Post2).php?nama=<?= $a["NamaBuku"]?> &penulis=<?= $a["Penulis"]?> &tahun=<?= $a["Tahun"]?> &gambar=<?= $a["gambar"]?> &"> <?= $a["NamaBuku"];  ?> 
                </a>
            </li>
        <?php endforeach; ?>
    </ul>

</body>
</html>
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
            "gambar" => "gunung4.jpeg"
        ]


    ];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>Daftar Buku</h1>
    <?php foreach($Buku as $a) : ?>

        <ul>
            <li> <?= $a["NamaBuku"] ?> </li>
            <li> <?= $a["Penulis"] ?> </li>
            <li> <?= $a["Tahun"] ?> </li>
            <li> 
              <img src="img/<?= $a["gambar"] ?>"> 
            </li>
        </ul>
    <?php endforeach; ?>

</body>
</html>
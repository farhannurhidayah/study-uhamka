<?php 
    // Jualan Produk
    // Komik
    // Game

    class Produk {
    public $judul = 'judul';
    public $penulis = 'penulis';
    public $penerbit = 'penerbit';
    public $harga = 0;


        public function sayHello() {
            return "Hello World";
        }

        public function getLAbel() {
            return "$this->penulis, $this->penerbit";
            // this = mengambil variabel diluar method 
        }
    
}

$produk1 = new Produk();
$produk1->judul = 'NAruto';
var_dump($produk1);



echo "<br>";
$produk2 = new Produk();
$produk2->judul = 'Uncharted'; 
$produk2->tambahProperty = "ahahah"; // menambah property
var_dump($produk2); 

echo "<br>";
$produk3 = new Produk();
$produk3->judul = "Sasuke";
$produk3->penulis = "Mashasi Kishimoto";
$produk3->penerbit = "Yokohama";
$produk3->harga = 'Rp.100.000';
var_dump($produk3); 


// echo "<br><br>";
// echo "Komik : $produk3->penulis, $produk3->penerbit";
// echo "<br>";
// echo $produk3->getLAbel();

echo "<hr>";
$produk4 = new Produk();
$produk4->judul = "uncharted";
$produk4->penulis = "Tom Hollan";
$produk4->penerbit = "Playstation";
$produk4->harga = 'Rp.120.000';
echo "Komik : " . $produk3->getLAbel();
echo "<br>";
echo "Game : " . $produk4->getLAbel();


?>
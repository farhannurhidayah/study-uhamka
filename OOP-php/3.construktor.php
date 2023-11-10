<?php 
    // Jualan Produk
    // Komik
    // Game

    class Produk {
    public $judul ;
    public $penulis ;
    public $penerbit ;
    public $harga ;
        
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0 )
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    // public function __destruct()
    // {
    //     echo "Object telah dihapus dari memory";
    // }


        public function sayHello() {
            return "Hello World";
        }

        public function getLAbel() {
            return "$this->penulis, $this->penerbit";
            // this = mengambil variabel diluar method 
        }
    
}

$produk1 = new Produk("Naruto", "MAsashi Kishimoto", "Shonen Jump", 30000); // intasiasi
$produk2 = new Produk("Sasuke", "MAsashi Kishimoto", "Ganbate", 25000);
$produk3 = new Produk("Naruto Ultimate Ninja Strom", "MAsashi Kishimoto", "Kanan Boon", 69000);


echo "Komik : " . $produk1->getLAbel();
echo "<br>";
echo "Game : " . $produk2->getLAbel();
echo "<br>";
echo "Game : " . $produk3->getLAbel();
// unset($produk3);

?>
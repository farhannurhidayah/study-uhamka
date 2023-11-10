<?php 
    // Jualan Produk
    // Komik
    // Game

use Produk as GlobalProduk;

    class Produk {
    public $judul ;
    public $penulis ;
    public $penerbit ;
    public $harga ;
    public $jmlHal;
    public $waktuMain;

        
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHal = 0, $waktuMain = 0 )
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHal = $jmlHal;
        $this->waktuMain = $waktuMain;
 

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
        public function getInfo() {
            $str = "{$this->tipe} : {$this->judul} | {$this->getLAbel()} (Rp. {$this->harga}) ";
        
    
        }

   
}

class Komik extends GlobalProduk{
    public function getInfo() {
        $str = "Komik : {$this->judul} | {$this->getLAbel()} (Rp. {$this->harga}) - {$this->jmlHal} Halaman.";
        return $str;
         }
    }
    
    
    class Game extends GlobalProduk{
        public function getInfo() {
            $str = "Game : {$this->judul} | {$this->getLAbel()} (Rp. {$this->harga}) ~ {$this->waktuMain} Jam.";
            return $str;
             }
        }

// class CetakInfoProduk {
//     public function cetak( Produk $produk ) { // Object Type
//         $str = "{$produk->judul} | {$produk->getLAbel()} , (Rp. {$produk->harga})";
//         return $str;
//     }

// }


$produk1 = new Komik("Naruto", "MAsashi Kishimoto", "Shonen Jump", 30000, 100, 0); // intasiasi
$produk2 = new Game("Sasuke", "MAsashi Kishimoto", "Ganbate", 25000, 0, 50);
// $produk3 = new Produk("Naruto Ultimate Ninja Strom", "MAsashi Kishimoto", "Kanan Boon", 69000);

echo $produk1->getInfo();
echo "<br>";
echo $produk2->getInfo();



?>
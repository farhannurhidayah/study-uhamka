<!-- Overiding adalah sebuah situasi dimana method clas turunan meninoa method milik parent class -->
<!-- Overloading adalah  membuat beberapa method dengan nama yang sama, tapi dibedakan dari jumlah dan/atau tipe parameter.-->

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

        
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0)
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
        public function getInfo() {
            $str = " {$this->judul} | {$this->getLAbel()} (Rp. {$this->harga}) ";
            return $str;
    
        }

   
}

class Komik extends GlobalProduk{
    public $jmlHal;
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHal = 0)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->jmlHal = $jmlHal;
    }

    public function getInfo() {
        $str = "Komik : ". parent::getInfo()  ." - {$this->jmlHal} Halaman.";
        return $str;
         }
    }
    
    
    class Game extends GlobalProduk{
        public $jmlMain;

        public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlMain = 0)
        {
            parent::__construct($judul, $penulis, $penerbit, $harga);
            $this->jmlMain = $jmlMain;
        }

        public function getInfo() {
            $str = "Game : ". parent::getInfo()  ." ~ {$this->jmlMain} Jam.";
            return $str;
             }
        }

// class CetakInfoProduk {
//     public function cetak( Produk $produk ) { // Object Type
//         $str = "{$produk->judul} | {$produk->getLAbel()} , (Rp. {$produk->harga})";
//         return $str;
//     }

// }


$produk1 = new Komik("Naruto", "MAsashi Kishimoto", "Shonen Jump", 30000, 100); // intasiasi
$produk2 = new Game("Sasuke", "MAsashi Kishimoto", "Ganbate", 25000, 50);
// $produk3 = new Produk("Naruto Ultimate Ninja Strom", "MAsashi Kishimoto", "Kanan Boon", 69000);

echo $produk1->getInfo();
echo "<br>";
// echo $produk2->getInfo();



?>
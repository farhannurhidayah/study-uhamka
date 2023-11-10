<?php 
    // Jualan Produk
    // Komik
    // Game

    class Produk {
    public $judul ;
    public $penulis ;
    public $penerbit ;
    public $harga ;
    public $jmlHal;
    public $waktuMain;
    public $tipe;
        
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHal = 0, $waktuMain = 0, $tipe = 0 )
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHal = $jmlHal;
        $this->waktuMain = $waktuMain;
        $this->tipe = $tipe;

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
            $str = "{$this->tipe} : {$this->judul} | {$this->getLAbel()} {$this->harga} ";
            if( $this->tipe == "Komik") {
                $str .= " - {$this->jmlHal} Halaman.";
            } else if ( $this->tipe == "Game") {
                $str .= " ~ {$this->waktuMain} Jam.";
            }
            return $str;
    
        }

   
}

class CetakInfoProduk {
    public function cetak( Produk $produk ) { // Object Type
        $str = "{$produk->judul} | {$produk->getLAbel()} , (Rp. {$produk->harga})";
        return $str;
    }

}


$produk1 = new Produk("Naruto", "MAsashi Kishimoto", "Shonen Jump", 30000, 100, 0, "Komik"); // intasiasi
$produk2 = new Produk("Sasuke", "MAsashi Kishimoto", "Ganbate", 25000, 0, 50, "Game");
// $produk3 = new Produk("Naruto Ultimate Ninja Strom", "MAsashi Kishimoto", "Kanan Boon", 69000);

echo $produk1->getInfo();
echo "<br>";
echo $produk2->getInfo();



?>
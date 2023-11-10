<?php 
// digunakan untuk ultilyty pada framework
class contohStatic {
    public static $angka = 1;

    public static function tampil() {
        return "Halo bandug " . self::$angka++ . " kali. <br>";
    }
}

class cobastatic {
    public static $angka = 1;
    public  function set() {
        return "Halo bekasi " . self::$angka++ . " kali. <br>";
        
    }
}


// contoh static
echo contohStatic::$angka;
echo "<br>";
echo contohStatic::tampil();
echo contohStatic::tampil();
echo contohStatic::tampil();

// contoh static dan objec
echo "<hr>";
$obj = new cobastatic;
echo $obj->set();
echo $obj->set();
echo $obj->set();
echo $obj->set();
echo "<hr>";


$obj1 = new cobastatic;
echo $obj1->set();
echo $obj1->set();
echo $obj1->set();








?>
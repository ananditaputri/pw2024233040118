<?php 
$a = 10;
$b=3.14;

echo "<br><b>Menghitung Luas Lingkaran</b><br><br>";
function hitungLuasLingkaran($a,$b){
    $luaslingkaran =$b*$a*$a;
    return $luaslingkaran;
}
echo "Jari-jari = ". $a ." cm.<br>";
echo "Luas lingkaran = ".$luas = hitungLuasLingkaran($a,$b)." cm <sup>2</sup> <br> <hr>";

echo "<b>Menghitung Keliling Lingkaran</b><br><br>";
function hitungKelilingLingkaran($a,$b){
    $kelilinglingkaran =2*$b*$a;
    return  $kelilinglingkaran ;
}
echo "Jari-jari = ". $a * 2 ." cm.<br>";
echo "Keliling lingkaran = ".$keliling = hitungkelilingLingkaran($a,$b* 2)." cm <sup></sup> <br> <hr>";
?>
<?php 
// tangkap request class_Matematika.php
require_once 'kelass_matematika.php';

// akses static member variable class Matematika
Matematika :: $counter++;
Matematika :: $counter++;
Matematika :: naikanCounter();
echo 'Counter Sekarang : '. Matematika :: $counter;
echo '<hr/>';

// akses static member function class Matematika
$x = Matematika :: tambahkan(4,5);
echo "4 + 5 = $x";
echo "<hr/>";

// akses constanta class Matematika
echo 'Nilai PHI : '. Matematika::PHI;
$luas_lingkaran = Matematika::luasLingkaran(8);
echo "<br/>Luas Lingkaran dengan jari-jari 8 adalah : ". $luas_lingkaran;
?>

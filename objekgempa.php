<?php 
require 'gempa.php';

$g1 = new gempa ('Banten', 2);
$g2 = new gempa ('Sulawesi', 6);
$g3 = new gempa ('Jakarta', 4);
$g4 = new gempa ('Malang', 5);


$g1->cetak();
$g2->cetak();
?>
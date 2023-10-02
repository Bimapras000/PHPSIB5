<?php
require_once 'lingkaran.php';

$l1 = new lingkaran(5);

// Memanggil metode keliling() dan menampilkannya
echo "Keliling Lingkaran: " .$l1->keliling(). "<br>";

// Memanggil metode luasbidang() dan menampilkannya
echo "Luas Bidang Lingkaran: " . $l1->luasbidang();
?>
<?php
require 'konversiSuhu.php';

// Buat objek-objek KonversiSuhu
$konversi1 = new KonversiSuhu('Celcius', 25, 'Fahrenheit');
$konversi2 = new KonversiSuhu('Celcius', 75, 'Fahrenheit');
$konversi3 = new KonversiSuhu('Fahrenheit', 77, 'Celcius');
$konversi4 = new KonversiSuhu('Fahrenheit', 40, 'Celcius');
$konversi5 = new KonversiSuhu('Celcius', 100, 'Rheamur');
$konversi6 = new KonversiSuhu('Celcius', 200, 'Rheamur');
$konversi7 = new KonversiSuhu('Rheamur', 50, 'Celcius');
$konversi8 = new KonversiSuhu('Rheamur', 150, 'Celcius');


// // Panggil fungsi cetak untuk seluruh objek
// function cetakKonversi($obj) {
//     echo "Satuan Suhu Awal: " . $obj->getSatuanSuhuAwal() . "<br>";
//     echo "Besaran Suhu: " . $obj->getBesaranSuhu() . "<br>";
//     echo "Satuan Suhu Tujuan: " . $obj->getSatuanSuhuTujuan() . "<br>";
//     echo "Hasil Konversi: " . $obj->konversi() . "<br><br>";
// }

echo "<h2 align='center'>Data Konversi Suhu</h2>";
$konversi1->cetak();
$konversi2->cetak();
$konversi3->cetak();
$konversi4->cetak();
$konversi5->cetak();
$konversi6->cetak();
$konversi7->cetak();
$konversi8->cetak();



?>
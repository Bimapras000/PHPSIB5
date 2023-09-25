<?php

//contoh array scalar atau 1 dimensi

$ar_buah = ['pepaya','jambu','pisang','apel'];
$ar_buah[] = 'semangka';
$ar_buah[] = 'mangga';
$ar_buah[3] = 'Nanas';
unset($ar_buah[1]);//menghapus index ke 1


echo '<br>Cetak data array menggunakan looping foreach';
foreach($ar_buah as $id => $buah){
    echo '<br> Key array buah : '.$id;
}
foreach($ar_buah as $buah){
    echo'<br> Data Buah : '.$buah;
}

foreach($ar_buah as $id => $buah){
    echo '<br> Buah dengan id : '.$id.' Adalah buah : '.$buah;
}

?>
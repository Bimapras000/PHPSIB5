<?php 
require 'bank.php';

$n1 = new bank('001','Bima','1000000');
$n2 = new bank('002','Pras','2000000');
$n3 = new bank('003','Asep','600000');
$n4 = new bank('004','Bambang','700000');
$n5 = new bank('005','Ani','900000');

$n1->setor(700000);
echo '<h3 align="center"> '.bank::BANK."</h3>";
$n1->cetak();
$n2->cetak();
$n3->cetak();
$n4->cetak();
$n5->cetak();
?>
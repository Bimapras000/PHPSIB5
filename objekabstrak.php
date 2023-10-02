<?php 
require_once 'hewan.php';
require_once 'hewan2.php';
require_once 'hewan3.php';
$h1 = new kucing();
$h2 = new sapi();
$h3 = new bebek();

$suara_hewan = [$h1,$h2,$h3];

foreach ($suara_hewan as $hewan){
    echo '<br>'.$hewan->bersuara();
}

?>
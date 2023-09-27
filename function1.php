<?php 
$str = "Belajar PHP di Kampus Merdeka";
echo $str;

$str = strtoupper($str);
echo '<br>'.$str;
$str = strtolower($str);
echo '<br>'.$str;

$ar_buah = ['Pepaya','Mangga','Jeruk','Nangka','Durian'];
sort($ar_buah);
foreach($ar_buah as $buah){
echo '<br><br>'.$buah;
}

echo '<hr>';
arsort($ar_buah);
foreach($ar_buah as $buah){
echo '<br><br>'.$buah;
}

?>
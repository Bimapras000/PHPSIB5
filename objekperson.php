<?php 
require_once 'dosen.php';
require_once 'mahasiswa.php';
require_once 'staff.php';


$d1 = new dosen('Bima', 'Laki-laki', '01293482', 'S.Kom');
$s1 = new mahasiswa('Pras', 'Laki-laki', 7, 'TI');
$t1 = new staff('Tia', 'Laki-laki','Keuangan','823983','3000000');

$data = [$d1,$s1,$t1];

echo '<h3> Data Civitas Kampus';
echo '<p>';
foreach($data as $d){
    echo $d->cetak();
}
echo '</p>';


?>
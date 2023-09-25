<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 3 Array</title>
</head>
<body>
    <?php
    $m1 = ['nim' => '011111','nama'=>'Bima','nilai'=>98];
    $m2 = ['nim' => '011112','nama'=>'Pras','nilai'=>78];
    $m3 = ['nim' => '011113','nama'=>'Tia','nilai'=>88];
    $m4 = ['nim' => '011114','nama'=>'Lukman','nilai'=>70];
    $m5 = ['nim' => '011115','nama'=>'Heri','nilai'=>60];
    $m6 = ['nim' => '011116','nama'=>'Asep','nilai'=>65];
    $m7 = ['nim' => '011117','nama'=>'Bambang','nilai'=>50];
    $m8 = ['nim' => '011118','nama'=>'Nur','nilai'=>80];
    $m9 = ['nim' => '011119','nama'=>'Laili','nilai'=>20];
    $m10 = ['nim' => '011120','nama'=>'Men','nilai'=>55];

    $ar_judul = ['No', 'NIM','Nama Mahasiswa', 'Nilai','Keterangan','Grade','Predikat'];
    $mahasiswa = [$m1,$m2,$m3,$m4,$m5,$m6,$m7,$m8,$m9,$m10];
    
    ?>
    <h2>Daftar Nilai Mahasiswa</h2>
    <table border="1" cellpadding="10" cellspacing="2" width="100%">
        <thead>
            <tr>
                <?php
                foreach($ar_judul as $judul){
                    ?>
                    <th><?=$judul?></th>
                <?php } ?>
            </tr>
        </thead>
    </table>
</body>
</html>
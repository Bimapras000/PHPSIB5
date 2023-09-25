<?php
//array scalar
$a1 = ['Kode' => '001','Buah' => 'Apel','Harga'=>30000, 'Jumlah'=>10];
$a2 = ['Kode' => '002','Buah' => 'Mangga','Harga'=>26000, 'Jumlah'=>11];
$a3 = ['Kode' => '003','Buah' => 'Nanas','Harga'=>20000, 'Jumlah'=>20];
$a4 = ['Kode' => '004','Buah' => 'Durian','Harga'=>35000, 'Jumlah'=>5];
$a5 = ['Kode' => '005','Buah' => 'Jambu','Harga'=>15000, 'Jumlah'=>15];

//array asossiative

$ar_buah = [$a1,$a2,$a3,$a4,$a5];

//deklarasi header table dengan looping
$ar_judul = ['No', 'Kode', 'Buah', 'Harga', 'Jumlah beli', 'harga kotor','Diskon','bayar'];
$jumlah_harga = array_column($ar_buah,'Harga');
$jumlah_transaksi = count($ar_buah);
$harga_total = array_sum($jumlah_harga);
$harga_terendah = min($jumlah_harga);
$harga_tertinggi = max ($jumlah_harga);
$rata = $harga_total / $jumlah_transaksi;


$keterangan = [
    'Harga Total' => $harga_total,
    'Harga Terendah' => $harga_terendah,
    'Harga Tertinggi' => $harga_tertinggi,
    'Rata-rata Harga' => $rata,
    'jumlah Buah' => $jumlah_transaksi
]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menggunakan array looping</title>
</head>
<body>
    <h1 align="center">Daftar Buah-Buahan</h1>
    <table border = "1" cellpadding="10" cellspacing="2" width="100%">
        <thead>
            <tr>
                <?php foreach($ar_judul as $judul){
                    ?>
                    <th><?= $judul ?></th>
                    <?php } ?>
            </tr>
        </thead>
        <tbody>
            <?php $no=1;
            foreach($ar_buah as $buah){
                $bruto = $buah['Harga'] * $buah['Jumlah'];
                $diskon = ($buah ['Buah'] == 'Mangga' && $buah['Jumlah'] >= 4) ? 0.2 : 0.1;
                $harga_diskon = $diskon * $bruto;
                $harga_bayar = $bruto - $harga_diskon;
                ?>

                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $buah ['Kode'] ?></td>
                    <td><?= $buah ['Buah'] ?></td>
                    <td><?= $buah ['Harga'] ?></td>
                    <td><?= $bruto ?></td>
                    <td><?= $harga_diskon ?></td>
                    <td><?= $harga_bayar ?></td>
                    <td align="center"> Rp. <?= number_format( $harga_bayar,0,',','.')?> </td>
                </tr>
            <?php } ?>
        </tbody>
        <tfoot>
            <?php
            foreach($keterangan as $ket => $hasil){
                ?>
                <tr>
                    <th colspan="3"><?=$ket?></th>
                    <th colspan="5"><?=$hasil?></th>
                </tr>
            <?php } ?>
        </tfoot>

    </table>
</body>
</html>
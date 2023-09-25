<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 3 Array</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, aqua, blue);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            cursor: pointer;
            background-color: white;
        }

        th, td {
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }

        th {
            background-color: #f2f2f2;
        }

        tbody tr:hover {
            background-color: #e0e0e0;
        }

        tfoot th {
            background-color: #f2f2f2;
        }
    </style>
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

    $nilai_tertinggi = max(array_column($mahasiswa, 'nilai'));
    $nilai_terendah = min(array_column($mahasiswa, 'nilai'));
    $jumlah_mahasiswa = count($mahasiswa);
    $total_nilai = array_sum(array_column($mahasiswa, 'nilai'));
    $rata_rata_nilai = $total_nilai / $jumlah_mahasiswa;

    $hasil = [
        'Nilai Tertinggi' => $nilai_tertinggi,
        'Nilai Terendah' => $nilai_terendah,
        'Jumlah Mahasiswa' => $jumlah_mahasiswa,
        'Rata-Rata Nilai' => $rata_rata_nilai,
        'Total Seluruh Nilai' => $total_nilai
    ]
    
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
        <tbody>
            <?php $no=1;
            foreach($mahasiswa as $mhs){
                $keterangan = ($mhs['nilai'] >= 60 ) ? "LULUS" : "GAGAL";
                if ($mhs['nilai'] >= 85 && $mhs['nilai'] <= 100 ) $grade = "A";
                else if ($mhs['nilai'] >= 75 && $mhs['nilai'] <= 84 ) $grade = "B";
                else if ($mhs['nilai'] >= 60 && $mhs['nilai'] <= 74 ) $grade = "C";
                else if ($mhs['nilai'] >= 30 && $mhs['nilai'] <= 59 ) $grade = "D";
                else if ($mhs['nilai'] >= 0 && $mhs['nilai'] <= 29 ) $grade = "E";
                else $grade = "";

                switch($grade){
                    case "A" : $predikat = "Memuaskan";break;
                    case "B" : $predikat = "Bagus";break;
                    case "C" : $predikat = "Cukup";break;
                    case "D" : $predikat = "Kurang";break;
                    case "E" : $predikat = "Sangat Kurang";break;
                    default : $predikat = "";
                }
            ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $mhs ['nim'] ?></td>
                <td><?= $mhs ['nama'] ?></td>
                <td><?= $mhs ['nilai'] ?></td>
                <td><?= $keterangan ?></td>
                <td><?= $grade ?></td>
                <td><?= $predikat ?></td>

            </tr>
            <?php } ?>
        </tbody>
        <tfoot>
        <?php
            foreach($hasil as $sil => $total){
                ?>
                <tr>
                    <th colspan="3"><?=$sil?></th>
                    <th colspan="5"><?=$total?></th>
                </tr>
            <?php } ?>
        </tfoot>
    </table>
</body>
</html>
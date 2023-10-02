<!DOCTYPE html>
<html>
<head>
    <style>
        table {
            width: 80%;
            border-collapse: collapse;
            margin: 20px auto;
        }

        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }


    </style>
</head>
<body>

<?php
require_once 'lingkaran.php';
require_once 'PersegiPanjang.php';
require_once 'Segitiga.php';

$b1 = new lingkaran(5);
$b2 = new PersegiPanjang(4, 6);
$b3 = new Segitiga(3, 4);

$kumpulanbidang = [$b1,$b2,$b3];
$theadColumns = ["No", "Nama Bidang", "Keterangan", "Luas Bidang", "Keliling Bidang"];

echo "<table>
        <thead>
            <tr>";

foreach ($theadColumns as $column) {
    echo "<th>$column</th>";
}

echo "</tr>
        </thead>
        <tbody>";

foreach ($kumpulanbidang as $index => $bidang) {
    echo "<tr>
            <td>" . ($index + 1) . "</td>
            <td>" . $bidang->namaBidang() . "</td>
            <td>";

    // Mencetak keterangan sesuai dengan jenis bidang
    if ($bidang instanceof lingkaran) {
        echo "Lingkaran dengan jari-jari " . $bidang->jari2;
    } elseif ($bidang instanceof PersegiPanjang) {
        echo "Persegi Panjang dengan panjang " . $bidang->panjang . " dan lebar " . $bidang->lebar;
    } elseif ($bidang instanceof Segitiga) {
        echo "Segitiga dengan alas " . $bidang->alas . " dan tinggi " . $bidang->tinggi;
    }

    echo "</td>
            <td>" . $bidang->luasBidang() . "</td>
            <td>" . $bidang->kelilingBidang() . "</td>
          </tr>";
}

echo "</tbody></table>";

?>

</body>
</html>






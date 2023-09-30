<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            text-align: center;
        }

        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px auto; /* Mengatur tabel di tengah */
        }

        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
  </style>
</head>
<body>
<?php 
class  KonversiSuhu{
    private $satuanSuhuAwal;
    private $besaranSuhu;
    private $satuanSuhuTujuan;

    public function __construct($satuanSuhuAwal, $besaranSuhu, $satuanSuhuTujuan){
        $this->satuanSuhuAwal = $satuanSuhuAwal;
        $this->besaranSuhu = $besaranSuhu;
        $this->satuanSuhuTujuan = $satuanSuhuTujuan;
    }

    public function konversi() {
        if ($this->satuanSuhuAwal == 'Celcius' && $this->satuanSuhuTujuan == 'Fahrenheit') {
            // Konversi dari Celcius ke Fahrenheit
            $hasil = ($this->besaranSuhu * 9/5) + 32;
            return $hasil;
        } elseif ($this->satuanSuhuAwal == 'Fahrenheit' && $this->satuanSuhuTujuan == 'Celcius') {
            // Konversi dari Fahrenheit ke Celcius
            $hasil = ($this->besaranSuhu - 32) * 5/9;
            return $hasil;
        } elseif ($this->satuanSuhuAwal == 'Celcius' && $this->satuanSuhuTujuan == 'Rheamur') {
            // Konversi dari Celcius ke Rheamur
            $hasil = $this->besaranSuhu * 0.8;
            return $hasil;
        } elseif ($this->satuanSuhuAwal == 'Rheamur' && $this->satuanSuhuTujuan == 'Celcius') {
            // Konversi dari Rheamur ke Celcius
            $hasil = $this->besaranSuhu / 0.8;
            return $hasil;
        } else {
            return "Konversi suhu tidak valid.";
        }
    }

    public function cetak() {
        echo "<table>";
        echo "<tr><th>Satuan Suhu Awal</th><th>Besaran Suhu</th><th>Satuan Suhu Tujuan</th><th>Hasil Konversi Suhu</th></tr>";
        echo "<tr><td>".$this->satuanSuhuAwal."</td>";
        echo "<td>".$this->besaranSuhu."</td>";
        echo "<td>".$this->satuanSuhuTujuan."</td>";
        echo "<td>".$this->konversi()."</td></tr>";
        echo "</table>";
    }
}

?>
</body>
</html>
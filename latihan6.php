<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Form Penilaian</h1>
    <form method="POST">
        <label for="">Nama : </label>
        <input type="text" name="nama" placeholder="Masukkan Nama"><br><br>
        <label for="">Matakuliah : </label>
        <select name="matkul">
            <option value="">---Pilih Matakuliah---</option>
            <option value="HTML dan CSS">HTML dan CSS</option>
            <option value="JaveScript">JaveScript</option>
            <option value="UI/UX">UI/UX</option>
            <option value="PHP">PHP</option>
        </select><br><br>
        <label for="">Nilai</label>
        <input type="text" name="nilai" placeholder="Masukkan Nilai"><br><br>
        <button name="proses" type="submit"> Simpan </button>
    </form>


    <?php
    $nama = $_POST['nama'];
    $matkul = $_POST['matkul'];
    $nilai = $_POST['nilai'];
    $tombol = $_POST['proses'];

    $ket = ($nilai >= 60 ) ? "LULUS" : "GAGAL";

    if ($nilai >= 85 && $nilai <= 100 ) $grade = "A";
    else if ($nilai >= 75 && $nilai <= 84 ) $grade = "B";
    else if ($nilai >= 60 && $nilai <= 74 ) $grade = "C";
    else if ($nilai >= 30 && $nilai <= 59 ) $grade = "D";
    else if ($nilai >= 0 && $nilai <= 29 ) $grade = "E";
    else $grade = "";

    switch($grade){
        case "A" : $predikat = "Memuaskan";break;
        case "B" : $predikat = "Bagus";break;
        case "C" : $predikat = "Cukup";break;
        case "D" : $predikat = "Kurang";break;
        case "E" : $predikat = "Sangat Kurang";break;
        default : $predikat = "";
    }
    if(isset($tombol)){

    ?>
    <h1>Nama Siswa : <?=$nama ?></h1>
    <h2>Matakuliah : <?=$matkul ?></h2>
    <h2>Nilai : <?=$nilai?></h2>
    <h2>Keterangan : <?=$ket?></h2>
    <h2>Grade : <?=$grade?></h2>
    <h2>Predikat : <?=$predikat?></h2>

    <?php } ?>
</body>
</html>
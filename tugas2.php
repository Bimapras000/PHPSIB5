<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    table {
      border-collapse: collapse;
      width: 50%;
      margin-top: 20px;
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
    <form method="POST">
        <label for="">Nama : </label>
        <input type="text" name="nama" placeholder="Masukkan nama anda"><br><br>
        <label for="">Pekerjaan :</label>
        <select name="pekerjaan" id="">
            <option value="">--Pilih Pekerjaan--</option>
            <option value="Programer">Programer</option>
            <option value="Guru">Guru</option>
            <option value="Arsitek">Arsitek</option>
            <option value="Kondektur">Kondektur</option>
            <option value="Dokter">Dokter</option>
            <option value="Peteni">Peteni</option>
            <option value="Perawat">Perawat</option>
            <option value="Buruh">Buruh</option>
            <option value="Pedegang">Pedegang</option>
            <option value="Pekerja Kantoran">Pekerja Kantoran</option>
        </select><br><br>

        <label>Hobby:</label><br>
    <?php
      // Tombol radio untuk hobi
      for ($i = 1; $i <= 10; $i++) {
        echo "<input type='radio' name='hobby' value='Hobby $i'> Hobby $i<br>";
      }
    ?><br>

    <input type="submit" name="submit" value="Hitung">


    </form>

    
<?php
if (isset($_POST['submit'])) {
  $nama = $_POST['nama'];
  $pekerjaan = $_POST['pekerjaan'];
  $hobby = $_POST['hobby'];

  echo '<h2>Data Diri:</h2>';
  echo '<table>';
  echo '<tr><th>Nama</th><th>Pekerjaan</th><th>Hobby</th></tr>';
  echo '<tr><td>'.$nama.'</td><td>'.$pekerjaan.'</td><td>'.$hobby.'</td></tr>';
  echo '</table>';
}
?>

</body>
</html>
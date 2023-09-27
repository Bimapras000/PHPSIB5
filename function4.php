<?php 

function hitung($a1, $a2, $tombol){
if($tombol == '+') $hasil = $a1 + $a2;
else if($tombol == '-') $hasil = $a1 - $a2;
else if($tombol == '*') $hasil = $a1 * $a2;
else if($tombol == '/') $hasil = $a1 / $a2;
else $hasil = 0;
return $hasil;
}

?>
<h1>Kalkulator</h1>
<form method="POST">
    <divc class ="Inputan">
        <label for="">
            Angka ke 1
            <input type="text" name="a1" id="a1" require>
        </label><br><br>
        <label for="">
            Angka ke 2
            <input type="text" name="a2" id="a2" require><br><br>
        </label>
        <input type="submit" name="tombol" value="+">
        <input type="submit" name="tombol" value="-">
        <input type="submit" name="tombol" value="*">
        <input type="submit" name="tombol" value="/"><br><br>
    </div>
    <div class="hasil">
        <?php 
        if(isset($_POST['tombol'])){
            $a1 = $_POST['a1'];
            $a2 = $_POST['a2'];
            $tombol = $_POST['tombol'];
            $hasil = hitung($a1,$a2,$tombol);
            echo "Hasilnya adalah $hasil";
        }
        
        ?>
    </div>


</form>
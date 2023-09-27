<?php 
$ar_prodi = ["id"=>"Sistem Informasi", "IT"=>"Teknik Informasi","TE"=>"Teknik Elektronik"];
$ar_skill = ["HTML" =>10, "CSS"=>10,"JavaScript"=>20,"RwD"=>20,"PHP"=>30,"Laravel"=>40,"MySQL"=>40];
$ar_domisili = ["Jakarta","Surabaya","Kediri","Malang","Blitar","Lainnya"];

?>
<fieldset style="background-color: aqua;">
    <legend>Form Regristrasi IT Club</legend>
    <table>
        <thead>
            <tr>
                <th>Form Regristrasi</th>
            </tr>
        </thead>
        <thead>
            <form method="POST">
                <tr>
                    <td>NIM : </td>
                    <td>
                        <input type="text" name="nim" id="" size="30">
                    </td>
                </tr>
                <tr>
                    <td>Nama : </td>
                    <td>
                        <input type="text" name="nama" id="" size="30">
                    </td>
                </tr>
                <tr>
                    <td>Jenis Kelamin : </td>
                    <td>
                        <input type="radio" name="jk" id="" value="Laki-laki" >Laki-laki &nbsp;
                        <input type="radio" name="jk" id="" value="Perempuan" >Perempuan &nbsp;
                    </td>
                </tr>
                <tr>
                    <td>Program Studi</td>
                    <td>
                        <select name="prodi" id="">
                            <?php
                            foreach($ar_prodi as $prodi => $v){
                                ?>
                                <option value="<?= $prodi ?>"><?= $v?></option>
                           <?php } ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        Skil Programing :
                    </td>
                    <td>
                            <?php
                                foreach($ar_skill as $skill => $s){
                                    ?>
                                    <input type="checkbox" name="skill[]" id="" value="<?=$skill?>"><?=$skill?>
                            <?php } ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        Domisili :
                    </td>
                    <td>
                        <select name="domisili" id="">
                            <?php
                                foreach($ar_domisili as $domisili){
                                    ?>
                                    <option value="<?= $domisili ?>"><?= $domisili?></option>
                            <?php } ?>
                        </select>
                    </td>
                </tr>
                <tfoot>
                    <tr>
                        <th><button name="proses">Submit</button></th>
                    </tr>
                </tfoot>
            </form>
        </thead>
    </table>
</fieldset>

<?php 
if(isset($_POST['proses'])){
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $jk = $_POST['jk'];
    $prodi = $_POST['prodi'];
    $skill = $_POST['skill'];
    $domisili = $_POST['domisili'];

    echo "NIM : $nim <br>";
    echo "Nama : $nama <br>";
    echo "Jenis Kelamis : $jk <br>";
    echo "Program Studi : $prodi <br>";

    $total = 0;
    foreach ($skill as $skor) {
        $total += $ar_skill[$skor];
    }

    function skor_skill($total) {
        if ($total >= 100 && $total <= 170) {
            return "Sangat Baik";
        } elseif ($total >= 60 && $total <= 100) {
            return "Baik";
        } elseif ($total >= 40 && $total <= 60) {
            return "Cukup";
        } elseif ($total >= 0 && $total <= 40) {
            return "Kurang";
        } else {
            return "Tidak Memadai";
        }
    }

    echo "Skill : ";
    foreach ($skill as $skor) {
        echo " $skor ,";
    }
    echo "<br>";
    echo "Total Skor : $total <br>";
    echo "Kategori Skill : " . skor_skill($total) . "<br>";
    echo "Domisili : $domisili <br>";
}

?>
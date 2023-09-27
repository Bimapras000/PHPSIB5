<?php 
//contoh funsi void atau yang tidak mengembalikan nilai

//deklasari vungsi salam
function salam(){
    echo '<br> Selamat Pagi Teman-teman';
}
function sapa($kawan){
    echo '<br> Selamat Pagi '.$kawan;
}

function kabar($kawan='Pras'){
    echo '<br> Hai apa kabar '.$kawan;
}
//eksekusi atau output function salam 
salam();

$nama = 'Bima';
sapa($nama);
kabar();

echo '<br><br>';
function prima($bilangan){
    $prima = true;
    for($i=2; $i<$bilangan; $i++){
        if($bilangan % $i == 0){
            $prima = false;
        }
    }
    return $prima;
}
if(prima(2)){
    echo "Bilangan Prima";
}else{
    echo "Bukan Bilangan Prima";
}

?>
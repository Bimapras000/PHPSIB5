<?php 
require_once 'abstrak.php';
class lingkaran extends bentuk2d{
    public $jari2;
    public function __construct($jari2){
        $this->jari2 = $jari2;
    }
    public function keliling(){
        echo "Lingkaran ";
    }
    public function luasbidang(){
        $luas = 3.14 * $this->jari2 * $this->jari2;
        return $luas;
    } 
}


?>
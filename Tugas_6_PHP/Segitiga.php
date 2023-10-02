<?php 
require_once 'abstrak.php';
class Segitiga extends bentuk2d{
    public $alas;
    public $tinggi;

    public function __construct($alas,$tinggi){
        $this->alas = $alas;
        $this->tinggi = $tinggi;
    }

    public function namaBidang(){
        return 'Segitiga';
    }

    public function luasBidang() {
        return 0.5 * $this->alas * $this->tinggi;
    }

    public function kelilingBidang() {
        return 3 * $this->alas; // Keliling untuk segitiga sama sisi
    }
}



?>
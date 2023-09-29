<?php 
class gempa{
    private $lokasi;
    private $skala;

    // Konstruktor untuk menginisialisasi variabel
    public function __construct($lokasi, $skala){
        $this->lokasi = $lokasi;
        $this->skala = $skala;
    }

    // Metode untuk menghitung dan mengembalikan dampak gempa
    private function dampak($skala){
        if ($skala >= 0 && $skala <= 2) {
            $dampak = 'Tidak terasa';
        } else if ($skala > 2 && $skala <= 4) {
            $dampak = 'Bangunan retak-retak';
        } else if ($skala > 4 && $skala <= 6) {
            $dampak = 'Bangunan roboh';
        } else {
            $dampak = 'Berpotensi tsunami';
        }
        return $dampak;
    }

    // Metode untuk mencetak informasi gempa
    public function cetak(){
        echo "Lokasi : " . $this->lokasi . "<br>";
        echo "Skala : " . $this->skala . "<br>";
        echo "Dampak : " . $this->dampak($this->skala) . "<br>";
    }
}

?>
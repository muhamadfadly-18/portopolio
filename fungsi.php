<?php
// class produk{
//     public $bakwan;
//     public $bakso;
//     public $jlmbakwan;
//     public $jlmbakso;
//     public $hargabakwan;
//     public $hargabakso;
//     public $totalseluruh;
//     public $totalhargabakwan;
//     public $totalhargabakso;
   

//     function __construct(){
//         $this->hargabakwan = 2000;
//         $this->hargabakso = 10000;
//     }

// }

// class jumlah extends produk{
//     public function getjumlah($jlmbakwan,$jlmbakso){
//         $this->jlmbakwan = $jlmbakwan;
//         $this->jlmbakso = $jlmbakso;
//     }

//     public function setharga(){
//         $this->hargabakwan = $this->hargabakwan * $this->jlmbakwan;
//         $this->hargabakso = $this->hargabakso * $this->jlmbakso;
//         $this->totalseluruh = $this->totalhargabakwan * $this->totalhargabakso;

//     }

//     public function cekstruk(){
//         echo "******  <b>$ ikantin wikrama $</b> ******";
//         echo "<br>";
//         echo "bakwan : $this->jlmbakwan x Rp. $this->hargabakwan : <b>$this->totalhargabakwan</b>";
//         echo "<br>";
//         echo "bakwan : $this->jlmbakso x Rp. $this->hargabakso : <b>$this->totalhargabakso</b>";
//         echo "<br><br>";
//         echo "Total bayar : RP.<b>$this->totalseluruh</b>";
//         echo "<br>";
//         echo "*************************************";
//     }
// } 





// class Produk {

// public $bakwan;
// public $bakso;
// public $jmlBakwan; 
// public $jmlBakso;
// public $hargaBakwan;
// public $hargaBakso;
// public $totalSeluruh;
// public $totalHargaBakwan;
// public $totalHargaBakso;

// function __construct() {
// $this->hargaBakwan = 2000;
// $this->hargaBakso = 10000;
// }

// }

// class Jumlah extends Produk {
// public function getJumlah ($jmlBakwan, $jmlBakso){

// $this->jmlBakwan = $jmlBakwan; $this->jmlBakso = $jmlBakso;

// }

// public function setHarga() {

// $this->totalHargaBakwan = $this->hargaBakwan* $this->jmlBakwan;
// $this->totalHargaBakso = $this->hargaBakso $this->jmlBakso;
// $this->totalSeluruh = $this->totalHargaBakwan+ $this->totalHargaBakso;
// }

// public function cetakStruk() {
// echo "******* <b>$ iKantin Wikrama $</b> *******";
// echo "<br>";
// echo "Bakwan: $this->jmlBakwan x Rp. $this->hargaBakwan: <b>$this->totalHarga Bakwan</b>";
// echo "<br>";
// echo "Bakso : $this->jmlBakso x Rp. $this->hargaBakso: <b>$this->totalHargaBakso</b>";
// echo "<br><br>";
// echo "Total Bayar Rp. <b>$this->totalSeluruh</b>"
// ;
// echo "<br>";

// }

// }

// 


class Produk {
    public $bakwan,
        $bakso,
        $sate,
        $jmlBakwan, 
        $jmlBakso,
        $jmlsate, 
        $hargaBakwan, 
        $hargaBakso,
        $hargasate, 
        $totalSeluruh, 
        $totalHargaBakwan, 
        $totalHargaBakso,
        $totalHargasate;

    function __construct() {
        $this->hargaBakwan = 2000;
        $this->hargaBakso = 10000;
        $this->hargasate = 5000;
    }
}

class Jumlah extends Produk {
    public function getJumlah ($jmlBakwan, $jmlBakso) {
        $this->jmlBakwan = $jmlBakwan;
        $this->jmlBakso = $jmlBakso;
        // $this->jmlsate = $jmlsate;

    }

    public function setHarga() {
        $this->totalHargaBakwan = $this->hargaBakwan * $this->jmlBakwan;
        $this->totalHargaBakso = $this->hargaBakso * $this->jmlBakso;
        // $this->totalHargasate = $this->hargasate * $this->jmlsate;
        // $this->totalSeluruh = $this->totalHargaBakwan + $this->totalHargaBakso;
        // $this->totalSeluruh = $this->totalHargaBakwan + $this->totalHargasate;
        // $this->totalSeluruh = $this->totalHargasate + $this->totalHargaBakso;
        $this->totalSeluruh = $this->totalHargaBakwan + $this->totalHargaBakso;


    }

    public function cetakStruk() {
        echo "Bakwan : $this->jmlBakwan x Rp. $this->hargaBakwan : <b>$this->totalHargaBakwan</b>";
        echo "<br>";
        echo "Bakso : $this->jmlBakso x Rp. $this->hargaBakso : <b>$this->totalHargaBakso</b>";
        // echo "Bakso : $this->jmlsate x Rp. $this->hargasate : <b>$this->totalHargasate</b>";
        echo "<br><br>";
        echo "Nama Pembli :" $this-> [nama_pembeli];
        echo "<br>";
        echo "Nama alamat:" $this-> [nama_alamat];
        echo "<br><br>";
        echo "Total baya : Rp. <b>$this->totalSeluruh</b>";
    }
}
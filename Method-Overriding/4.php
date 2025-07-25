<?php
class Kendaraan{
     public $jumlahRoda;
     public $merk;
    public function suaraKendaraan(){
        echo "rawrrr";
    }
}

class Mobil extends Kendaraan{
    public function bukaKap(){
        echo "kap mesin dibuka";
    }
    public function suaraKendaraan(){
        echo "mmmm....Stututututu";
    }
    
}
$mobil = new Mobil();
$kendaraan = new Kendaraan();
$mobil->suaraKendaraan(); //output "mmmm....Stututututu"
$kendaraan->suaraKendaraan();//output "rawrrr"
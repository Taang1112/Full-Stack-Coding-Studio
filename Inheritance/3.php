<?php
class Kendaraan{
     public $jumlahRoda;
     public $merk;
    public function bergerak(){
        echo "kendaraan mulai bergerak";
    }
}

class Mobil extends Kendaraan{
    public function bukaKap(){
        echo "kap mesin dibuka";
    }
    
}

class Motor extends Kendaraan {
    public function standar() {
        echo "standar dua diturunkan";
    }

    public function bukaJok(){
        echo "jok motor dibuka";

    }
}

class Tipe extends Mobil {
    public function sport() {
        echo "Tipe Mobil ini Adalah Mobil Sport";
    }
}





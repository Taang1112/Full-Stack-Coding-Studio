<?php
trait LuasLingkaran {
    public function luasLingkaran($jari2){
        return $jari2 * $jari2 * 22 / 7;
    }
}

class Lingkaran {
    use LuasLingkaran;
}

$lingkaran = new Lingkaran();
echo $lingkaran->luasLingkaran(7);

// Contoh class lain (tanpa trait, langsung buat method sendiri)
class Lingkaran {
    public function luasLingkaran($jari2){
        return $jari2 * $jari2 * 22 / 7;
    }
}

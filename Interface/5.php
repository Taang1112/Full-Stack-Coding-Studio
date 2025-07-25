<?php

interface Bentuk {
    public function Luas();
}

class Lingkaran implements Bentuk {
    private $jari2;

    public function Luas($jari2) {
        return $jari2 * $jari2 * 22 / 7;
    }
}

class Persegi implements Bentuk {
    private $panjang;
    private $lebar;

    public function Luas($panjang, $lebar) {
        return $panjang * $lebar;
    }
}

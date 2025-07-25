<?php
class mobil {
    private $warna;
    private $merk;
    private $tahun;

    public function _construct($warna, $merk, $tahun) {
        $this->warna=$warna;
        $this->merk=$merk;
        $this->tahun=$tahun;


    }

    public function getWarna() {
        return $this->warna;
    }

    public function setWarna() {
        return $this->warna = $warna;
    }

    public function getMerk() {
        return $this->merk;
    }

    public function getTahun() {
        return $this->tahun;
    }

}

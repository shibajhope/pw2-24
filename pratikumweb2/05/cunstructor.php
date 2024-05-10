<?php

class Kendaraan 
{
    public $nama;
    public $warna;
    public $tempatOperasi;

    function __construct($nama, $warna, $tempatOperasi)
    {
        $this->nama = $nama;
        $this->warna = $warna;
        $this->tempatOperasi = $tempatOperasi;
    }
}

$kendaraan = new Kendaraan("Mobil", "Ungu", "Darat");
echo $kendaraan->nama;
echo $kendaraan->warna;
echo $kendaraan->tempatOperasi;
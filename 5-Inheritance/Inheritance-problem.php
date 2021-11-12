<?php

class Produk
{
    // Property
    public  $judul, // => "public" sebagai keyword visibility
        $penulis,
        $penerbit,
        $harga,
        $jmlHalaman,
        $waktuMain,
        $tipe;

    // Method
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0, $waktuMain = 0, $tipe)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain;
        $this->tipe = $tipe;
    }

    public function getLabel()
    {
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoLengkap()
    {
        $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

        if ($this->tipe == "Komik") {
            $str .=  " - {$this->jmlHalaman} Halaman.";
        } elseif ($this->tipe == "Game") {
            $str .=  " ~ {$this->waktuMain} Jam.";
        }

        return $str;
    }
}

class CetakInfoProduk
{
    // public function cetak() {
    //     $str = "Dragon Ball Z | Akira Toriyama, Bandai (Rp. 35000)";
    // }

    public function cetak(Produk $produk)
    {
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}

// Object instance dari class
$produk1 = new Produk("Dragon Ball Z", "Akira Toriyama", "Bandai", 35000, 100, 0, "Komik");

$produk2 = new Produk("Dino Crisis 3", "Dajiro Kato", "Namco", 75000, 0, 50, "Game");


echo $produk1->getInfoLengkap();
echo '<br>';
echo $produk2->getInfoLengkap();

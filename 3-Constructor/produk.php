<?php

class Produk
{
    // Property
    public  $judul = "judul", // => "public" sebagai keyword visibility
        $penulis = "penulis",
        $penerbit = "penerbit",
        $harga = 0;

    // Method
    public function getLabel()
    {
        return "$this->penulis, $this->penerbit";
    }
}

// Object instance dari class
$produk1 = new Produk();
$produk1->judul = "Dragon Ball Z";
$produk1->penulis = "Akira Toriyama";
$produk1->penerbit = "Bandai";
$produk1->harga = 35000;

$produk2 = new Produk();
$produk2->judul = "Dino Crisis 3";
$produk2->penulis = "Dajiro Kato";
$produk2->penerbit = "Namco";
$produk2->harga = 75000;

echo "Komik : " . $produk1->getLabel();
echo "<br>";
echo "Game : " . $produk2->getLabel();

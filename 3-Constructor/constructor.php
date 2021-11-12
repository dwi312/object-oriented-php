<?php

class Produk
{
    // Property
    public  $judul, // => "public" sebagai keyword visibility
        $penulis,
        $penerbit,
        $harga;

    // Method
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getLabel()
    {
        return "$this->penulis, $this->penerbit";
    }
}

// Object instance dari class
$produk1 = new Produk("Dragon Ball Z", "Akira Toriyama", "Bandai", 35000);

$produk2 = new Produk("Dino Crisis 3", "Dajiro Kato", "Namco", 75000);

echo "Komik : " . $produk1->getLabel();
echo "<br>";
echo "Game : " . $produk2->getLabel();

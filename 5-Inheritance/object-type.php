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
$produk1 = new Produk("Dragon Ball Z", "Akira Toriyama", "Bandai", 35000);

$produk2 = new Produk("Dino Crisis 3", "Dajiro Kato", "Namco", 75000);

echo "Komik : " . $produk1->getLabel();
echo "<br>";
echo "Game : " . $produk2->getLabel();
echo "<br>";
echo "<br>";
echo "<hr>";

$infoProduk1 = new CetakInfoProduk();
echo $infoProduk1->cetak($produk1);

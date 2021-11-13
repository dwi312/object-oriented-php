<?php

require 'App/init.php';

$produk1 = new Komik("Dragon Ball Z", "Akira Toriyama", "Bandai", 35000, 100);
$produk2 = new Game("Dino Crisis 3", "Dajiro Kato", "Namco", 175000, 50);

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);

echo $cetakProduk->cetak();

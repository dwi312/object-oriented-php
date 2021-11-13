<?php

require 'App/init.php';

// $produk1 = new Komik("Dragon Ball Z", "Akira Toriyama", "Bandai", 35000, 100);
// $produk2 = new Game("Dino Crisis 3", "Dajiro Kato", "Namco", 175000, 50);

// $cetakProduk = new CetakInfoProduk();
// $cetakProduk->tambahProduk($produk1);
// $cetakProduk->tambahProduk($produk2);

// echo $cetakProduk->cetak();

/////////////////////////////////////////////

// new App\Produk\User();
// echo "<br>";
// new App\Service\User();

/////////////////////////////////////////////
use App\Produk\User as ProdukUser;
use App\Service\User as ServiceUser;

new ProdukUser();
echo "<br>";
new ServiceUser();

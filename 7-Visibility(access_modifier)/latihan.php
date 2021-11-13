<!-- 
            *** VISIBILTY ***
        - Konsep yang dipergunakan untuk mengatur akses dari "property" dan "method" pada sebuah Object.
        - Ada 3 keyword visibility : 
            1. public => dapat digunakan dimana saja, bahkan diluar kelas.
            2. protected => hanya dapat digunakan didalam sebuah kelas beserta turunannya.
            3. private => hanya dapat digunakan didalam sebuah kelas tertentu saja.

        Kenapa perlu menerapkan access modifier/ visibilty ?
        - Hanya memperlihatkan aspek dari class yang dibutuhkan oleh 'client'.
        - Menentukan kebutuhan yang jelas untuk object.
        - Memberikan kendali terhadap kode untuk menghindari 'bug.'
 -->

<?php




class Produk
{
    public  $judul, $penulis, $penerbit;

    protected $diskon;
    private $harga;

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

    public function getInfoProduk()
    {
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        return $str;
    }

    public function getHarga()
    {
        return $this->harga - ($this->harga * $this->diskon / 100);
    }
}

class Komik extends Produk
{
    public $jmlHalaman;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);

        $this->jmlHalaman = $jmlHalaman;
    }

    public function getInfoProduk()
    {
        $str = "Komik : " . parent::getInfoProduk() . " - {$this->jmlHalaman} Halaman.";
        return $str;
    }
}

class Game extends Produk
{
    public $waktuMain;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);

        $this->waktuMain = $waktuMain;
    }

    public function getInfoProduk()
    {
        $str = "Game : " . parent::getInfoProduk() . " ~ {$this->waktuMain} Jam.";
        return $str;
    }

    public function setDiskon($diskon)
    {
        $this->diskon = $diskon;
    }
}

class CetakInfoProduk
{
    public function cetak(Produk $produk)
    {
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}



// Object instance dari class
$produk1 = new Komik("Dragon Ball Z", "Akira Toriyama", "Bandai", 35000, 100);

$produk2 = new Game("Dino Crisis 3", "Dajiro Kato", "Namco", 175000, 50);


echo $produk1->getInfoProduk();
echo '<br>';
echo $produk2->getInfoProduk();
echo '<br>';
echo '<hr>';
echo '<br>';

echo "Harga : Rp. " . $produk2->getHarga() . ",-";

$produk2->setDiskon(50);
echo '<br>';
echo "Anda Mendapatkan diskon 50% ";
echo '<br>';
echo '<br>';
echo "Bayar : Rp. ";
echo $produk2->getHarga() . ",-";

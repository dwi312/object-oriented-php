<?php

// class ContohStatic
// {
//     public static $angka = 1;

//     public static function halo()
//     {
//         return "Hello world! " . self::$angka++ . "kali.";
//     }
// }

// echo ContohStatic::$angka;
// echo '<br>';
// echo ContohStatic::halo();
// echo "<br>";
// echo "<hr>";

// echo "<br>";
// echo ContohStatic::halo();


class ContohTanpaStatic
{
    public $angka = 1;

    public function halo()
    {
        return "Hello world! " . $this->angka++ . " kali. <br>";
    }
}


class ContohDenganStatic
{
    public static $angka = 1;

    public function halo()
    {
        return "Hello world! " . static::$angka++ . " kali. <br>";
    }
}

///////////////////////////////
echo "contoh tanpa static";

$obj = new ContohTanpaStatic;
$obj2 = new ContohTanpaStatic;

echo "<br>";
echo "<br>";
echo $obj->halo();
echo $obj->halo();
echo "<br>";
echo $obj2->halo();
echo $obj2->halo();

echo "<br>";
echo "<hr>";
echo "<br>";
/////////////////////////////
echo "contoh dengan static";

$obj3 = new ContohDenganStatic;
$obj4 = new ContohDenganStatic;

echo "<br>";
echo "<br>";
echo $obj3->halo();
echo $obj3->halo();
echo "<br>";
echo $obj4->halo();
echo $obj4->halo();

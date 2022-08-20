<?php
//membuat class

class hewan{
    var $nama;
    var $jumlah_kaki;
    var $terbang_dan_tidak_terbang;
    var $suara;
}
$hewan = new hewan;
$hewan->nama="gagak";
$hewan->kaki=2;
$hewan->terbang_atau_tidak="bisa terbang";
$hewan->suara="akkk akkkk akkkk";

echo "sakura adalah $hewan->nama<br>";
echo "punya kaki sebanyak : $hewan->kaki<br>";
echo "gagak adalah hewan yang $hewan->terbang_atau_tidak<br>";
echo "suaranya : $hewan->suara<br>";

echo "<hr>";

$hewan = new hewan;
$hewan->nama="merpati";
$hewan->kaki=2;
$hewan->terbang_atau_tidak="bisa terbang";
$hewan->suara="krukkk krukk";

echo "santi adalah $hewan->nama<br>";
echo "punya kaki sebanyak : $hewan->kaki<br>";
echo "merpati adalah hewan yang $hewan->terbang_atau_tidak<br>";
echo "suaranya : $hewan->suara<br>";

echo "<hr>";

$hewan = new hewan;
$hewan->nama="harimau";
$hewan->kaki=4;
$hewan->terbang_atau_tidak="tidak bisa terbang";
$hewan->suara="rawwww wrawwww";

echo "balu adalah $hewan->nama<br>";
echo "punya kaki sebanyak : $hewan->kaki<br>";
echo "harimau adalah hewan yang $hewan->terbang_atau_tidak<br>";
echo "suaranya : $hewan->suara<br>";

echo "<hr>";

$hewan = new hewan;
$hewan->nama="katak";
$hewan->kaki=4;
$hewan->terbang_atau_tidak="tidak bisa terbang";
$hewan->suara="kwebekkk kwebekk";

echo "koko adalah $hewan->nama<br>";
echo "punya kaki sebanyak : $hewan->kaki<br>";
echo "katak adalah hewan yang $hewan->terbang_atau_tidak<br>";
echo "suaranya : $hewan->suara<br>";

echo "<hr>";


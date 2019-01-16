<?php 

require 'App/init.php';

$produk1 = new Komik("ILYFROM", "Michelle Zudith", "Paramitha S", 45000,274);
$produk2 = new Game("3600detik", "Steevan William","Nurholifah", 50000,55);

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk( $produk1 );
$cetakProduk->tambahProduk( $produk2 );
echo $cetakProduk->cetak();

echo "<hr>";

new Coba();

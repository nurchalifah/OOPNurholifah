 <?php

require 'App/init.php';


// $produk1 = new Komik("Naruto", "Mashashi Kishimoto", "Shonen Jump", 30000, 100);
// $produk2 = new Game("uncharted", "Neil Druckmann", "Sony Komputer", 250000, 50);

// $cetakProduk = new CetaInfoProduk();
// $cetakProduk->tambahProduk($produk1);
// $cetakProduk->tambahProduk($produk2);
// echo $cetakProduk->cetak();

// echo "<hr>";
use App\Service\User as ServiceUser;
use App\Service\User as ProdukUser;



new ServiceUser();
echo "<br>";
new ProdukUser();
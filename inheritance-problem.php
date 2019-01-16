<?php 
class Produk {
	public $judul,
			$penulis,
			$penerbit,
			$harga,
			$jmlHalaman,
			$waktumain,
			$type;

	public function __construct($judul = "judul", $penulis = "penulis", $penerbit =   "penerbit", $harga = 0, $jmlHalaman = 0, $waktumain = 0, $type ){
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
		$this->jmlHalaman = $jmlHalaman;
		$this->waktumain = $waktumain;
		$this->type = $type;
	}
			
	public function getLabel(){
		return "$this->penulis,$this->penerbit";
	}
	public function getInfoLengkap(){
		$str = "{$this->type} : {$this->judul} : {$this->getLabel()} : (Rp.{$this->harga})";
		if ($this->type == "Komik"){
			$str .= " - {$this->jmlHalaman} halaman.";
		} else if ( $this->type == "Game"){
			$str .= " - {$this->waktumain} jam.";

		}
		return $str;
		}
	}


class CetakInfoProduk{
	public function cetak($produk){
		$str = "{$produk->judul} | {$produk->getLabel()}(Rp. {$produk->harga})";
		return $str;
	}
}



$produk1 = new Produk("Naruto","Masashi Kishimoto","Shonen Jump",30000,100,0, "komik");

$produk2 = new Produk("Uncharted", "Neil Druckmann","Sony Computer",250000,0,50, "Game");



echo "Komik : " . $produk1->getLabel();
echo"<br>";
echo "Game : " .$produk2->getLabel(); 
echo "<br>";
$infoproduk1 = new CetakInfoProduk();
echo $infoproduk1->cetak($produk1);

?>
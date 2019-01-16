<?php 
class Komik extends Produk implements InfoProduk {
	public $jumlahalaman ;

	public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0,$jumlahalaman = 0) {

		parent::__construct($judul,$penulis,$penerbit,$harga);

		$this->jumlahalaman = $jumlahalaman;
	
}

public function getInfo() {

	$str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

	return $str;
}
	
	public function getInfoProduk(){
		$str = "Komik : ".$this->getInfo()."- {$this->jumlahalaman} Halaman.";

		return $str;
	}

}


 ?>
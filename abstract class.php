<?php

abstract class Produk {
	private $judul,
			$penulis,
			$penerbit,
			$harga,
			$diskon = 0;

	public function __construct($judul = "judul",$penulis = "penulis",$penerbit = "penerbit",$harga = 0) {
				$this->judul = $judul;
				$this->penulis = $penulis;
				$this->penerbit = $penerbit;
				$this->harga = $harga;

	}

	public function setJudul($judul) {
		$this->judul = $judul;
	}

	public function getJudul() {
		return $this->judul;
	}

	public function setPenulis($penulis) {
		$this->penulis = $penulis;
	}

	public function getPenulis() {
		return $this->penulis;
	}

	public function setPenerbit($penerbit) {
		$this->penerbit = $penerbit;
	}

	public function getPenerbit() {
		return $this->penerbit;
	}

	public function setDiskon($diskon) {
		$this->diskon = $diskon;
	}

	public function getDiskon() {
		return $this->diskon;
	}

	public function setHarga($harga) {
		$this->harga = $harga;
	}

	public function getHarga() {
		return $this->harga - ($this->harga * $this->diskon / 100);
	}

	public function getLabel() {
		return "$this->penulis, $this->penerbit";
	}

	abstract public function getInfoProduk();

	public function getInfo() {
		$str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

		return $str;
	}
} 

class Komik extends Produk {
	public $jumlahalaman;

	public function __construct($judul = "judul",$penulis = "penulis",$penerbit = "penerbit",$harga = 0, $jumlahalaman = 0) {
		parent::__construct($judul,$penulis,$penerbit,$harga);
		$this->jumlahalaman = $jumlahalaman;
	}

	public function getInfoProduk() {
		$str = "Komik : " . $this->getInfo() . " - {$this->jumlahalaman} Halaman.";
		return $str;
	}
}

class Game extends Produk {
	public $waktumain;

	public function __construct($judul = "judul",$penulis = "penulis",$penerbit = "penerbit",$harga = 0, $waktumain = 0) {
		parent::__construct($judul,$penulis,$penerbit,$harga);
		$this->waktumain = $waktumain;
	}

	public function getInfoProduk() {
		$str = "Game : " . $this->getInfo() . " ~ {$this->waktumain} Jam. ";
		return $str;
	}
}

class CetakInfoProduk {
	public $daftarProduk = array();

	public function tambahProduk(Produk $produk) {
		$this->daftarProduk[] = $produk;
	}

	public function cetak() {
		$str = "DAFTAR PRODUK : <br>";

		foreach($this->daftarProduk as $p)
			$str .= "- {$p->getInfoProduk()}<br>";

		return $str;
	}
}

$produk1 = new Komik("ILYFROM", "Michelle Zudith", "Paramitha S", 45000,274);

$produk2 = new Game("3600detik","Steevan William","Nisa A", 50000,55);

$CetakInfoProduk = new CetakInfoProduk();
$CetakInfoProduk->tambahProduk($produk1);
$CetakInfoProduk->tambahProduk($produk2);
echo $CetakInfoProduk->cetak();

 ?>
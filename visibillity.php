<?php 

class Produk{
	public $judul,
		   $penulis,
		   $penerbit;

	protected $diskon = 0;
		   
	private $harga;

		   public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit" , $harga = 0 ){
		   	$this->judul = $judul;
		   	$this->penulis = $penulis;
		   	$this->penerbit = $penerbit;
		   	$this->harga = $harga;
		   }


		   public function getHarga(){
				return $this->harga - ( $this->harga * $this->diskon / 100);
	}

	public function getLabel() {
		return "$this->penulis, $this->penerbit";
	}

	public function getInfoProduk(){
		// Komik : AOT | Hajime Isayama, Erlangga (Rp.28000) - 75 Halaman.
		$str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
		return $str;
	}
}



class Komik extends Produk{
	public $jmlHal;


	public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit" , $harga = 0, $jmlHal = 0){

		parent::__construct($judul, $penulis, $penerbit, $harga);		
		$this->jmlHal = $jmlHal;
	}

	public function getInfoProduk(){
		$str = "Komik : ". parent::getInfoProduk() . " - {$this->jmlHal} Halaman.)";
		return $str;
	}
}


class Game extends Produk{
	public $waktuMain;

	public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit" , $harga = 0, $waktuMain = 0) {
		parent::__construct($judul, $penulis, $penerbit, $harga);

		$this->waktuMain = $waktuMain;
	}

	public function setDiskon($diskon){
		   	$this->diskon = $diskon;
		   }
	
	public function getInfoProduk(){
		$str = "Game : ". parent::getInfoProduk() . " - {$this->waktuMain} Jam.)";
		return $str;
	}
}


class CetakInfoProduk{
	public function cetak( Produk $produk ) {
		$str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
		return $str;
	}
}



$produk1 = new Komik("AOT","Hajime Isayama", "Erlangga", 28000, 100);
$produk2 = new Game("Genshin", "Qorri Aina", "Kelas 4F", 3500000, 50);



echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
echo "<hr>";

$produk2->setDiskon(50);
echo $produk2->getHarga();






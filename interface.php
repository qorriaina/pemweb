<?php 

interface InfoProduk{
	public function getInfoProduk();
}

abstract class Produk {
	protected $judul,
		   $penulis,
		   $penerbit,
		   $harga,
		   $diskon =0;
		   
		   public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit" , $harga = 0 ){
		   	$this->judul = $judul;
		   	$this->penulis = $penulis;
		   	$this->penerbit = $penerbit;
		   	$this->harga = $harga;
		   }


		   public function setJudul( $judul ) {
		   	$this->judul = $judul;
		   }

		   public function getJudul() {
		   	return $this->judul;
		   }

		   public function setPenulis( $penulis ) {
		   	$this->penulis = $penulis;
		   }

		   public function getPenulis() {
		   	return $this->penulis;
		   }

		   public function setPenerbit( $penerbit ) {
		   	$this->penerbit = $penerbit;
		   }

		   public function getPenerbit() {
		   return $this->penulis;
		   }

		   public function getHarga(){
				return $this->harga - ( $this->harga * $this->diskon / 100);
		   }

		   public function setHarga( $harga ){
				$this->harga;
		   }

		   public function setDiskon($diskon) {
		   	$this->diskon = $diskon;
		   }
		   public function getDiskon() {
		   return $this->diskon;
		   }

	public function getLabel() {
		return "$this->penulis, $this->penerbit";
	}
	
	abstract public function getInfo();

}



class Komik extends Produk implements InfoProduk {
	public $jmlHal;


	public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit" , $harga = 0, $jmlHal = 0){

		parent::__construct($judul, $penulis, $penerbit, $harga);		
		$this->jmlHal = $jmlHal;
	}

	public function getInfo() {
		$str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
		return $str;
	}

	public function getInfoProduk(){
		$str = "Komik : ". $this->getInfo() . " - {$this->jmlHal} Halaman.)";
		return $str;
	}
}


class Game extends Produk implements InfoProduk {
	public $waktuMain;

	public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit" , $harga = 0, $waktuMain = 0) {
		parent::__construct($judul, $penulis, $penerbit, $harga);

		$this->waktuMain = $waktuMain;
	}

	public function getInfo() {
		$str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
		return $str;
	}
	
	public function getInfoProduk(){
		$str = "Game : ". $this->getInfo() . " - {$this->waktuMain} Jam.)";
		return $str;
	}
}


class CetakInfoProduk{
	public $dftrProduk = array();

	public function tambahProduk( Produk $produk){
		$this->dftrProduk[] = $produk;
	}

	public function cetak()  {
		$str = "DAFTAR PRODUK : <br>";

		foreach ($this->dftrProduk as $p) {
			$str .= "- {$p->getInfoProduk()} <br>";
		}

		return $str;
	}
}



$produk1 = new Komik("AOT","Hajime Isayama", "Erlangga", 28000, 100);
$produk2 = new Game("Genshin", "Qorri Aina", "Kelas 4F", 350000, 50);

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk( $produk1 );
$cetakProduk->tambahProduk( $produk2 );
echo $cetakProduk->cetak();

































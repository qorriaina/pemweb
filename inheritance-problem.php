<?php 

class Produk{
	public $judul,
		   $penulis,
		   $penerbit,
		   $harga,
		   $jmlHal,
		   $waktuMain,
		   $tipe;

		   public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit" , $harga = 0, $jmlHal =0, $waktuMain = 0, $tipe){
		   	$this->judul = $judul;
		   	$this->penulis = $penulis;
		   	$this->penerbit = $penerbit;
		   	$this->harga = $harga;
		   	$this->jmlHal = $jmlHal;
		   	$this->waktuMain = $waktuMain;
		   	$this->tipe = $tipe;
		   }

	public function getLabel() {
		return "$this->penulis, $this->penerbit";
	}

	public function getInfoLengkap(){
// Komik : AOT | Hajime Isayama, Erlangga (Rp.28000) - 75 Halaman.
		$str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
		if($this->tipe == "Komik") {
			$str .= " - {$this->jmlHal} Halaman.";
		}
		elseif ($this->tipe == "Game" ) {
			$str .= " ~ {$this->waktuMain} Jam.";
		}
		return $str;
	}
}

class CetakInfoProduk{
	public function cetak( Produk $produk ) {
		$str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
		return $str;
	}
}



$produk1 = new Produk("AOT","Hajime Isayama", "Erlangga", 28000, 100, 0, "Komik");
$produk2 = new Produk("Genshin", "Qorri Aina", "Mihoyo", 350000, 0, 50, "Game");



echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();




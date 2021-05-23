<?php 

class Produk{
	public $judul ="judul",
		   $penulis = "penulis",
		   $penerbit = "penerbit",
		   $harga = 0;

	public function getLabel() {
		return "$this->penulis, $this->penerbit";
	}

}

// $produk1 = new Produk();
// $produk1->judul = "AOT";
// var_dump($produk1);

// $produk2 = new Produk();
// $produk2->judul = "I DO";
// $produk2->tambahProperty = "MANGA";
// var_dump($produk2);

$produk3 = new Produk();
$produk3->judul = "AOT";
$produk3->penulis ="Hajime Isayama";
$produk3->penerbit = "Erlangga";
$produk3->harga = 28000;

$produk4 = new Produk();
$produk4->judul = "Genshin";
$produk4->penulis = "Qorri Aina";
$produk4->penerbit = "Mihoyo";
$produk4->harga = 350000;

echo "Komik : " . $produk3->getLabel();
echo "<br>";
echo "Game : " . $produk4->getLabel();










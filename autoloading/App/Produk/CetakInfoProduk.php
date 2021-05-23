<?php

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
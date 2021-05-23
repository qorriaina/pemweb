<?php


require_once'App/init.php';

// $produk1 = new Komik("Naruto","Masashi Kishimoto", "Erlangga", 30000, 100);
// $produk2 = new Game("LostSaga", "Dimas Sobari", "Kelas 4F", 1000000, 50);

// $cetakProduk = new CetakInfoProduk();
// $cetakProduk->tambahProduk( $produk1 );
// $cetakProduk->tambahProduk( $produk2 );
// echo $cetakProduk->cetak();


use App\Service\User as ServiceUser;
use App\Produk\User as PrdoukUser; 

new ServiceUser();
echo"<br>";
new PrdoukUser();













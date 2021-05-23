<?php

// define ('NAMA', 'QORRI AINA');
// echo NAMA;

// echo "<br>";

// const UMUR = 20;
// echo UMUR;

// class Coba{
// 	const NAMA = 'QORRI';
// }
// echo Coba::NAMA;


//echo __File__;




// function coba(){
// 	return __FUNCTION__;
// }
//  echo coba();
 

 class coba{
 	public $kelas = __CLASS__;
 }

$obj = new Coba;
echo $obj->kelas;




?>
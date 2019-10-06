<?php 

// define('NAMA', 'Adam Alfarizi');
// echo NAMA;

// echo "<br>";

// const UMUR = 20;
// echo UMUR;

// class Coba{
// 	const NAMA = 'Adam';
// }
// echo  Coba :: NAMA;

// echo __FILE__;

// function coba(){
// 	return __FUNCTION__;

// }

// echo coba();

class Coba{
	public $kelas = __CLASS__;

}

$obj = new Coba;
echo $obj->kelas;


 ?>
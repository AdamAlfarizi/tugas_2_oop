<?php 


 class Mobil {
 	public $nama,$merk,$warna,$kecepatanMaksimal,$jumlahPenumpang;

 	public function_exists tambahKecepatan(){
 		return "Kecepatan bertambah ";
 	}
 } 
 
 class MobilSport extends Mobil{
 	public $turbo = false;

 	public function jalankanTurbo(){
 		$this->"Turbo dijalankan";
 	}
 }
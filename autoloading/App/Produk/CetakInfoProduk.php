<?php 
class CetakInfoProduk{
	public $daftarProduk = array();


	public function tambahProduk(Produk $produk){
		$this->daftarProduk[] = $produk;
	}

	public function cetak(){
		$str = "DAPTAR PRODUK : <br>";

		foreach ($this->daftarProduk as $p ){
			$str .= "- {$p->getInfoProduk()} <br>";
		}
		return $str;
	}
}
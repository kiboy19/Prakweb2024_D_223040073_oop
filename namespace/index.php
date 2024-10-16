<?php

require_once 'App/init.php';



// $produk1 = new Komik("Naruto", "Masashi Kisimoto", "Shonen Jump", 15000, 100);
// $produk2 = new Game("Uncharted", "Neil Druckman", "Sony Computer", 250000, 50);


// $cetakProduk = new CetakInfoProduk();
// $cetakProduk->tambahProduk($produk1);
// $cetakProduk->tambahProduk($produk2);
// echo $cetakProduk->cetak();
// echo "<hr>";

use App\Services\User as ServicesUser;
use App\Produk\User as ProdukUser;

new ServicesUser();
echo "<br>";
new ProdukUser();

<?php

class Produk
{
    // Property
    public $judul,
        $penulis,
        $penerbit,
        $harga,
        $jmlHalaman,
        $waktuMain;

    // Constructor Method
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0, $waktuMain = 0)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain;
    }

    // Fungsi Mengembalikan Nilai dari Contructor
    public function getLabel()
    {
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoProduk()
    {
        // Komik : Naruto | Masashi Khisimoto, Shonen Jump (Rp. 15000) - 100 Halaman.
        $str = "{$this->judul} | {$this->getLabel()} {Rp. {$this->harga}}";
        return $str;
    }
}

class Komik extends Produk
{
    public function getInfoProduk()
    {
        $str = "Komik: {$this->judul} | {$this->getLabel()} {Rp. {$this->harga}} - {$this->jmlHalaman} Halaman.";
        return $str;
    }
}

class Game extends Produk
{
    public function getInfoProduk()
    {
        $str = "Game: {$this->judul} | {$this->getLabel()} {Rp. {$this->harga}} ~ {$this->waktuMain} Jam.";
        return $str;
    }
}

class  CetakInfoProduk
{
    public function cetak(Produk $produk)
    {
        $str = "{$produk->judul} | {$produk->getLabel()}, (Rp. {$produk->harga})";
        return $str;
    }
}


$produk1 = new Komik("Naruto", "Masashi Kisimoto", "ShonenJump", 15000, 100, 0);
$produk2 = new Game("Uncharted", "Neil Druckman", "Sony Computer", 250000, 0, 50);

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();






// echo "Komik: " . $produk1->getLabel();
// echo "<hr>";
// echo "Game: " . $produk2->getLabel();
// echo "<hr>";
// $infoProduk1 = new CetakInfoProduk();
// echo $infoProduk1->cetak($produk1);

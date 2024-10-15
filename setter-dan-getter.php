<?php

class Produk
{
    // Property
    private $judul,
        $penulis,
        $penerbit,
        $harga,
        $diskon = 0;

    // Constructor Method
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    // Bagian Fungsi Setter

    public function setDiskon($diskon)
    {
        $this->diskon = $diskon;
    }

    public function setHarga($harga)
    {
        $this->harga = $harga;
    }

    public function setPenerbit($penerbit)
    {
        $this->penerbit = $penerbit;
    }

    public function setPenulis($penulis)
    {
        $this->penulis = $penulis;
    }

    public function setJudul($judul)
    {
        $this->judul = $judul;
    }

    // Bagian Fungsi Getter

    public function getDiskon()
    {
        return $this->diskon;
    }

    public function getPenerbit()
    {
        return $this->penerbit;
    }

    public function getPenulis()
    {
        return $this->penulis;
    }

    public function getJudul()
    {
        return $this->judul;
    }


    public function getHarga()
    {
        return $this->harga - ($this->harga * $this->diskon / 100);
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
    public $jmlHalaman;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0)
    {

        parent::__construct($judul, $penulis, $penerbit, $harga);

        $this->jmlHalaman = $jmlHalaman;
    }

    public function getInfoProduk()
    {
        $str = "Komik: " . parent::getInfoProduk() . " - {$this->jmlHalaman} Halaman.";
        return $str;
    }
}

class Game extends Produk
{

    public $waktuMain;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0)
    {

        parent::__construct($judul, $penulis, $penerbit, $harga);

        $this->waktuMain = $waktuMain;
    }


    public function getInfoProduk()
    {
        $str = "Game: " . parent::getInfoProduk() . " ~ {$this->waktuMain} Jam.";
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


$produk1 = new Komik("Naruto", "Masashi Kisimoto", "Shonen Jump", 15000, 100);
$produk2 = new Game("Uncharted", "Neil Druckman", "Sony Computer", 250000, 50);

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
echo "<hr>";

$produk2->setDiskon(50);
echo $produk2->getHarga();
echo "<hr>";

$produk1->setJudul("Pintar Berlogika");
echo $produk1->getJudul();
echo "<br>";
$produk1->setPenulis("Muhamad Ariel Septiadi");
echo $produk1->getPenulis();
echo "<br>";
$produk1->setPenerbit("Official Rajahemat");
echo $produk1->getPenerbit();
echo "<br>";
$produk1->setHarga(250000);
echo $produk1->getHarga();
echo "<hr>";


// echo "Komik: " . $produk1->getLabel();
// echo "<hr>";
// echo "Game: " . $produk2->getLabel();
// echo "<hr>";
// $infoProduk1 = new CetakInfoProduk();
// echo $infoProduk1->cetak($produk1);

<?php

abstract class Produk
{
    // Property
    protected $judul,
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



    abstract public function getInfo();
}

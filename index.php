<?php

class Buku
{
    public $judul;
    public $penulis;
    public $Tahunterbit;

    function Tampilkaninformasi()
    {
        echo "Judul: " . $this->judul . "<br>";
        echo "Penulis: " . $this->penulis . "<br>";
        echo "Tahun Terbit: " . $this->Tahunterbit . "<br>";
    }
}

$buku1 = new Buku();
$buku1->judul = "Tunggu Aku Sukses";
$buku1->penulis = "Naya Anindita";
$buku1->Tahunterbit = "2026";

$buku2 = new Buku();
$buku2->judul = "Buku Pintar";
$buku2->penulis = "Pidi baik";
$buku2->Tahunterbit = "2020";

$buku1->Tampilkaninformasi();
$buku2->Tampilkaninformasi();

?>
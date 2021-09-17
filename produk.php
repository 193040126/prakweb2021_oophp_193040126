<?php

class Produk {
    public $judul = "judul", 
    $penulis = "penulis", 
    $penerbit = "penerbit", 
    $harga = 0;

    public function getLabel(){
        return "$this->penulis, $this->penerbit";
    }

}

// $produk1 = new Produk();
// $produk1->judul = "Sasuke";
// var_dump($produk1);
// $produk2 = new Produk();

// var_dump($produk2);
$produk3 = new Produk();
$produk3->judul = "Sasuke";
$produk3->penulis = "Masashi Kishimoto";
$produk3->penerbit = "Shonen Run";
$produk3->harga = 50000;

$produk4 = new Produk();
$produk4->judul = "Uncharted";
$produk4->penulis = "Neil Druckman";
$produk4->penerbit = "Sony Computer";
$produk4->harga = 250000;

echo "Komik : $produk3->penulis, $produk3->penerbit";
echo "Komik : " . $produk3->getLabel();
echo "<br>";
echo "Game : " . $produk4->getLabel();
?>
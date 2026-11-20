<?php

//panggil file Halbi.php
require('./Halbi.php');

use PRAKTIKUM\Marketplace\produk;

//object
$produk = new produk();

$produk->setkode('P0001')->setnama('Laptop')->setharga(15000000)->setstok(5);

echo "nama produk :". $produk->getnama();
echo "<br/>";
echo "harga :". $produk->getharga();
echo "<br/>";
echo "stok:" . $produk->getstok();
echo "<br/>";
echo "pajak:". $produk->pajak() . "%";
echo "<br/>";
echo"<br/>";
echo "total harga setelah pajak: Rp. ".$produk->total();
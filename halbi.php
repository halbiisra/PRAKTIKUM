<?php


class Product{

    //Property
    public string $kode;
    public string $nama;
    public int $harga;  
    public int $stok;

    public const PAJAK = 0.11;
}   

//object
$product = new Product();
$product->kode = 'h15';
$product->nama = 'LAPTOP';
$product->harga = 10000000;
$product->stok = 5;

//hitung pajak
$pajak = product::PAJAK * 100; //11
$jumlahPajak = $product->harga * product::PAJAK; //1.1 Juta

//total
$total = $product -> harga + $jumlahPajak; //11,1 Juta

//hasil
echo "product: ". $product -> nama;
echo "harga: ". $product -> harga;
echo "stok: ". $product -> stok;
echo "PAJAK: ". $pajak;

echo"total harga setelah pajak". $total;
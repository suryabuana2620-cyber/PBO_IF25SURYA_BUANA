<?php

Class Produk {

      //properti
      public string $kode;
      public string $nama;
      public int $harga;
      public int $stok;

      //constant
      public const PAJAK = 0,11;
}

//object
$produk = new Produk();

$produk->Kode = 'P0001'
$produk->nama = 'Laptop';
$produk->harga = '10000000';
$produk->stok = '5';

//hitung pajak
$pajak = produk:PAJAK * 100;
$Jumlahpajak = $produk->harga * produk::PAJAK;

//total
$total = $produk->harga + $jumlahpajak;

//hasil
echo "produk: ". $produk->nama;
echo "harga: ". $produk->harga;
echo "Stok: ". $produk->Stok;
echo "Pajak: ". $Pajak;
echo "total harga setelah pajak: ", $total;
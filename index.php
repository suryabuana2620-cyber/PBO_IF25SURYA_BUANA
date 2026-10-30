?php

//panggil file PropertyConstan
require('.\PropertyConstan.php');

use Pbo\marketplace\Produk;

//object
$produk = new Produk('P0001','Laptop', 10000000,5);

// Hasil
echo "Produk: " . $produk->nama;
echo "<br>";

echo "Harga: Rp." . number_format($produk->harga, 0, ',', '.');
echo "<br>";

echo "Stok: " . $produk->stok;
echo "<br>";

echo "Pajak: " . Produk::pajak() . "%";
echo "<br><br>";

echo "Total harga setelah pajak: Rp." .
    number_format(Produk::total($produk->harga), 0, ',', '.');
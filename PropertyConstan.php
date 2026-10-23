<?php

class Produk {

    // Property
    public string $kode;
    public string $nama;
    public int $harga;
    public int $stok;

    // Konstanta
    public const PAJAK = 0.11;

    // Method static untuk menghitung persentase pajak
    public static function pajak() {
        return self::PAJAK * 100;
    }

    // Method static untuk menghitung total harga
    public static function total($harga) {
        return $harga + ($harga * self::PAJAK);
    }
}

// Object
$produk = new Produk();

$produk->kode = 'P0001';
$produk->nama = 'Laptop';
$produk->harga = 10000000;
$produk->stok = 5;

// Hasil
echo "Produk: " . $produk->nama;
echo "<br>";

echo "Harga: " . $produk->harga;
echo "<br>";

echo "Stok: " . $produk->stok;
echo "<br>";

echo "Pajak: " . Produk::pajak() . "%";
echo "<br><br>";

echo "Total harga setelah pajak: Rp." .
     Produk::total($produk->harga);

?>

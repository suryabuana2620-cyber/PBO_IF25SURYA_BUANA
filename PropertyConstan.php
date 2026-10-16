
<?php

class Produk {
    // Property
    public string $kode;
    public string $nama;
    public int $harga;
    public int $stok;

    // Constant
    const PAJAK = 0.11;
}

// Membuat object
$produk = new Produk();

// Mengisi property
$produk->kode = "P001";
$produk->nama = "Laptop";
$produk->harga = 10000000;
$produk->stok = 5;

// Menghitung pajak
$pajak = $produk->harga * Produk::PAJAK;
$totalHarga = $produk->harga + $pajak;

// Menampilkan output
echo "Produk: " . $produk->nama . PHP_EOL;
echo "Harga: Rp" . number_format($produk->harga, 0, ',', '.') . PHP_EOL;
echo "Stok: " . $produk->stok . PHP_EOL;
echo "Pajak: " . (Produk::PAJAK * 100) . "%" . PHP_EOL;
echo "Total harga setelah pajak: Rp" .
    number_format($totalHarga, 0, ',', '.') . PHP_EOL;

?>
